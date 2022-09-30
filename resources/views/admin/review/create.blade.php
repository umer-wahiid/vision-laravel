@extends('admin.master.main')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="container">
        <center>
            <h1>Add New Review</h1>
        </center>
        <form action="{{url('admin/review/store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <table class="table">
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Customer Name</b></td>
                    <td>
                        <input type="text" style="border:1px solid steelblue;" required name="name"
                            placeholder="Customer Name" class="form-control input">
                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Car Name</b></td>
                    <td>
                        <input type="text" style="border:1px solid steelblue;" required name="carname"
                            placeholder="Car Name" class="form-control input">
                        <span class="text-danger">@error('carname'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>phone</b></td>
                    <td>
                        <input type="text" style="border:1px solid steelblue;" required name="phone"
                            placeholder="Model Year" class="form-control input">
                        <span class="text-danger">@error('phone'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Review</b></td>
                    <td>
                        <textarea style="border:1px solid steelblue;" id="contactform_message"
                            class="form-control input-message" required placeholder="Reply..." rows="7"
                            name="review"></textarea>
                        <span class="text-danger">@error('review'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Car Image</b></td>
                    <td>
                        <input style="background-color:black;color:steelblue;border:1px solid steelblue;"
                            accept='image/jpeg , image/jpg, image/gif, image/png' type="file" required name="carimage"
                            class="form-control input">
                        <span class="text-danger">@error('carimage'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Customer Picture</b></td>
                    <td>
                        <input style="background-color:black;color:steelblue;border:1px solid steelblue;"
                            accept='image/jpeg , image/jpg, image/gif, image/png' type="file" required name="picture"
                            class="form-control input">
                        <span class="text-danger">@error('picture'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="td"><input type="submit" value="Add Review" name="btn"
                            class="form-control submit btn btn-outline-secondary"></td>
                </tr>
            </table>
        </form>


    </div>
</div>

@endsection