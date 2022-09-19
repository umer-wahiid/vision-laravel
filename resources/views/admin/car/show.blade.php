@extends('admin.master.main')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="container">

        <h1>Cars List</h1>
        <table id="mytable" class="table">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Car</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Year</th>
                    <th>Type</th>
                    <th>Mileage</th>
                    <th>Stock</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($show as $key=>$item)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$item->car}}</td>
                    <td>{{$item->category}}</td>
                    <td>{{$item->brand}}</td>
                    <td>{{$item->year}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->mi}}</td>
                    <td>{{$item->stock}}</td>
                    <td><img src="{{url($item->image)}}" class="rounded" width="50px" height="40px" alt=""></td>
                    <td>
                        <a href="{{ url('admin/car/edit')}}/{{$item->id}}"><i class="fa fa-pen"
                                style="font-size: 18px; padding:5px;"></i></a>
                        <a href="{{ url('admin/car/destroy')}}/{{$item->id}}"><i class="fa fa-trash"
                                style="font-size: 18px; padding:5px;"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection