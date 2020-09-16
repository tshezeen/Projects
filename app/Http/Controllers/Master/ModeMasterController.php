<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mode;

class ModeMasterController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $mode = Mode::orderBy('mode', 'asc')->get();

        return view('master/mode/index', ['modeList' => $mode]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('master/mode/create');
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
         Mode::create([
            'mode' => $request['mode']
        ]);

       
          return redirect()->route('mode.index')
            ->with('success','Added successfully');

        } catch(\Exception $exception){
             return redirect()->route('mode.index')
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
        $mode = Mode::find($id);
       
       /* if ($mode == null || count($mode) == 0) {
            return redirect()->intended('/master/mode');
           
        }*/
        return view('master/mode/edit',['modeId' => $mode]);
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
         try {
            $modeId = Mode::findOrFail($id);
            $this->validateInput($request);
            $input = [
                'mode' => $request['mode']
            ];
            Mode::where('id', $id)
                ->update($input);
            
           
        return redirect()->route('mode.index')
            ->with('success','Updated successfully');
    

        } catch(\Exception $exception){
             return redirect()->route('mode.index')
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
           Mode::where('id', $id)->delete();
       
             return redirect()->route('mode.index')
            ->with('success','Deleted successfully');

        } catch(\Exception $exception){
             return redirect()->route('mode.index')
            ->with('error','ERROR!');
            
        }
        
        
    }

    private function validateInput($request) {
        $this->validate($request, [
        'mode' => 'required|max:191|unique:modes'
         ]);
    }
}
