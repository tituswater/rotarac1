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
        ->join('states', 'states.state_id', '=', 'clubs.state_id')
        ->join('zones', 'states.zone_id', '=', 'zones.zone_id')
        ->join('presidents', 'presidents.president_club', '=', 'clubs.club_id')
        ->join('users', 'presidents.presidents_mail', '=', 'users.email')
    // ->join('members', 'clubs.club_id', '=', 'members.member_club')->random()
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
