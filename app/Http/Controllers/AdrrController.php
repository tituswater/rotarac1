<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Zone;
use App\Adrr;

class AdrrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adrrs = DB::table('adrrs')
            ->join('users', 'adrrs.adrr_email', '=', 'users.email')
            ->join('clubs', 'users.member_club', '=', 'clubs.club_id')
            ->join('states', 'states.state_id', '=', 'clubs.state_id')
            ->join('zones', 'states.zone_id', '=', 'zones.zone_id')
            ->paginate(18);

        return view('admin.adrr.index', compact('adrrs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zones = Zone::orderBy('zone_title')->get();
        return view('admin.adrr.create', compact('zones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'adrr_email' => 'required',
            'adrr_tenure_start'=> 'required',
            'adrr_tenure_end'=> 'required',
        ]);
        Adrr::insert($request->all());
        return back()->with('success', 'Great! Officers added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
