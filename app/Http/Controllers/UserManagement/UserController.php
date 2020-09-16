<?php

namespace App\Http\Controllers\UserManagement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\User;
use App\Models\InstitutionList;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     

        $userList = \DB::table('users')
                    ->select(\DB::raw('*, roles.role_name'))
                    ->leftJoin('roles','users.role_id','=','roles.id')
                    ->leftJoin('institution_lists','users.inst_id','=','institution_lists.id')
                    ->orderBy('users.uname','asc')
                    ->get();

        //$roles = Role::get();
        return view('user_management/users/index',['userList'    =>  $userList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       $instList = InstitutionList::orderBy('inst_name','asc')->get();
       $roles = Role::orderBy('role_name','asc')->get();
       //return view('auth.register', ['instList' => $instList],['roles'  =>  $roles]);
        return view('user_management/users/create',['instList' => $instList],['roles'  =>  $roles]);
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

        try{
        $this->validateInput($request);
         
            User::create([
            'name' => $request['name'],
            'uname' => $request['uname'],
            'password' => Hash::make($request['password']),
            'role_id' => $request['role_id'],
            'inst_id' => $request['inst_id'],
            'designation' => $request['designation']
        ]);

       
          return redirect()->route('users.index')
            ->with('success','Added successfully');
        }

        catch(\Exception $exception){
          ///  dd($exception);
             return redirect()->route('users.index')
            ->with('error','ERROR!');
       
    }
}

    private function validateInput($request) {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'designation' => ['required', 'string', 'max:255'],
            'uname' => ['required', 'string', 'max:255', 'unique:users'],
           // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id'   =>  ['required'],
            'inst_id'   =>  ['required']
         ]);
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
        //dd('insdie edit');
       
       $instList = InstitutionList::orderBy('inst_name','asc')->get();
       $roles = Role::orderBy('role_name','asc')->get();
       $user = \DB::table('users')
                    ->select(\DB::raw('*, roles.role_name,institution_lists.inst_name'))
                    ->leftJoin('roles','users.role_id','=','roles.id')
                    ->leftJoin('institution_lists','users.inst_id','=','institution_lists.id')
                    ->where('users.id','=',$id)
                    ->orderBy('users.uname','asc')
                    ->get();
        

       
        return view('user_management/users/edit',['user' => $user],['roles' => $roles],['instList' => $instList]);
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

        $userId = Auth::id();
      
        $inst_session=session('inst_id');
        $year_session=session('record_yr');
       // dd($inst_session,$year_session);
       // dd($request);
         try {
          //$this->validateInput($request);

            User::create([
            'name' => $request['name'],
            'uname' => $request['uname'],
            'password' => $request['password'],
            'role_id' => $request['role_id'],
            'inst_id' => $request['inst_id'],
            'designation' => $request['designation']
            ]);

         /* user::create([
            'collaboration' => $request['collaboration'],
            'by' => $request['by'],
            'description' => $request['description'],
            
            'updated_by' => $userId,
            'inst_id' => $inst_session,
            'record_yr' => $year_session,
            //'updated_at' => new DateTime();,
           // 'created_at' => new DateTime();
        
        ]);*/
        

       
          return redirect()->route('users.index')
            ->with('success','Added successfully');
         }

         catch(\Exception $exception){
          ///  dd($exception);
             return redirect()->route('users.index')
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
        User::where('id', $id)->delete();
        
        return redirect()->route('users.index')
            ->with('success','Deleted successfully');
        }
        catch(\Exception $exception){
           // dd($exception);
             return redirect()->route('users.index')
            ->with('error','ERROR!');
            
        }
    }
}
