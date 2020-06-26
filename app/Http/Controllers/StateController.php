<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Redirect;
use App\State;
use App\Zone;
use DB;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $states = DB::table('states')->join('zones', 'states.zone_id', '=', 'zones.zone_id')->orderBy('state_name')
            ->paginate(10);

        return view('admin.state.index', compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $zones = Zone::orderBy('zone_title')->paginate(500);
        return view('admin.state.create', compact('zones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'state_name' => 'required|unique:states|min:3|alpha',
            'zone_id' => 'required'
        ]);

        State::insert($request->all());
        return back()
            ->with('success', 'Great! State Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
