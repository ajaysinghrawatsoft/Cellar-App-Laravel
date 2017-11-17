@extends('layouts.default');

@section('content')

<input type="text" class="form-control" name="email" placeholder="E-Mail / Username" value="{{ old('email') }}" required autofocus>

@endsection