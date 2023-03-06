@extends('layouts.master')
@section('content')
    <div class="container">
        <a href="{{route('product.create')}}" class="btn btn-outline-primary"> Add category</a>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>sale_price</th>
                    <th>image</th>
                    <th>Category_id</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>CRUD</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $item)
                    
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->sale_price}}</td>
                        <td><img src="{{url('uploads')}}/{{$item->image}}" width="150px" alt=""></td>
                        <td>{{$item->categories->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>
                            @if ($item->status)
                                <span class="badge badge-primary">stocking</span>
                                @else
                                <span class="badge badge-danger">out of stock</span>
                                
                            @endif
                        </td>
                        <td class="d-flex">
                            <a href="{{route('product.edit',$item->id)}}" class="btn btn-outline-success">EDIT</a>
                            <form action="{{route('product.destroy',$item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection