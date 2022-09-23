@extends('admin.master.main')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="container">
        <center>
            <h1 style="color:steelblue;">Edit <span style="color:white;">{{$editimage->car}}</span> Images</h1>
        </center>
        <form action="{{url('admin/car/updateimage')}}/{{$editimage->id}}" enctype="multipart/form-data" method="POST">
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
                    <td class="td"><input type="submit" value="Submit" name="btn"
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