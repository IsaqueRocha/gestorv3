<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;



use App\Role;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $roles = Role::all();

        return view('template.role.manage', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        /**
         * New object is created to be possible the form reuse.
         */
        $role = new Role();

        return view('template.role.add', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(RoleRequest $request)
    {
        $input = [];
        $input['name'] = $request->input('name');

        Role::create([
            'name' => $input['name']
        ]);

        return redirect('/roles');
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
        $role = Role::FindOrFail($id);
        return view('template.role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
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
