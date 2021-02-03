<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use Noclegownia\Presenters\CommentPresenter;
    public function commentable(){
        return $this->morphTo();
    }
}
