<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Models\Organisation;
use App\Models\User;
use App\Models\UserOrganisation;

class UserController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required',
        ]);
        User::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user;
    }

    public function organisations(User $user)
    {
        $orgs = [];
        foreach(UserOrganisation::where('user_id',$user->id)->get() as $org) {
            $o = Organisation::where('id', $org->organisation_id)->select(['organisation_logo', 'organisation_name', 'demo_org',])->first();
            $o->organisation_owner = $org->organisation_owner;
            $o->default =$org->default;
            array_push($orgs, $o);
        }
        return $orgs;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        return $user->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        return $user->delete();
    }
}
