@extends('layouts.default');

@section('content')

    <div class="row">
        <div id="content" class="span12&gt;">
            <div>
                <ul class="thumbnails">
                    @foreach ($wines as $wine)
                    <li class="span3"><a href="#"
                                         class="thumbnail plain">
                            <img src='{{ asset("images/$wine->wineImage") }}' height="150" width="125" alt="">
                            <h5>{{ $wine->name }}</h5>
                            <p>{{ $wine->year }} {{ $wine->grapes }}<br>
                                <i class="fa fa-location-arrow"></i> {{ $wine->region }}, {{ $wine->country }}</p>
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="pagination pagination-centered">
                    {!! $wines->render() !!}
                </div>
            </div>
        </div>
    </div>

@endsection