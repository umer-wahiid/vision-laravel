@extends('admin.master.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="container">

        <h1>FAQs</h1>
        <table id="mytable" class="table">
            <thead>
                <tr>
                    <th width="5%">S.No</th>
                    <th width="30%">Question</th>
                    <th width="50%">Answer</th>
                    <th width="15%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($show as $key=>$item)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$item->question}}</td>
                    <td>{{$item->answer}}</td>
                    <td>
                        <a href="{{ url('admin/faq/edit')}}/{{$item->id}}"><i class="fa fa-pen"
                                style="font-size: 18px; padding:5px;"></i></a>
                        <a href="{{ url('admin/faq/destroy')}}/{{$item->id}}"><i class="fa fa-trash"
                                style="font-size: 18px; padding:5px;"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection