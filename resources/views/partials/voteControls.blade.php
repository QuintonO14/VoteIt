    @if($user->hasUpVoted($topic))
    <a data-id="{{$topic->id}}" data-toggle="tooltip" title="Upvote This Topic" class="btn btn-primary fa fa-thumbs-up upVoted">
        Upvote
        <sub id="count" data-count="{{$topic->countUpVoters()}}">{{$topic->countUpVoters()}}</sub>
    </a>
    @else
    <a href="{{route('upvote', $topic->id)}}" data-id="{{$topic->id}}" data-toggle="tooltip" title="Upvote This Topic" class="btn btn-primary upvote fa fa-thumbs-up" id="upvote">
        Upvote
        <sub id="count" data-count="{{$topic->countUpVoters()}}">{{$topic->countUpVoters()}}</sub>
    </a>
    @endif
    @if($user->hasDownVoted($topic))
    <a data-id="{{$topic->id}}" data-toggle="tooltip" title="Downvote This Topic" class="btn btn-danger fa fa-thumbs-down downVoted">
        Downvote
        <sub id="count" data-count="{{$topic->countDownVoters()}}">{{$topic->countDownVoters()}}</sub>
    </a>
    @else
    <a href="{{route('downvote', $topic->id)}}" data-id="{{$topic->id}}" data-toggle="tooltip" title="Downvote This Topic" class="btn btn-danger downvote fa fa-thumbs-down id=upvote">
        Downvote
        <sub  id="count" data-count="{{$topic->countDownVoters()}}">{{$topic->countDownVoters()}}</sub>
    </a>
    @endif
