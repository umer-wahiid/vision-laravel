<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AuthController extends Controller
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
        return view ('admin.login');
    }


    public function signup()
    {
        return view ('admin.users.create');
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
            'email'=>'required|unique:users',
            'password'=>'required',
        ]);


        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->move('dashboard/admins');


        $create  = new User();
        $create->name = $request->name;
        $create->email = $request->email;
        $create->password = Hash::make($request->password);
        $create->image = $path;
        $create->save();

        return redirect('admin/users/show');
    }


    public function storelogin(Request $request){


        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);


        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];


        if(Auth::attempt($data)){
                return redirect('/admin');
        }
        else{
            return redirect('/login');
        }
    }




    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        if(Auth::user()){
            $show =DB::table('users')
            ->get();
            return view ('admin.users.show',['show'=>$show]);
        }
        else{
            return redirect('/');
        }
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()){
            $delete = User::find($id);
            $delete->delete();
            return redirect('admin/users/show');
        }
        else{
            return redirect('/');
        }
    }
}