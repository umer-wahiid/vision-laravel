<?php

namespace App\Http\Controllers;

use App\Models\car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class CarController extends Controller
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
            $cat_id = DB::table('categories')->get();
            $brand_id = DB::table('brands')->get();
            return view('admin.car.create',['cat_id'=>$cat_id],['brand_id'=>$brand_id]);
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
                'category_id'=>'required',
                'brand_id'=>'required',
                'car'=>'required|unique:cars',
                'year'=>'required',
                'type'=>'required',
                'km'=>'required',
                'price'=>'required',
                'stock'=>'required',
                'image'=>'required',
                'moreimage'=>'required',
            ]);
            
            
            $name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->move('dashboard/cars');
            $image = array();
            $files = $request->file('moreimage');
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower ($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'public/dashboard/cars/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $image[] = $image_url;
            };
            
            
            
            $create  = new car();
            $create->category_id = $request->category_id;
            $create->brand_id = $request->brand_id;
            $create->car = $request->car;
            $create->year = $request->year;
            $create->type = $request->type;
            $create->km = $request->km;
            $create->price = $request->price;
            $create->stock = $request->stock;
            $create->image = $path;
            $create->moreimage = implode('|', $image);
            $create->save();
            
            return redirect('admin/car/show');
    }
    else{
        return redirect('/');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(car $car)
    {
        if(Auth::user()){
            $show = DB::table('categories')
            ->join('cars','cars.category_id','=','categories.id')
            ->join('brands','brands.id','=','cars.brand_id')
            ->select('cars.id','cars.car','categories.category','brands.brand','cars.year','cars.type','cars.km','cars.price','cars.stock','cars.image')
            ->get();
            // $image = DB::table('cars')->where('id', )->first();
            // $images = explode('|', $image->moreimage);
            // return view ('admin.car.show',['show'=>$show],['images'=>$images]);
            return view ('admin.car.show',['show'=>$show]);
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(car $car,$id)
    {
        if(Auth::user()){
            $category_id = DB::table('categories')->get();
            $brand_id = DB::table('brands')->get();
            $edit = Car::find($id);
            return view ('admin.car.edit',['edit'=>$edit,'category_id'=>$category_id,'brand_id'=>$brand_id]);
        }
        else{
            return redirect('/');
        }
    }


    public function editimage(car $car,$id)
    {
        if(Auth::user()){
            $category_id = DB::table('categories')->get();
            $brand_id = DB::table('brands')->get();
            $editimage = Car::find($id);
            return view ('admin.car.editimage',['editimage'=>$editimage,'category_id'=>$category_id,'brand_id'=>$brand_id]);
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, car $car,$id)
    {
        if(Auth::user()){
            $request->validate([
            // 'category_id'=>'required',
            // 'brand_id'=>'required',
            'car'=>'required|unique:cars',
            'year'=>'required',
            'type'=>'required',
            'km'=>'required',
            'price'=>'required',
            'stock'=>'required',
        ]);
        
        // $name = $request->file('image')->getClientOriginalName();
        // $path = $request->file('image')->move('dashboard/cars');
        
        
        $create  = car::find($id);
        // $create->category_id = $request->category_id;
        // $create->brand_id = $request->brand_id;
        $create->car = $request->car;
        $create->year = $request->year;
        $create->type = $request->type;
        $create->km = $request->km;
        $create->price = $request->price;
        $create->stock = $request->stock;
        // $create->image = $path;
        $create->update();
        
        return redirect('admin/car/show');
    }
    else{
        return redirect('/');
    }
    }



    public function updateimage(Request $request, car $car,$id)
    {
        if(Auth::user()){
            $request->validate([
            'category_id'=>'required',
            'brand_id'=>'required',
            'image'=>'required',
            'moreimage'=>'required',
        ]);
        
        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->move('dashboard/cars');
        $image = array();
        $files = $request->file('moreimage');
        foreach ($files as $file) {
            $image_name = md5(rand(1000, 10000));
            $ext = strtolower ($file->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/dashboard/cars/';
            $image_url = $upload_path.$image_full_name;
            $file->move($upload_path, $image_full_name);
            $image[] = $image_url;
        };
        
        $create  = car::find($id);
        $create->category_id = $request->category_id;
        $create->brand_id = $request->brand_id;
        $create->image = $path;
        $create->moreimage = implode('|', $image);
        $create->update();
        
        return redirect('admin/car/show');
    }
    else{
        return redirect('/');
    }
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(car $car,$id)
    {
        if(Auth::user()){
            $delete = Car::find($id);
            $delete->delete();
            return redirect('admin/car/show');
        }
        else{
            return redirect('/');
        }
    }
}