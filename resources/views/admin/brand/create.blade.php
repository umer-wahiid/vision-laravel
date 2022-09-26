@extends('admin.master.main')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="container">
        <center>
            <h1>Add New Brand</h1>
        </center>
        <form action="{{url('admin/brand/store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <table class="table">
                <tr>
                    <td><b></b></td>
                    <td><b></b></td>
                    <td style="text-align:center;"><b> Brand Name </b></td>
                    <td>
                        <input style="border:1px solid steelblue;" type="text" required name="brand" placeholder="Brand Name" class="form-control input">
                        <span class="text-danger">@error('brand'){{$message}}@enderror</span>
                    </td>
                    <td><b></b></td>
                    <td><b></b></td>
                    <td><b></b></td>
                    <td><b></b></td>
                    <td><b></b></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="td"><input type="submit" value="Add Brand" name="btn"
                            class="form-control submit btn btn-outline-secondary"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </form>


    </div>
</div>

@endsection