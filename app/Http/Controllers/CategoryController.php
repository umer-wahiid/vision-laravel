<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()){
            return view('admin.category.create');
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()){
            $request->validate([
                'category'=>'required|unique:categories'
            ]);
            
            $create  = new Category();
            $create->category = $request->category;
            $create->save();
            
            return redirect('admin/category/show');
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        if(Auth::user()){
            $show = Category::get();
            return view ('admin.category.show',['show'=>$show]);
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category,$id)
    {
        if(Auth::user()){
            $edit = Category::find($id);
            return view ('admin.category.edit',['edit'=>$edit]);
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category,$id)
    {
        if(Auth::user()){
            $request->validate([
                'category'=>'required'
            ]);
            
            $create  = Category::find($id);
            $create->category = $request->category;
            $create->update();
            
            return redirect('admin/category/show');
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category,$id)
    {
        if(Auth::user()){
            $delete = Category::find($id);
            $delete->delete();
            return redirect('admin/category/show');
        }
        else{
            return redirect('/');
        }
    }
}