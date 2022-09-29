@extends('admin.master.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="container">
        <center>
            <h1>Add Question</h1>
        </center>
        <form action="{{url('admin/faq/store')}}" method="POST">
            @csrf
            <table class="table">
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Question</b></td>
                    <td>
                        <input style="background-color:black;border:1px solid steelblue;" type="text" required
                            name="question" placeholder="Frequently Asked Question..." class="form-control input">
                        <span class="text-danger">@error('question'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding-top:14px;text-align:left;"><b>Answer</b></td>
                    <td>
                        <textarea style="border:1px solid steelblue;" id="contactform_message"
                            class="form-control input-message" required placeholder="Solution..." rows="7"
                            name="answer"></textarea>
                        <span class="text-danger">@error('answer'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="td"><input type="submit" value="Add" name="btn"
                            class="form-control submit btn btn-outline-secondary"></td>
                </tr>
            </table>
        </form>
    </div>
</div>

@endsection