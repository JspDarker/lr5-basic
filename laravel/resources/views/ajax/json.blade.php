@extends('layouts.ajax-layout')

@section('title')
    @Ajax
@endsection

@section('content')
    <div class="container text-center mt-2">
        <h3>Using Ajax For Laravel 5*</h3>
        <div class="form-group">
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
            <input type="text" class="form-control" placeholder="search" id="search">

        </div>

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>

    </div>
@endsection