@extends('admin.master.main')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="container">
        <center>
            <h1>Edit Review</h1>
        </center>
        <form action="{{url('admin/review/update')}}/{{$edit->id}}" enctype="multipart/form-data" method="POST">
            @csrf
            <table class="table">
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Customer Name</b></td>
                    <td>
                        <input type="text" style="border:1px solid steelblue;" required name="name"
                            value="{{$edit->name}}" class="form-control input">
                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Car Name</b></td>
                    <td>
                        <input type="text" style="border:1px solid steelblue;" required name="carname"
                        value="{{$edit->carname}}" class="form-control input">
                        <span class="text-danger">@error('carname'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>phone</b></td>
                    <td>
                        <input type="text" style="border:1px solid steelblue;" required name="phone"
                        value="{{$edit->phone}}" class="form-control input">
                        <span class="text-danger">@error('phone'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Review</b></td>
                    <td>
                        <textarea style="border:1px solid steelblue;" id="contactform_message"
                            class="form-control input-message" required value="{{$edit->review}}" rows="3"
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
                    <td class="td"><input type="submit" value="Submit" name="btn"
                            class="form-control submit btn btn-outline-secondary"></td>
                </tr>
            </table>
        </form>


    </div>
</div>

@endsection