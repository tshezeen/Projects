<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = Category::orderBy('category', 'asc')->get();

        return view('master/category/index', ['categoryList' => $category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('master/category/create');
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
            Category::create([
                    'category' => $request['category']
                 ]);

            return redirect()->route('category.index')
                ->with('success','Added successfully');

             } catch(\Exception $exception){

             return redirect()->route('category.index')
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
        $category = Category::find($id);
       
       /* if ($category == null || count($category) == 0) {
            return redirect()->intended('/master/category');
           
        }*/
        return view('master/category/edit',['categoryId' => $category]);
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
            $categoryId = Category::findOrFail($id);
            $this->validateInput($request);
            $input = [
                 'category' => $request['category']
                 ];
            Category::where('id', $id)
                 ->update($input);
        
       
            return redirect()->route('category.index')
                ->with('success','Updated successfully');

        } catch(\Exception $exception){
             return redirect()->route('category.index')
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

             Category::where('id', $id)->delete();
       
            return redirect()->route('category.index')
                             ->with('success','Deleted successfully');

        } catch(\Exception $exception){
             return redirect()->route('category.index')
            ->with('error','ERROR!');
            
        }
        
        
    }

    private function validateInput($request) {
        $this->validate($request, [
        'category' => 'required|max:191|unique:categories'
         ]);
    }
}
