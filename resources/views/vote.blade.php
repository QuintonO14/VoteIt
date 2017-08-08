@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h4 class="voteTitle">Cast Your Vote Here!</h4>
                @foreach($topics as $topic)
                    <div class="panel panel-default topic">
                        <div>
                            <h2 class="topicName">{{$topic->name}}</h2>
                            <p>{{$topic->detail}}</p>
                            <div class="text-center">
                            @include('partials.voteControls')
                            @if($topic->link)
                            <a href="{{$topic->link}}" data-toggle="tooltip" title="Click to Read More" class="readMore">See more?</a>
                            @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
