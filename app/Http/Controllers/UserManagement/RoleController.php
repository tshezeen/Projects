<?php

namespace App\Http\Controllers\UserManagement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roleList = Role::orderBy('role_name','asc')->get();
         
        return view('user_management/role/index', ['roleList' => $roleList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('user_management/role/create');
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
        try {
        $this->validateInput($request);
         Role::create([
            'role_name' => $request['role_name'],
            'role_desc' => $request['role_desc']
        ]);

        //return redirect()->intended('user_management/role');
         return redirect()->route('role.index')
            ->with('success','Added successfully');
       
        }
        catch(\Exception $exception){
               // dd($exception);
                 return redirect()->route('role.index')
                ->with('error','ERROR!');
                
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
         $role = Role::find($id);
       /*
        if ($role == null || count($role) == 0) {
            return redirect()->intended('/user_management/role/index');
        }*/
        return view('user_management/role/edit',['roleId' => $role]);
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

        $roleId = Role::findOrFail($id);
        try {
        //$this->validateInput($request);
        $input = [
            'role_name' => $request['role_name'],
            'role_desc' => $request['role_desc']
        ];
        Role::where('id', $id)
            ->update($input);

         return redirect()->route('role.index')
            ->with('success','Updated successfully');
        //return redirect()->intended('user_management/role/index');
    }
    catch(\Exception $exception){
           // dd($exception);
             return redirect()->route('role.index')
            ->with('error','ERROR!');
            
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
        //

        try {
        Role::where('id', $id)->delete();
        
        return redirect()->route('role.index')
            ->with('success','Deleted successfully');
        }
        catch(\Exception $exception){
           // dd($exception);
             return redirect()->route('role.index')
            ->with('error','ERROR!');
            
        }
    }

     private function validateInput($request) {
        $this->validate($request, [
        'role_name' => 'required|max:60|unique:roles',
        'role_desc' => 'required|max:60'
    ]);
    }
}
