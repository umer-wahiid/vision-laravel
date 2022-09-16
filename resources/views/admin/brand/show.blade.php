@extends('admin.master.main')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="container">

        <h1>Brands List</h1>
        <table id="mytable" class="table">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Brand</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($show as $key=>$item)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$item->brand}}</td>
                    <td>
                        <a href="{{ url('admin/brand/edit') }}/{{$item->id}}"><i
                                class="fa fa-pen" style="font-size: 18px; padding:5px;"></i></a>
                        <a href="{{ url('admin/brand/destroy') }}/{{$item->id}}"><i class="fa fa-trash"
                                style="font-size: 18px; padding:5px;"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection