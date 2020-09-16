<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AcademicYear;

class AcademicMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        //return view('master.academic_year.index');
        $academicList = AcademicYear::orderBy('academic_year', 'asc')->get();

        return view('master/academic_year/index', ['academicList' => $academicList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('master/academic_year/create');
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
         //$this->validateInput($request);
         AcademicYear::create([
            'academic_year' => $request['academic_year']
        ]);

	return redirect()->route('academic.index')
            ->with('success','Added successfully');

       /*  return redirect()->intended('master/academic/index');
       return redirect()->route('mode.index')
            ->with('success','Added successfully');*/
        // return redirect()->route('academic.index');
        // return redirect('academic.index');

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
        $academicId = AcademicYear::find($id);

        return view('master/academic_year/edit', ['academicId' => $academicId]);
       
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
        //$id = $request->input('id');
         $academicId = AcademicYear::findOrFail($id);
        $this->validateInput($request);
        $input = ['academic_year' => $request['academic_year']];
        AcademicYear::where('id', $id)
            ->update($input);

 	return redirect()->route('academic.index')
            ->with('success','Updated successfully');

        
        /*return redirect()->intended('master/academic_year/index');

        $academicId = AcademicYear::find($request->input('id'));
        $academicId->name = $request->input('academic_year');
        $academicId->save();

        return redirect()->route('academic.index')->with('info', 'Academic Year updated as: ' . $request->input('academic_year'));*/
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
            AcademicYear::where('id', $id)->delete();
            return redirect()->route('academic.index')->with('success','Deleted successfully');

        } catch(\Exception $exception){
            return redirect()->route('academic.index')->with('error','Error');
        }
    }

    private function validateInput($request) {
        $this->validate($request, [
        'academic_year' => 'required|max:191|unique:academic_years'
    ]);
    }
}
