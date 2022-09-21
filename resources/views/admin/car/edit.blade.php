@extends('admin.master.main')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="container">
        <center>
            <h1>Edit</h1>
        </center>
        <form action="{{url('admin/car/update')}}/{{$edit->id}}" enctype="multipart/form-data" method="POST">
            @csrf
            <table class="table">
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;width:20%;"><b>Category</b></td>
                    <td>
                        <select style="background-color:black;" class="form-control" name="category_id"
                            value="Select Category" placeholder="Select Category">
                            @foreach($category_id as $item)
                            <option value="{{$item->id}}">{{$item->category}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">@error('category_id'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Brand</b></td>
                    <td>
                        <select style="background-color:black;" class="form-control" name="brand_id"
                            value="Select Category" placeholder="Select Category">
                            @foreach($brand_id as $item)
                            <option value="{{$item->id}}">{{$item->brand}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">@error('brand_id'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Car Name</b></td>
                    <td>
                        <input type="text" required name="car" placeholder="Car Name" value="{{$edit->car}}"
                            class="form-control input">
                        <span class="text-danger">@error('car'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Year</b></td>
                    <td>
                        <input type="text" value="{{$edit->year}}" required name="year" placeholder="Model Year"
                            class="form-control input">
                        <span class="text-danger">@error('year'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Drive Type</b></td>
                    <td>
                        <select style="background-color:black;" value="{{$edit->type}}" class="form-control" name="type"
                            value="Select Category" placeholder="Select Category">
                            <option value="Auto">Auto</option>
                            <option value="Manual">Manual</option>
                            <option value="Semi-Auto">Semi-Auto</option>
                        </select>
                        <span class="text-danger">@error('type'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Mileage</b></td>
                    <td>
                        <input type="text" required name="mi" value="{{$edit->mi}}" placeholder="Mileage"
                            class="form-control input">
                        <span class="text-danger">@error('mi'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Price</b></td>
                    <td>
                        <input type="number" required name="price" value="{{$edit->price}}" placeholder="Price"
                            class="form-control input">
                        <span class="text-danger">@error('price'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Stock</b></td>
                    <td>
                        <input type="text" required name="stock" value="{{$edit->stock}}" placeholder="Stock"
                            class="form-control input">
                        <span class="text-danger">@error('stock'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Image</b></td>
                    <td>
                        <img src="{{url($edit->image)}}" class="rounded" width="60px" height="45px" alt="">
                        <input style="background-color:black;color:steelblue;"
                            accept='image/jpeg , image/jpg, image/gif, image/png' type="file" required name="image"
                            class="form-control input">
                        <span class="text-danger">@error('image'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="td"><input type="submit" value="Add Car" name="btn"
                            class="form-control submit btn btn-outline-secondary"></td>
                </tr>
            </table>
        </form>


    </div>
</div>
<script>
var dd = document.getElementById('')
</script>
@endsection