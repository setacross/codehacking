@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Edit Categories</h1>

        {!! Form::model($category,['method'=>'PATCH','action'=>['AdminCategoryController@update',$category->id]]) !!}
        <div class="form-group">
            {!! Form::label('name','Category Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update Category',['class'=>'btn btn-primary form-control']) !!}
        </div>

        {!! Form::close() !!}

        <div class="row">
            @include('errors.error')
        </div>

    </div>
@endsection