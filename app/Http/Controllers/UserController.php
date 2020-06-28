<?php

namespace App\Http\Controllers;

use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
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
        $user = User::find($id);

        return view('editUserInfo', compact('user'));
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

    }

    public function UpdateUserProfile(Request $request)
    {
        $request->validate([

            'email' => 'required',
//            'nickname' => 'required|min:2',
            'phone' => 'required',
            'user_dob' => 'required',
//            'linkedin_profile' => 'required',
//            'instagram_profile' => 'required',
//            'twitter_profile' => 'required',
//            'facebook_profile' => 'required',
            'bio' => 'required',
        ]);

        DB::table('users')
            ->where('email', $request->email)
            ->update($request->all()
//                ['email' => $request->email],
//                ['nickname' => $request->nick],
//                ['phone' => $request->phone],
//                ['bio' => $request->bio],
//                ['user_dob' => $request->user_dob],
//                ['facebook_profile' => $request->facebook_profile],
//                ['linkedin_profile' => $request->linkedin_profile],
//                ['instagram_profile' => $request->instagram_profile],
//                ['twitter_profile' => $request->twitter_profile]
            );

        return back()
            ->with('success', 'Profile Updated Successfully.');
    }

    protected function updateUser(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'club_id' => 'required',
        ]);
        $email = $request->email;
        $member_club = $request->club_id;
        $update = DB::table('users')
            ->where('email', $email)
            ->update(
                ['member_club' => $member_club]
            );

        if ($update) {
            return redirect()->route('home');
        }
        return redirect()->route('home');
    }

    function updateUserPassword(Request $request)
    {
        $request->validate([
            'password' => ['required', 'string', 'min:8'],
        ]);
        $passwordUpdated = DB::table('users')
            ->where('email', $request->email)
            ->update(
                ['password' => Hash::make($request->password)]
            );
        if ($passwordUpdated) {
            return redirect()->route('home');
        }
    }

    function changeAvatar()
    {
        return view('changeAvatar');
    }

    function changeUserAvatar(Request $request)
    {
        $email = Auth::user()->email;
        $request->validate([
            'file' => 'required|image:jpg,png,svg|max:2048',
        ]);
        $image = $request->file('file');
        $input['imagename'] = time() . '.' . $image->extension();

        $destinationPath = public_path('\images\members');
        $img = Image::make($image->getRealPath())->resize(310, 380);
//        $img->insert('\public\watermark.png');
        $move_avatar = $img->save($destinationPath . '/' . $input['imagename']);
//        $destinationPath = public_path('\images\members');
//        $move_avatar = $image->move($destinationPath, $input['imagename']);
        if ($move_avatar) {
            DB::table('users')
                ->where('email', $email)
                ->update(
                    ['avatar' => $input['imagename']]
                );
            return back()
                ->with('success', 'You have successfully upload file.')
                ->with('file', $input['imagename']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public
    function destroy($id)
    {

    }
}
