@extends('layouts.error')
@section('content')
    <div class="contain">
        <div class="content">
            <h1 class="text-center">Abandon Hope He Who Typed In This URL. It Does Not Exist!</h1>
            <a href="{{ url('/vote') }}" style="font-size: 50px; position: absolute; top: 50%; left: 41%;">GO BACK</a>
        </div>
    </div>
@endsection