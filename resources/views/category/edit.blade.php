@extends('layouts.master')
@section('content')
    <div class="container">
        <h4 class="btn ">Update</h4>
        <form action="{{ route("category.update",$category->id) }}" method="post">
            @method("PUT")
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$category->name}}">
            </div>
            <p>Status</p>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="status" id="" value="1" {{$category->status ? 'checked': '' }} >
                    Active
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="status" id="" value="0" {{!$category -> status ? 'checked': '' }} >
                    No Active
                </label>
            </div>
            <br>
            <button class="btn btn-primary" type="Submit">Submit</button>
        </form>
    </div>
@endsection
