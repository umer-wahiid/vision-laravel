@extends('admin.master.main')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="container">
        <center>
            <h1>Add New Category</h1>
        </center>
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td><b></b></td>
                    <td><b></b></td>
                    <td style="text-align:center;"><b> Category Name </b></td>
                    <td><input type="text" required name="category" placeholder="Category Name"
                    class="form-control input"></td>
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