@extends('admin.master.main')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="container">
        <center>
            <h1>Add New Category</h1>
        </center>
        <form action="../apis/book_apis/add_category.php" method="POST" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td><b> Category Name</b></td>
                    <td><input type="text" required name="txtcategory" placeholder="Category Name"
                            class="form-control input"></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="td"><input type="submit" value="Add Category" name="btn"
                            class="form-control submit btn btn-outline-secondary"></td>
                </tr>
            </table>
        </form>


    </div>
</div>

@endsection