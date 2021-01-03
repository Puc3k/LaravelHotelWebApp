<!--
|--------------------------------------------------------------------------
| resources/views/frontend/object.blade.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
-->
@extends('layouts.frontend') <!-- Lecture 5  -->

@section('content') <!-- Lecture 5  -->
<div class="container-fluid places">

    <h1 class="text-center">LoremIpsum object  <small>City name</small></h1>

    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>


    <ul class="nav nav-tabs">
        <li class="active"><a href="#gallery" data-toggle="tab" aria-expanded="true">Image gallery</a></li>
        <li><a href="#people" data-toggle="tab" aria-expanded="true">Object is liked <span class="badge">10</span></a></li>
        <li><a href="#adress" data-toggle="tab" aria-expanded="false">Address</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="gallery">

            <?php for ($i = 1; $i <= 2; $i++): ?>

                <div class="row top-buffer">

                    <div class="col-md-4">
                        <img class="img-responsive" src="http://lorempixel.com/800/400/nightlife/?x=<?= mt_rand(1, 99999999) ?>" alt="">
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" src="http://lorempixel.com/800/400/nightlife/?x=<?= mt_rand(1, 99999999) ?>" alt="">
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" src="http://lorempixel.com/800/400/nightlife/?x=<?= mt_rand(1, 99999999) ?>" alt="">
                    </div>

                </div>

            <?php endfor; ?>

        </div>
        <div class="tab-pane fade" id="people">

            <ul class="list-inline">
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <li><a href="{{ route('person') }}"><img title="John Doe" class="media-object img-responsive" width="50" height="50" src="http://lorempixel.com/50/50/people/?x=<?= mt_rand(1, 9999999) ?>" alt="..."> </a></li>

                <?php endfor; ?>
            </ul>


        </div>
        <div class="tab-pane fade" id="adress">
            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial.</p>
        </div>
    </div>

    <section>

        <h2 class="text-center">Object rooms</h2>

        <?php for ($i = 1; $i <= 1; $i++): ?>

            <div class="row">

                <?php for ($j = 1; $j <= 4; $j++): ?>

                    <div class="col-md-3 col-sm-6">

                        <div class="thumbnail">
                            <img class="img-responsive img-circle" src="http://lorempixel.com/800/400/nightlife/?x=<?= mt_rand(1, 9999999) ?>" alt="...">
                            <div class="caption">
                                <h3>Lorem ipsum</h3>
                                <p>Lorem impsum dolor sit amet. Lorem impsum dolor sit amet.</p>
                                <p><a href="{{ route('room') }}" class="btn btn-primary" role="button">Details</a><a href="{{ route('room') }}#reservation" class="btn btn-success pull-right" role="button">Reservation</a></p>
                            </div>
                        </div>
                    </div>

                <?php endfor; ?>


            </div>

        <?php endfor; ?>

    </section>

    <section>
        <h2 class="green">Object comments</h2>
        <?php for ($j = 1; $j <= 4; $j++): ?>
            <div class="media">
                <div class="media-left media-top">
                    <a title="John Doe" href="{{ route('person') }}">
                        <img class="media-object" width="50" height="50" src="http://lorempixel.com/50/50/people/?x=<?= mt_rand(1, 9999999) ?>" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-star negative-rating" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-star negative-rating" aria-hidden="true"></span>


                </div>
            </div>
            <hr>
        <?php endfor; ?>
    </section>

    <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Add comment
    </a>
    <div class="collapse" id="collapseExample">
        <div class="well">


            <form method="POST" class="form-horizontal">
                <fieldset>
                    <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">Comment</label>
                        <div class="col-lg-10">
                            <textarea required name="content" class="form-control" rows="3" id="textArea"></textarea>
                            <span class="help-block">Add a comment about this object.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Rating</label>
                        <div class="col-lg-10">
                            <select name="rating" class="form-control" id="select">
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
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

    <section>
        <h2 class="red">Articles about the object / area</h2>
        <?php for ($j = 1; $j <= 4; $j++): ?>
            <div class="articles-list">
                <h4 class="top-buffer">Accusantium voluptas aut eos aut qui in sunt.</h4>
                <p><b> John Doe</b>
                    <i>2016-05-10&nbsp;&nbsp;01:02:33</i>
                </p>
                <p>Fugiat similique voluptatum neque tempora iste. Ut sapiente aut autem autem dolores labore tenetur. Voluptatem qui cum earum. Consectetur at ipsam esse nemo est fuga. </p> <a href="{{ route('article') }}">More</a>
            </div>

        <?php endfor; ?>
    </section>

    <a href="#" class="btn btn-primary btn-xs top-buffer">Like this object</a>
</div>
@endsection <!-- Lecture 5  -->


