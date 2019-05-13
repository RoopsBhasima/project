<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $cats=Categories::all();
        return view('back.categories.index',compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min: 5 characters',
            'status' => 'required|integer',
            'files' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048'
          ]);

        $cats = new Categories([
            'name' => $request->get('name'),
            'description'=> $request->get('description'),
            'status'=> $request->get('status')
          ]);
          //Handle file upload
          if($request->hasFile('files'))
          {
              //Get jst ext
              $extension = $request->file('files')
              ->getClientOriginalExtension();
              //Filename to store
              $fileNameToStore = time() . '.' . $extension;
              //upload image
              $file = $request->file('files');
              $destinationPath = public_path('/uploads');
              $file->move($destinationPath, $fileNameToStore)
          }
          else{
              return redirect()->back()->withInput($request->input())->with('error','File Not Selected');
          }
          $cats=new Category([ 'name'=>$request->get('name'),//right side is table data name and left side is form name
          'description'=>$request->get('description'),
          'status'=>$request->get('status'),
          'image'=>$fileNameToStore
          ]);
          $cats->save();
          return redirect('/cats')->with('success', 'Category has been added');
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
        $cats = Categories::find($id);
        return view('back.categories.edit', compact('cats'));
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
        $request->validate([
            'name'=>'required',
            'description'=> 'required',
            'status' => 'required|integer'
          ]);
    
          $cats = Categories::find($id);
          $cats->name = $request->get('name');
          $cats->description = $request->get('description');
          $cats->status = $request->get('status');
          $cats->save();
    
          return redirect('/cats')->with('success', 'Category has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cats = Categories::find($id);
        $cats->delete();
        return redirect('/cats')->with('success', 'Category has been deleted Successfully');
    }
}
