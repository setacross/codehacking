@extends('layouts.admin')


@section('content')
<div class="container">
    <h1>Create Post</h1>
    {!! Form::open(['method'=>'post','action'=>'AdminPostsController@store','files' => true]) !!}

            <div class="form-group">
                {!! Form::label('title','Title:') !!}
                {!! Form::text('title',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_id','Category:') !!}
                {!! Form::select('category_id',$categories,null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id','Photo:') !!}
                {!! Form::file('photo_id',null,['class'=>'form-control file']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('body','Description:') !!}
                {!! Form::textarea('body',null,['class'=>'form-control','row'=>3]) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Add Post',['class'=>'btn btn-primary form-control']) !!}
            </div>

    {!! Form::close() !!}



</div>
<div class="row">
    @include('errors.error')
</div>


@endsection