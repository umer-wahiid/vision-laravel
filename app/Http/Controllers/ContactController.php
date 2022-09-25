<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class ContactController extends Controller
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
        //
    }


    public function replymail(Request $request,$id)
    {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;
        
        Mail::to($email)->send(new Reply(($name),($email),($phone),($message)));
        $show = Contact::get();
        return view ('admin.contact.show',['show'=>$show]);
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
                'name'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'message'=>'required',
            ]);
            
            $create  = new Contact();
            $create->name = $request->name;
            $create->email = $request->email;
            $create->phone = $request->phone;
            $create->message = $request->message;
            $create->save();
            
            return redirect('vision/contact');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        if(Auth::user()){
            $show = Contact::get();
            return view ('admin.contact.show',['show'=>$show]);
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function reply(Contact $contact,$id)
    {
        if(Auth::user()){
            $reply = Contact::find($id);
            return view ('admin.contact.reply',['reply'=>$reply]);
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact,$id)
    {
        if(Auth::user()){
            $delete = Contact::find($id);
            $delete->delete();
            return redirect('admin/contact/show');
        }
        else{
            return redirect('/');
        }
    }
}