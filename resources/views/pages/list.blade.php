@extends('layouts.default');

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Wines</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('wine.create') }}"> Add New Wine</a>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Grapes</th>
            <th>Country</th>
            <th>Region</th>
            <th>Year</th>
            <th>Action</th>
        </tr>
        @foreach ($wines as $wine)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $wine->name }}</td>
                <td>{{ $wine->grapes }}</td>
                <td>{{ $wine->country }}</td>
                <td>{{ $wine->region }}</td>
                <td>{{ $wine->year }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('wine.edit',$wine->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['wine.destroy', $wine->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $wines->render() !!}
@endsection