<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Models\ProgramOffered;
use App\Models\InstitutionType;
use App\Models\InstitutionList;
use App\Models\RecordYear;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // return view('layouts/master');
      $id=session('user_id');
      $user=User::where('id',$id)->get();
     // $recordYr=RecordYear::where('is_active', '=', 'Y')->get();
      $recordYr_session=session('is_active');

      $user_session=session('role_name');

      if ($user_session=='admin')  
     {
      
        return view('home')->with('user',$user); 
      }
      else
      {
       return redirect()->route('dashboard.index')->with('user',$user); 
      }
    /* if ($user_session=='tei')  
     {

    return redirect()->route('dashboard.index')->with('user',$user);
       //return redirect()->route('tei.index')->with('user',$user);
      //return view('record_dtls/index')->with('user',$user);
    }
    else if ($user_session=='dahe')  {

        return redirect()->route('dashboard.index')->with('user',$user);
        // return view('home')->with('user',$user);
    }
    else {

         return view('home')->with('user',$user);
    }*/

    }
}
