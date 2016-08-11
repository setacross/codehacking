@extends('layouts.admin')


@section('content')

    <div class="container">
        <h2>Post</h2>
       <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Owner</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
                </thead>
                <tbody>
                @if($posts)

                    @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td><img src="{{ $post->photo ? $post->photo->file :'http://placehold.it/400x400'  }}" alt="" width="100"></td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td><a href="{{route('admin.posts.edit',$post->id)}}">{{ $post->title }}</a></td>
                    <td>{{ $post->body}}</td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                    <td>{{ $post->updated_at->diffForHumans()}}</td>
                </tr>
                    @endforeach


                @endif
                </tbody>
            </table>
        </div>
    </div>


@endsection