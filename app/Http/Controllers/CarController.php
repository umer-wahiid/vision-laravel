<?php

namespace App\Http\Controllers;

use App\Models\car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $cat_id = DB::table('categories')->get();
        $brand_id = DB::table('brands')->get();
        return view('admin.car.create',['cat_id'=>$cat_id],['brand_id'=>$brand_id]);
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
            'category_id'=>'required',
            'brand_id'=>'required',
            'car'=>'required|unique:cars',
            'year'=>'required',
            'type'=>'required',
            'mi'=>'required',
            'price'=>'required',
            'stock'=>'required',
        ]);

        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->move('dashboard/cars');
        

        $create  = new car();
        $create->category_id = $request->category_id;
        $create->brand_id = $request->brand_id;
        $create->car = $request->car;
        $create->year = $request->year;
        $create->type = $request->type;
        $create->mi = $request->mi;
        $create->price = $request->price;
        $create->stock = $request->stock;
        $create->image = $path;
        $create->save();

        return redirect('admin/car/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(car $car)
    {
        $show =DB::table('categories')
        ->join('cars','cars.category_id','=','categories.id')
        ->join('brands','brands.id','=','cars.brand_id')
        ->select('cars.id','cars.car','categories.category','brands.brand','cars.year','cars.type','cars.mi','cars.price','cars.stock','cars.image')
        ->get();
        return view ('admin.car.show',['show'=>$show]);


        // $show = Car::get();
        // return view ('admin.car.show',['show'=>$show]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(car $car,$id)
    {
        $category_id = DB::table('categories')->get();
        $brand_id = DB::table('brands')->get();
        $edit = Car::find($id);
        return view ('admin.car.edit',['edit'=>$edit,'category_id'=>$category_id,'brand_id'=>$brand_id]);
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
        $request->validate([
            'category_id'=>'required',
            'brand_id'=>'required',
            'car'=>'required|unique:cars',
            'year'=>'required',
            'type'=>'required',
            'mi'=>'required',
            'price'=>'required',
            'stock'=>'required',
        ]);

        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->move('dashboard/cars');
        

        $create  = car::find($id);
        $create->category_id = $request->category_id;
        $create->brand_id = $request->brand_id;
        $create->car = $request->car;
        $create->year = $request->year;
        $create->type = $request->type;
        $create->mi = $request->mi;
        $create->price = $request->price;
        $create->stock = $request->stock;
        $create->image = $path;
        $create->update();

        return redirect('admin/car/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(car $car,$id)
    {
        $delete = Car::find($id);
        $delete->delete();
        return redirect('admin/car/show');
    }
}