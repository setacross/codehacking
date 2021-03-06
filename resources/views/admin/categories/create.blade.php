@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Create Categories</h1>

        {!! Form::open(['method'=>'post','action'=>'AdminCategoryController@store']) !!}
                <div class="form-group">
                    {!! Form::label('name','Category Name:') !!}
                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Add Category',['class'=>'btn btn-primary form-control']) !!}
                </div>

        {!! Form::close() !!}

        <div class="row">
            @include('errors.error')
        </div>

    </div>
@endsection