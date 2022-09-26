@extends('admin.master.main')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="container">
        <center>
            <h1>Add New Category</h1>
        </center>
        <form action="{{url('admin/category/store')}}" method="POST">
            @csrf
            <table class="table">
                <tr>
                    <td><b></b></td>
                    <td><b></b></td>
                    <td style="text-align:center;"><b> Category Name </b></td>
                    <td>
                        <input style="border:1px solid steelblue;" type="text" required name="category" placeholder="Category Name"
                            class="form-control input">
                        <span class="text-danger">@error('category'){{$message}}@enderror</span>
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
                    <td class="td"><input type="submit" value="Add Category" name="btn"
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