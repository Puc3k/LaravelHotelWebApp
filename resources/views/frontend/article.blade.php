<!--
|--------------------------------------------------------------------------
| resources/views/frontend/article.blade.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
-->
@extends('layouts.frontend') <!-- Lecture 5  -->

@section('content') <!-- Lecture 5  -->
<div class="container">

    <h1>Article <small>about: <a href="{{ route('object') }}">X</a> object</small></h1>
    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>


    <a class="btn btn-primary top-buffer" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Article is liked <span class="badge">10</span>
    </a>
    <div class="collapse" id="collapseExample">
        <div class="well">

            <ul class="list-inline">
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <li><a href="{{ route('person') }}"><img title="John Doe" class="media-object img-responsive" width="50" height="50" src="http://lorempixel.com/50/50/people/?x=<?= mt_rand(1, 9999999) ?>" alt="..."> </a></li>

                <?php endfor; ?>
            </ul>


        </div>
    </div>

    <h3>Comments</h3>

    <?php for ($j = 1; $j <= 4; $j++): ?>
        <div class="media">
            <div class="media-left media-top">
                <a href="{{ route('person') }}">
                    <img class="media-object" width="50" height="50" src="http://lorempixel.com/50/50/people/?x=<?= mt_rand(1, 9999999) ?>" alt="...">
                </a>
            </div>
            <div class="media-body">
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.

            </div>
        </div>
        <hr>
    <?php endfor; ?>

    <a href="#" class="btn btn-primary btn-xs">Like this article</a><br><br>

    <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
        Add comment
    </a>
    <div class="collapse" id="collapseExample2">
        <div class="well">


            <form method="POST" class="form-horizontal">
                <fieldset>

                    <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">Comment</label>
                        <div class="col-lg-10">
                            <textarea required name="content" class="form-control" rows="3" id="textArea"></textarea>
                            <span class="help-block">Add a comment about this article.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>


</div>
@endsection <!-- Lecture 5  -->
