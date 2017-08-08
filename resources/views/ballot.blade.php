@extends('layouts.app')

@section('content')
    <div class="panel panel-default ballot col-md-6">
    {!! Form::open(['method'=>'POST', 'action'=>'VoteTopicsController@makeBallot']) !!}
    {!! Form::label('name', 'Topic Name:') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
    {!! Form::label('detail', 'Topic Summary:') !!}
    {!! Form::textarea('detail', null, ['class'=>'form-control','rows'=>'10']) !!}
    {!! Form::label('link', 'External Link:') !!}
    {!! Form::text('link', null, ['class'=>'form-control']) !!}
    {!! Form::submit('Make Ballot', ['class'=>'btn btn-primary submitButton']) !!}
    {!! Form::close() !!}
    </div>

    <div class="alert alert-info info">
        <p><strong>Make your own topic here!</strong> Simply title the topic at hand
        and give a good description of what you want users to vote for or against,
        it can be <strong>ANYTHING!</strong> Care to educate the reader more about the topic?
        Copy and paste an external link to give people for information on it!Try and word your topic in a way that
        can easily be upvoted or downvoted like the examples you've seen before. Don't try to
        gear the topic towards your own beliefs!</p>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection