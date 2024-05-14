@extends('admin.layouts.layout')
@section('content')
    <style>
        label{
            margin-bottom: 5px;
        }
    </style>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('video.store',$c) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Main title:</label>
                    <input type="text" class="form-control" name="main_title" placeholder="Main Title">
                </div>
                <div class="form-group my-2">
                    <label for="title">Course Title:</label>
                    <input type="text" class="form-control" name="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="title">Video:</label>
                    <input type="file" class="form-control" name="video">
                </div>
                <div class="form-group my-2">
                    <label for="title">File:</label>
                    <input type="file" class="form-control" name="file">
                </div>
                <button class="btn btn-primary">save</button>
            </form>
        </div>
    </div>

@endsection









mern flask .... laravel 


real time platform chating ... 



