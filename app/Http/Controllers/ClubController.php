<?php

namespace App\Http\Controllers;

use App\Club;
use DB;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Exception;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clubs = DB::table('clubs')
            ->join('states', 'states.state_id', '=', 'clubs.state_id')
            ->join('zones', 'states.zone_id', '=', 'zones.zone_id')
//            ->join('presidents', 'presidents.president_club', '=', 'clubs.club_id')
//            ->join('users', 'presidents.presidents_mail', '=', 'users.email')
            ->paginate(18);
        $counst = $clubs->count();
        return view('admin.club.index', compact('clubs','counst'));
    }

    public function selectAjax(Request $request)
    {
        // if($request->ajax()){
        // 	$states = DB::table('states')->where('zone_id',$request->zone_id_)->pluck("name","id")->all();
        // 	$data = view('ajax-select',compact('states'))->render();
        // 	return response()->json(['options'=>$data]);
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // $states = State::orderBy('state_name');
        $states = State::orderBy('state_name')->get();

        return view('admin\club\create', compact('states'));
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
            'club_name' => 'required|min:3',
            'state_id' => 'required',
            'sponsor' => 'required',
            'chartered' => 'required',
            'meeting_time' => 'required',
            'meeting_venue' => 'required|min:10',
            'type' => 'required',
        ]);

        Club::insert($request->all());
        return back()
            ->with('success', 'Club  Added Successfully.');


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($club_name)
    {
        $clubs = DB::table('clubs')
            ->join('states', 'clubs.state_id', '=', 'states.state_id')
            ->join('zones', 'states.zone_id', '=', 'zones.zone_id')
            ->where('club_name', '=', $club_name)
            ->get();

        $members = DB::table('members')
            ->join('clubs', 'members.member_club', '=', 'clubs.club_id')
            ->join('states', 'clubs.state_id', '=', 'states.state_id')
            ->join('zones', 'states.zone_id', '=', 'zones.zone_id')
            ->where('club_name', '=', $club_name)
            ->get();
        $memberNo = $members->count();
        return view('pages.clubDetails', compact('clubs', 'club_name', 'members', 'memberNo'));

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
