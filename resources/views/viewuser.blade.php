@extends('layout')
@section('title')
User Details
@endsection

@section('content')
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="80px">Name:</th>
                    <td>{{$user->name}}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{$user->email}}</td>

                </tr>
                <tr>
                    <th>Age</th>
                    <td>{{$user->age}}</td>

                </tr>
                <tr>
                    <th>City</th>
                    <td>{{$user->city}}</td>

                </tr>
            </table>
            <a href="{{route('user.index')}}" class="btn btn-danger">Back</a>
@endsection
