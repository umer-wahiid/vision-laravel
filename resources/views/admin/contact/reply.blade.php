@extends('admin.master.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="container">
        <center>
            <h1>Reply To {{$reply->name}}</h1>
        </center>
        <form action="{{url('admin/contact/replymail')}}/{{$reply->id}}" enctype="multipart/form-data" method="POST">
            @csrf
            <table class="table">
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Name</b></td>
                    <td>
                        <input readonly style="background-color:black;border:1px solid steelblue;" type="text" required
                            name="name" value="{{$reply->name}}" class="form-control input">
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Email</b></td>
                    <td>
                        <input readonly style="background-color:black;border:1px solid steelblue;" type="text" required
                            name="email" value="{{$reply->email}}" class="form-control input">
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Phone</b></td>
                    <td>
                        <input readonly style="background-color:black;border:1px solid steelblue;" type="text" required
                            name="phone" value="{{$reply->phone}}" class="form-control input">
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Reply</b></td>
                    <td>
                        <textarea style="border:1px solid steelblue;" id="contactform_message"
                            class="form-control input-message" placeholder="Reply..." rows="7"
                            name="message"></textarea>
                        <span class="text-danger">@error('reply'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="td"><input type="submit" value="Send" name="btn"
                            class="form-control submit btn btn-outline-secondary"></td>
                </tr>
            </table>
        </form>
    </div>
</div>

@endsection