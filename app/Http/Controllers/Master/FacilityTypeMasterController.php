<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FacilityType;

class FacilityTypeMasterController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $facilityList = FacilityType::orderBy('facility_type', 'asc')->get();

        return view('master/facility_type/index', ['facilityList' => $facilityList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('master/facility_type/create');
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
             FacilityType::create([
                    'facility_type' => $request['facility_type']
                ]);


              return redirect()->route('facility_type.index')
                    ->with('success','Added successfully');


            } catch(\Exception $exception){
                 return redirect()->route('facility_type.index')
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
        $facility = FacilityType::find($id);
       
       /* if ($facility == null || count($facility) == 0) {
            return redirect()->intended('/master/facility_type');
           
        }*/
        return view('master/facility_type/edit',['facilityId' => $facility]);
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

            $facilityId = FacilityType::findOrFail($id);
            $this->validateInput($request);
            $input = [
              'facility_type' => $request['facility_type']
            ];
            FacilityType::where('id', $id)
               ->update($input);
        
       
            return redirect()->route('facility_type.index')
                ->with('success','Updated successfully');

        } catch(\Exception $exception){
             return redirect()->route('facility_type.index')
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

            FacilityType::where('id', $id)->delete();
       
            return redirect()->route('facility_type.index')
            ->with('success','Deleted successfully');

        } catch(\Exception $exception){
             return redirect()->route('facility_type.index')
            ->with('error','ERROR!');
            
        }
        
        
    }

    private function validateInput($request) {
        $this->validate($request, [
        'facility_type' => 'required|max:191|unique:facility_types'
         ]);
    }
}
