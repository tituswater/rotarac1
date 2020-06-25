<?php

namespace App\Http\Controllers;
use App\Club;
use App\Member;
use App\State;
use App\User;
use Illuminate\Http\Request;
use DB;
class PageController extends Controller
{


    public function welcome()
   {
    // $clubs = Club::orderBy('name', 'desc')->paginate(5);
    $clubs = DB::table('clubs')
    ->join('states', 'clubs.state_id', '=', 'states.state_id')
    ->join('zones', 'states.zone_id', '=', 'zones.zone_id')
    // ->join('members', 'clubs.club_id', '=', 'members.member_club')
    ->take(3)
    ->get();
    $officers = DB::table('officers')->get();
    $statesNo = State::orderBy(rand())->count();
    $memberNo = User::count();
    $clubsNo = $clubs->count();
    return view('pages.welcome',compact('clubs','clubsNo','statesNo','memberNo','officers'));
   }


function about()
   {
    return view('pages.about');

   }
}
