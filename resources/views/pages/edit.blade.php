@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('wine.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        {{ Form::model($wine, array('route' => array('wine.update', $wine->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data')) }}

        <div class="row">
                <div class="span9">
                    <div class="control-group">
                        <label for="name" class="control-label">Name:</label>

                        <div class="controls">
                            <input type="text" id="name" name="name" value="{{ $wine->name }}">
                            <span class="help-inline"></span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="grapes" class="control-label">Grapes:</label>

                        <div class="controls">
                            <input type="text" id="grapes" name="grapes" value="{{ $wine->grapes }}">
                            <span class="help-inline"></span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="country" class="control-label">Country:</label>

                        <div class="controls">
                            <input type="text" id="country" name="country" value="{{ $wine->name }}">
                            <span class="help-inline"></span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="region" class="control-label">Region:</label>

                        <div class="controls">
                            <input type="text" id="region" name="region" value="{{ $wine->region }}">
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="year" class="control-label">Year:</label>

                        <div class="controls">
                            <select class="span1" id="year" name="year" value="">
                                <option @if ($wine->year == "2012") {{ "selected" }} @endif>2012</option>
                                <option @if ($wine->year == "2011") {{ "selected" }} @endif>2011</option>
                                <option @if ($wine->year == "2010") {{ "selected" }} @endif>2010</option>
                                <option @if ($wine->year == "2009") {{ "selected" }} @endif>2009</option>
                                <option @if ($wine->year == "2008") {{ "selected" }} @endif>2008</option>
                                <option @if ($wine->year == "2007") {{ "selected" }} @endif>2007</option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="notes" class="control-label">Notes:</label>

                        <div class="controls">
                            <textarea id="notes" name="notes" class="span6" rows="6">{{ $wine->notes }}</textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="wineImage" class="control-label">Wine Image:</label>

                        <div class="controls">
                            <input type="file" id="wineImage" name="wineImage" ><br><br>
                            <input type="hidden" name="_oldImg" value="{{ 'images/'.$wine->wineImage }}">
                            <img height="150px" src='{{ asset("images/$wine->wineImage") }}'>
                        </div>
                    </div>

                </div>
            </div>
        <br><br>
        <div class="form-actions">
            <input type="submit" class="btn btn-primary" value="Update">
        </div>

    {{ Form::close() }}

@endsection