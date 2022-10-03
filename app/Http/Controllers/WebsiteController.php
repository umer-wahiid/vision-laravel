<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;


class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.index');
        // $deal =DB::table('deals')
        // ->join('products','products.id','=','deals.product_id')
        // ->get();
        // $product = DB::table('products')->get();
        // return view ('website.index',['product'=>$product],['deal'=>$deal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('website.contact');
    }


    public function cars()
    {
        $car = DB::table('cars')
        ->get();
        return view('website.cars',['car'=>$car]);
    }



    public function about()
    {
        return view('website.about');
    }



    public function faqs()
    {
        return view('website.faqs');
    }



    // public function cardetail()
    // {
    //     return view('website.cardetail');
    // }



    public function car_by_category($id){
        $category = DB::table('categories')
        ->join('cars','cars.category_id','=','categories.id')
        ->where('cars.category_id',$id)
        ->get();
        return view ('website.car_by_category',['category'=>$category]);
    }



    public function car_by_brand($id){
        $brand = DB::table('brands')
        ->join('cars','cars.brand_id','=','brands.id')
        ->where('cars.brand_id',$id)
        ->get();
        return view ('website.car_by_brand',['brand'=>$brand]);
    }



    public function cardetail($id){
        $cars = DB::table('categories')
        ->join('cars','cars.category_id','=','categories.id')
        ->join('brands','brands.id','=','cars.brand_id')
        ->where('cars.id',$id)
        ->select(
        'cars.car',
        'cars.id',
        'cars.year',
        'cars.km',
        'cars.type',
        'cars.price',
        'cars.stock',
        'categories.category',
        'brands.brand',
        'cars.image'
        )
        ->get();

 
        return view ('website.cardetail',['cars'=>$cars]);
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
        //
    }
}
