@extends('admin.master.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="container">


        <center>
            <h1>Reply To {{reply->name}}</h1>
        </center>
        <form action="{{url('admin/car/store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <table class="table">
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Name</b></td>
                    <td>
                        <input type="text" required name="car" value="{{reply->name}}" class="form-control input">
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Email</b></td>
                    <td>
                        <input type="text" required name="year" value="{{reply->email}}" class="form-control input">
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Phone</b></td>
                    <td>
                        <input type="text" required name="year" value="{{reply->phone}}" class="form-control input">
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Phone</b></td>
                    <td>
                        <select style="background-color:black;" class="form-control" name="type" value="Select Category"
                            placeholder="Select Category">
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
                        <input type="text" required name="mi" placeholder="Mileage" class="form-control input">
                        <span class="text-danger">@error('mi'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Price</b></td>
                    <td>
                        <input type="number" required name="price" placeholder="Price" class="form-control input">
                        <span class="text-danger">@error('price'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Stock</b></td>
                    <td>
                        <input type="text" required name="stock" placeholder="Stock" class="form-control input">
                        <span class="text-danger">@error('stock'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Image</b></td>
                    <td>
                        <input style="background-color:black;color:steelblue;"
                            accept='image/jpeg , image/jpg, image/gif, image/png' type="file" required name="image"
                            class="form-control input">
                        <span class="text-danger">@error('image'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>More Images</b></td>
                    <td>
                        <input style="background-color:black;color:steelblue;"
                            accept='image/jpeg , image/jpg, image/gif, image/png' multiple type="file" required
                            name="moreimage[]" class="form-control input">
                        <span class="text-danger">@error('moreimage'){{$message}}@enderror</span>
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

@endsection