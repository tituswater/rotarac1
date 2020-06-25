<?php

namespace App\Http\Controllers;

use App\Club;
use App\Officer;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $clubs = Club::all();
        if (Auth::user()->member_club == null) {
            return view('change_club', compact('clubs'));
        }
        if (Hash::check('default', Auth::user()->password))
        {
            return view('choose_password');
        }
       $isOfficer = Officer::where('member_email', Auth::user()->email)
           ->join('offices', 'officers.office_held', '=', 'offices.office_id')
           ->get();

        $details = DB::table('users')->where('users.id', Auth::user()->id)
            ->join('clubs', 'users.member_club', '=', 'clubs.club_id')
            ->join('states', 'clubs.state_id', '=', 'states.state_id')
            ->join('zones', 'states.zone_id', '=', 'zones.zone_id')->get();

        return view('dashboard', compact('details','isOfficer'));

    }
}
