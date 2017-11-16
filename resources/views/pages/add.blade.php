@extends('layouts.default');

@section('content')

    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif
        <form action="{{url('wine')}}" method="post" class="form-horizontal span12" enctype="multipart/form-data">
            {{csrf_field()}}
            <fieldset>

                <legend>Wine Details</legend>
                <br>
                <div class="row">
                    <div class="span9">
                        <div class="control-group">
                            <label for="name" class="control-label">Name:</label>

                            <div class="controls">
                                <input type="text" id="name" name="name" value="">
                                <span class="help-inline"></span>
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="grapes" class="control-label">Grapes:</label>

                            <div class="controls">
                                <input type="text" id="grapes" name="grapes" value="">
                                <span class="help-inline"></span>
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="country" class="control-label">Country:</label>

                            <div class="controls">
                                <input type="text" id="country" name="country" value="USA">
                                <span class="help-inline"></span>
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="region" class="control-label">Region:</label>

                            <div class="controls">
                                <input type="text" id="region" name="region" value="California">
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="year" class="control-label">Year:</label>

                            <div class="controls">
                                <select class="span1" id="year" name="year" value="">
                                    <option>2012</option>
                                    <option>2011</option>
                                    <option>2010</option>
                                    <option>2009</option>
                                    <option>2008</option>
                                    <option>2007</option>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="notes" class="control-label">Notes:</label>

                            <div class="controls">
                                <textarea id="notes" name="notes" class="span6" rows="6"></textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="wineImage" class="control-label">Wine Image:</label>

                            <div class="controls">
                                <input type="file" id="wineImage" name="wineImage" >
                            </div>
                        </div>

                    </div>
                </div>

            </fieldset>

            <div class="form-actions">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>

        </form>
    </div>

@endsection