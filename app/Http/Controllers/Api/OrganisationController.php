<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Models\Organisation;
use App\Models\Project;
use App\Models\User;
use App\Models\UserOrganisation;

class OrganisationController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Organisation::all();
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
            'organisation_name' => 'required',
        ]);
        Organisation::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Organisation $organisation)
    {
        return $organisation;
    }

    public function projects(Organisation $organisation)
    {
        return Project::where('organisation_id',$organisation->id)->select([
            'id', 'project_code_name', 'project_official_name', 
            'project_version', 'project_git_url', 'project_status',
            'project_is_public', 'created_at'
        ])->get();
    }
    public function users(Organisation $organisation)
    {
        $users = [];
        foreach(UserOrganisation::where('organisation_id',$organisation->id)->get() as $user) {
            $u = User::where('id', $user->user_id)->select(['id', 'avatar', 'name', 'email'])->first();
            $u->organisation_owner = $user->organisation_owner;
            array_push($users, $u);
        }
        return $users;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organisation $organisation)
    {
        return $organisation->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organisation $organisation)
    {
        return $organisation->delete();
    }
}
