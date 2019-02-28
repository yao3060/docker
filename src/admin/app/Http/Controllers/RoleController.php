<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RoleController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = Role::orderBy('id')->get();
        return view('acl.roles.index')->with('roles', $roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $permissions = Permission::all();

        //dd($permissions);

        return view('acl.roles.create')
            ->withPermissions($permissions);
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

        $this->validate($request, [
            'display_name' => 'required|min:5|max:255',
            'name' => 'required|min:5|max:100|alpha_dash|unique:roles',
            'description' => 'sometimes|min:5|max:255',
        ]);

        $role = new Role();
        $role->display_name = $request->display_name;
        $role->name = $request->name;
        $role->description = $request->description;

        if ($role->save()) {
            if ($request->permissions) {
                $role->syncPermissions(explode(',', $request->permissions));
            }

            Session::flash('success', "Success");
            return redirect()->route('roles.show', $role->id);
        } else {
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        return view('acl.roles.edit')
            ->withRole($role)
            ->withPermissions($permissions);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        return view('acl.roles.edit')
            ->withRole($role)
            ->withPermissions($permissions);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'display_name' => 'required|max:255',
            'description' => 'sometimes|max:255',
        ]);

        $role = Role::findOrFail($id);

        $role->display_name = $request->display_name;
        $role->description = $request->description;

        if ($role->save()) {
            if ($request->permissions) {
                $role->syncPermissions(explode(',', $request->permissions));
            }

            Session::flash('success', "Update Success");
            return redirect()->route('roles.show', $role->id);
        } else {
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        die("Don't do it");
    }
}
