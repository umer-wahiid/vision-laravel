@extends('admin.master.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="container">

        <h1>Cars List</h1>
        <table id="mytable" class="table">
            <thead>
                <tr>
                    <th width="5%">S.No</th>
                    <th width="10%">Name</th>
                    <th width="10%">Car Name</th>
                    <th width="10%">Phone</th>
                    <th width="40%">Review</th>
                    <th width="10%">Customer Image</th>
                    <th width="10%">Car Image</th>
                    <th width="5%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($show as $key=>$item)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->carname}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->review}}</td>
                    <td><img src="{{url($item->picture)}}" class="rounded" width="50px" height="40px" alt=""></td>
                    <td><img src="{{url($item->carimage)}}" class="rounded" width="50px" height="40px" alt=""></td>
                    <td>
                        <a href="{{ url('admin/review/edit')}}/{{$item->id}}"><i class="fa fa-pen"
                                style="font-size: 18px; padding:5px;"></i></a>
                        <a href="{{ url('admin/review/destroy')}}/{{$item->id}}"><i class="fa fa-trash"
                                style="font-size: 18px; padding:5px;"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection