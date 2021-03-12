@extends('layouts.master')
@section('content')
<div class="col-md-4" style="padding: 40px;">
    <div class="card mb-3" style="max-width: 20rem;">
        
        <div class="card-body">
            <div class="card-title">
                <h4> {{$post->title}}</h4>
            </div>
            <div class="card-text">
                {{$post->body}}
            </div>
            <hr>
            <a href="#" class="btn btn-primary">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a>

        </div>    
    </div>
</div>
@endsection