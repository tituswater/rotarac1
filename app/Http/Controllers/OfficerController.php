<?php

namespace App\Http\Controllers;

use App\Office;
use Illuminate\Http\Request;
use App\Officer;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use DB;

class OfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $officers = DB::table('officers')
            ->join('users', 'officers.member_email', '=', 'users.email')
            ->join('clubs', 'users.member_club', '=', 'clubs.club_id')
            ->join('states', 'states.state_id', '=', 'clubs.state_id')
            ->join('zones', 'states.zone_id', '=', 'zones.zone_id')
            ->join('offices', 'officers.office_held', '=', 'offices.office_id')
            ->paginate(18);
//        $counst = $clubs->count();
        return view('admin.officer.index', compact('officers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $offices = Office::orderBy('office_title')->get();
        return view('admin.officer.create', compact('offices'));
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
            'member_email' => 'required',
            'office_held' => 'required',
            'from' => 'required',
            'to' => 'required',
        ]);
        Officer::insert($request->all());
        return back()->with('success', 'Great! Officers added successfully.');
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
