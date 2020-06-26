<?php

namespace App\Http\Controllers;

use App\Club;
use App\President;
use Illuminate\Http\Request;
use DB;

class PresidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presidents = DB::table('presidents')
            ->join('users', 'presidents.presidents_mail', '=', 'users.email')
            ->join('clubs', 'users.member_club', '=', 'clubs.club_id')
            ->join('states', 'clubs.state_id', '=', 'states.state_id')
            ->join('zones', 'states.zone_id', '=', 'zones.zone_id')->get();
        $presidentsTotal = $presidents->count();
        return view('admin.president.index', compact('presidents', 'presidentsTotal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clubs = Club::all();

        return view('admin.president.create', compact('clubs'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        in:'.$variable,
        $user_email = DB::table('users')->where('email', $request->presidents_email)->get(['email', 'member_club']);

//        $email = $user_email->email;
//        $club = $user_email->member_club;


//            return $club->member_club;
        $request->validate([
            'presidents_mail' => 'required',
            'president_club' => 'required',
            'tenure_start' => 'required',
            'tenure_end' => 'required',
        ]);

        President::insert($request->all());
        return back()
            ->with('success', 'Club President Added Successfully.');
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
