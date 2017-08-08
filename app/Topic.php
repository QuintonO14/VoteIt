<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jcc\LaravelVote\CanBeVoted;

class Topic extends Model
{
    use CanBeVoted;

    protected $vote = User::class;

    protected $fillable = ['name', 'detail','link'];

    public function users()
    {
        return $this->hasMany('App\User');
    }


}
