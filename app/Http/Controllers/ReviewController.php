<?php

namespace App\Http\Controllers;

use App\Models\review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class ReviewController extends Controller
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
        return view('admin.review.create');
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
                'name'=>'required',
                'carname'=>'required',
                'phone'=>'required',
                'review'=>'required',
                'carimage'=>'required',
                'picture'=>'required',
            ]);
            $cusname = $request->name;
            $customer = $request->file('picture')->getClientOriginalName();
            $customerpath = $request->file('picture')->move('dashboard/review/'.$cusname.'/');
            $car = $request->file('carimage')->getClientOriginalName();
            $carpath = $request->file('carimage')->move('dashboard/review/'.$cusname.'/');

            $create = new review();
            $create->name = $request->name;
            $create->carname = $request->carname;
            $create->phone = $request->phone;
            $create->review = $request->review;
            $create->carimage = $carpath;
            $create->picture = $customerpath;
            $create->save();

            return redirect('admin/review/show');
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(review $review)
    {
        if(Auth::user()){
            $show = review::get();
            return view('admin.review.show',['show'=>$show]);
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(review $review,$id)
    {
        if(Auth::user()){
            $edit = review::find($id);
            return view('admin.review.edit',['edit'=>$edit]);
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, review $review,$id)
    {
        if(Auth::user()){
            $request->validate([
                'name'=>'required',
                'carname'=>'required',
                'phone'=>'required',
                'review'=>'required',
                'carimage'=>'required',
                'picture'=>'required',
            ]);

            $customer = $request->file('picture')->getClientOriginalName();
            $customerpath = $request->file('picture')->move('dashboard/review');
            $car = $request->file('carimage')->getClientOriginalName();
            $carpath = $request->file('carimage')->move('dashboard/review');

            $create = review::find($id);
            $create->name = $request->name;
            $create->carname = $request->carname;
            $create->phone = $request->phone;
            $create->review = $request->review;
            $create->carimage = $carpath;
            $create->picture = $customerpath;
            $create->update();

            return redirect('admin/review/show');
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(review $review,$id)
    {
        if(Auth::user()){
            $delete = review::find($id);
            $delete->delete();
            return redirect('admin/review/show');
        }
        else{
            return redirect('/');
        }
    }
}