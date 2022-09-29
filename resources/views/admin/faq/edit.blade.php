@extends('admin.master.main')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="container">
        <center>
            <h1 style="color:steelblue;">Edit <span style="color:white;">Question</span></h1>
        </center>
        <form action="{{url('admin/faq/update')}}/{{$edit->id}}" enctype="multipart/form-data" method="POST">
            @csrf
            <table class="table">
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Question</b></td>
                    <td>
                        <input style="border:1px solid steelblue;" type="text" required name="question"
                            placeholder="Car Name" value="{{$edit->question}}" class="form-control input">
                        <span class="text-danger">@error('question'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Answer</b></td>
                    <td>
                        <textarea style="border:1px solid steelblue;" value="{{$edit->answer}}" id="contactform_message"
                            class="form-control input-message" required placeholder="Solution..." rows="7"
                            name="answer"></textarea>
                        <span class="text-danger">@error('answer'){{$message}}@enderror</span>
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