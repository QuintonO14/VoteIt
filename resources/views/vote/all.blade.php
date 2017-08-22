@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h4 class="voteTitle">Cast Your Vote Here!</h4>
                <select name="" id="category" class="form-control select">
                    <option value="" selected hidden>-Select-</option>
                    <option value="">All</option>
                    <option value="sports">Sports</option>
                    <option value="world-news">World News</option>
                    <option value="entertainment">Entertainment</option>
                    <option value="science">Science</option>
                    <option value="health">Health</option>
                    <option value="miscellaneous">Miscellaneous</option>
                </select>
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
                            <small class="category">{{$topic->category}}</small>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <li class="votes">You have casted {{$votes}} votes</li>
@endsection
