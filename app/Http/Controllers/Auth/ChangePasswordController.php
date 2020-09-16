<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Validation\Rule;
use App\Rules\MatchOldPassword;
use App\User;
class ChangePasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
    }
    public function showChangePasswordForm()
    {
        //
        return view('auth.passwords.change_password');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  /*  public function store(Request $request)
    {
        //
      

///
         try {
            $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   dd($exception);
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
 
       
        //  return redirect()->route('dashboard.index')
         //   ->with('success','Added successfully');
         }

         catch(\Exception $exception){
            dd($exception);
             return redirect()->route('dashboard.index')
            ->with('error','ERROR!');
            
        }

        ///

    }*/
  public function store(Request $request)
    {

       
         try {
            $request->validate([
            'old_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        //dd($exception);
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        $user = Auth::id();
        $newPassword = Hash::make($request->get('new_password'));
        User::where('id', $user)
       ->update([
           'password' => $newPassword
        ]);
        /*$user->password = Hash::make($request->get('new_password'));
        $user->save();*/
        //return $user;


        return redirect()->route('dashboard.index')
           ->with('success','Password changed successfully');
         }

         catch(\Exception $exception){
           // dd($exception);
             return redirect()->route('dashboard.index')
            ->with('error','ERROR!');
            
        }

        ///

    }

   /* public function store(Request $request){
        //dd(Auth::user());
        if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
            // The passwords not matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
           /* return response()->json(['errors' => ['current'=> ['Current password does not match']]], 422);
        }
        //uncomment this if you need to validate that the new password is same as old one

        if(strcmp($request->get('old_password'), $request->get('new_password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
           /* return response()->json(['errors' => ['current'=> ['New Password cannot be same as your current password']]], 422);
        }
        $validatedData = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = Hash::make($request->get('new_password'));
        $user->save();
        return $user;
    }*/

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
    }
}
