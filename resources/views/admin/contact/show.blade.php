@extends('admin.master.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="container">

        <h1>Messages</h1>
        <table id="mytable" class="table">
            <thead>
                <tr>
                    <th width="5%">S.No</th>
                    <th width="5%">Name</th>
                    <th width="20%">Email</th>
                    <th width="10%">Phone</th>
                    <th width="50%">Message</th>
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($show as $key=>$item)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->message}}</td>
                    <td>
                        <a href="{{ url('admin/contact/reply')}}/{{$item->id}}">Reply</a>
                        <a href="{{ url('admin/contact/destroy')}}/{{$item->id}}"><i class="fa fa-trash"
                                style="font-size: 18px; padding:5px;"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection