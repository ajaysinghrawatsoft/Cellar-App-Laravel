@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Wine Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('/') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <table class="table table-condensed">
            <tbody>
                <tr>
                    <td><strong>Name:</strong></td>
                    <td>{{ $wine->name}}</td>
                </tr>
                <tr>
                    <td><strong>Grapes:</strong></td>
                    <td>{{ $wine->grapes}}</td>
                </tr>
                <tr>
                    <td><strong>Country:</strong></td>
                    <td>{{ $wine->country}}</td>
                </tr>
                <tr>
                    <td><strong>Region:</strong></td>
                    <td>{{ $wine->region}}</td>
                </tr>
                <tr>
                    <td><strong>Year:</strong></td>
                    <td>{{ $wine->year}}</td>
                </tr>
                <tr>
                    <td><strong>Notes:</strong></td>
                    <td>{{ $wine->notes}}</td>
                </tr>
                <tr>
                    <td><strong>Wine Image:</strong></td>
                    <td><img height="150px" src='{{ asset("images/$wine->wineImage") }}'></td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection