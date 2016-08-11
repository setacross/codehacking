@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Categories</h1>

        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
                </thead>
                <tbody>
                @if($categories)
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td><a href="{{route('admin.categories.edit',$category->id)}}">{{ $category->name }}</a></td>
                            <td>{{ $category->created_at }}</td>
                            <td>{{$category->updated_at}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>

    </div>
@endsection