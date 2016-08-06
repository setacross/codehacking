@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="panel-heading">
        <h1>Users</h1>
    </div>
    <div class="panel-body">
        <table class="table-responsive table ">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Active</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>
            @if($users)
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role_id == '' ? "User has no role" :$user->role->name }}</td>
                    <td>{{ $user->is_active == 1 ? "Active" : "Not Active" }}</td>
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                    <td>{{ $user->updated_at->diffForHumans() }}</td>
                </tr>

                @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>


@endsection