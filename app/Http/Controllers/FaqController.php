<?php

namespace App\Http\Controllers;

use App\Models\faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FaqController extends Controller
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
            return view('admin.faq.create');
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
                'question'=>'required',
                'answer'=>'required',
            ]);
            
            $create = new Faq();
            $create->question = $request->question;
            $create->answer = $request->answer;
            $create->save();
    
            return redirect('admin/faq/create');

        }
        else{
            return redirect('/');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(faq $faq)
    {
        if(Auth::user()){
            $show = Faq::get();
            return view ('admin.faq.show',['show'=>$show]);
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(faq $faq,$id)
    {
        if(Auth::user()){
            $edit = Faq::find($id);
            return view ('admin.faq.edit',['edit'=>$edit]);
        }
        else{
            return redirect('admin/faq/show');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, faq $faq,$id)
    {
     
            if(Auth::user()){
                $request->validate([
                'question'=>'required',
                'answer'=>'required',
            ]);
            
            $create  = faq::find($id);
            $create->question = $request->question;
            $create->answer = $request->answer;
            $create->update();
            
            return redirect('admin/faq/show');
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(faq $faq,$id)
    {
        if(Auth::user()){
        $delete = Faq::find($id);
        $delete->delete();
        return redirect('admin/faq/show');
        }
        else{
            return redirect('/');
        }
    }
}