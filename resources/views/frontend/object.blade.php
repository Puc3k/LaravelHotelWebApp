<!--
|--------------------------------------------------------------------------
| resources/views/frontend/object.blade.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
-->
@extends('layouts.frontend') <!-- Lecture 5  -->

@section('content') <!-- Lecture 5  -->
<div class="container-fluid places">

    <h1 class="text-center">Obiekt {{$object->name}} <small>{{$object->city->name}}</small></h1>

    <p>{{$object->description}}</p>



    <ul class="nav nav-tabs">
        <li class="active"><a href="#gallery" data-toggle="tab" aria-expanded="true">Galeria zdjęć</a></li>
        <li><a href="#people" data-toggle="tab" aria-expanded="true">Polubienia <span class="badge">{{$object->users->count()}}</span></a></li>
        <li><a href="#adress" data-toggle="tab" aria-expanded="false">Adres</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="gallery">

           @foreach($object->photos->chunk(3) as $chunked_photos)

                <div class="row top-buffer">
                @foreach( $chunked_photos as $photo)
                    <div class="col-md-4">
                        <img class="img-responsive" src="{{$photo->path ?? $placeholder}}" alt="" style="width: 500px; height:250px;">
                    </div>
                    @endforeach
                </div>
            @endforeach

        </div>
        <div class="tab-pane fade" id="people">

            <ul class="list-inline">
            @foreach($object->users as $user)
                    <li><a href="{{ route('person') }}"><img title="{{$user->FullName}}" class="media-object img-responsive" src="{{$user->photos->first()->path}}" alt="..." style="width: 80px;height:80px;"> </a></li>

             @endforeach
            </ul>


        </div>
        <div class="tab-pane fade" id="adress">
            <p>{{$object->address->street}} {{$object->address->number}}</p>
        </div>
    </div>

    <section>

        <h2 class="text-center">Dostępne pokoje</h2>

        @foreach($object->rooms->chunk (4) as $chunked_rooms)

            <div class="row">

                @foreach($chunked_rooms as $room)

                    <div class="col-md-3 col-sm-6">

                        <div class="thumbnail">
                            <img class="img-responsive img-circle" src="{{$room->photos->first()->path ?? $placeholder}}" alt="..." style="width: 250px;height:250px;">
                            <div class="caption">
                                <h3>Nr {{ $room->room_number}} </h3>
                                <p>{{ str_limit($room->description,70)}}</p>
                                <p><a href="{{ route('room') }}" class="btn btn-primary" role="button">Szczegóły</a><a href="{{ route('room') }}#reservation" class="btn btn-success pull-right" role="button">Rezerwacja</a></p>
                            </div>
                        </div>
                    </div>

                @endforeach


            </div>

        @endforeach

    </section>

    <section>
        <h2 class="green">Komentarze</h2>
        @foreach($object->comments as $comment)
            <div class="media">
                <div class="media-left media-top">
                    <a title="John Doe" href="{{ route('person') }}">
                        <img class="media-object" width="50" height="50" src="http://lorempixel.com/50/50/people/?x=<?= mt_rand(1, 9999999) ?>" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    {{$comment->content}}
                    {!!$comment->rating!!}


                </div>
            </div>
            <hr>
            @endforeach
    </section>

    <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Dodaj komentarz
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
        <h2 class="red">Artykuły o obiekcie: </h2>
        @foreach($object->articles as $article)
            <div class="articles-list">
                <h4 class="top-buffer">{{$article->title}}</h4>
                <p><b>{{$article->user->FullName}}</b>
                    <i>{{$article->created_at}}</i>
                </p>
                <p>{{str_limit($article->content,250)}}</p> <a href="{{ route('article') }}">Więcej</a>
            </div>

        @endforeach
    </section>

    <a href="#" class="btn btn-primary btn-xs top-buffer">Like this object</a>
</div>
@endsection <!-- Lecture 5  -->


