@extends('admin.master.main')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="container">
        <center>
            <h1>Add New Admin</h1>
        </center>
        <form action="{{url('admin/users/store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <table class="table">
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Name</b></td>
                    <td>
                        <input type="text" style="border:1px solid steelblue;" required name="name"
                            placeholder="Admin Name" class="form-control input">
                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Email</b></td>
                    <td>
                        <input type="text" style="border:1px solid steelblue;" required name="email"
                            placeholder="Admin Email" class="form-control input">
                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Password</b></td>
                    <td>
                        <input type="text" style="border:1px solid steelblue;" required name="password"
                            placeholder="Password" class="form-control input">
                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Image</b></td>
                    <td>
                        <input style="background-color:black;color:steelblue;border:1px solid steelblue;"
                            accept='image/jpeg , image/jpg, image/gif, image/png' type="file" required name="image"
                            class="form-control input">
                        <span class="text-danger">@error('image'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="td"><input type="submit" value="Add Admin" name="btn"
                            class="form-control submit btn btn-outline-secondary"></td>
                </tr>
            </table>
        </form>


    </div>
</div>

@endsection