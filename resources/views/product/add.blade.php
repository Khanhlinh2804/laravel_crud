@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <form action="{{route('product.store')}}" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        @csrf
                      <label for="">Name</label>
                      <input type="text" class="form-control" name="name" id="" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                      <label for="">Price</label>
                      <input type="float" class="form-control" name="price" id="" value="{{old('price')}}">
                    </div>
                    <div class="form-group">
                      <label for="">Sale_price</label>
                      <input type="float" class="form-control" name="sale_price" id="" value="{{old('sale_price')}}">
                    </div>
                    <div class="form-group">
                      <label for="">Anh</label>
                      <input type="file" class="form-control" name="file" id="" value="{{old('image')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Category</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                         @foreach ($category as $item)   
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                        </select>
                    </div>
                    <p>Status</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" value="1" checked>
                        <label class="form-check-label" for="inlineRadio1">Stocking</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status"  value="0">
                        <label class="form-check-label" for="inlineRadio2">Out of stock</label>
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-outline-primary pl-4 pr-4" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection