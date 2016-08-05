@extends('layouts.app')
@section('content')
<div class="container">
    <div class="panel-body">
        <table class="table-responsive table ">
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>

                @endforeach
        </table>
    </div>
</div>


@endsection