<?php

namespace App\Http\Controllers;

use App\Office;
use Illuminate\Http\Request;
use App\Officer;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class OfficerController extends Controller
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
            'member_email'=>'required',
        'office_held'=>'required',
        'from'=>'required',
        'to'=>'required',
        ]);
        Officer::insert($request->all());
        return Redirect::to('officers')
        ->with('success','Great! Zone created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
