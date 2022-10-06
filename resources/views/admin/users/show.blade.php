@extends('admin.master.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="container">

        <h1>Admins</h1>
        <table id="mytable" class="table">
            <thead>
                <tr>
                    <th width="10%">S.No</th>
                    <th width="20%">Name</th>
                    <th width="40%">Email</th>
                    <th width="20%">Picture</th>
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($show as $key=>$item)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td><img src="{{url($item->image)}}" class="rounded" width="55px" height="55px" alt=""></td>
                    <td>
                        <a href="{{ url('admin/users/destroy')}}/{{$item->id}}"><i class="fa fa-trash"
                                style="font-size: 18px; padding:5px;"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection