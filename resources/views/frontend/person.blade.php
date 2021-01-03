<!--
|--------------------------------------------------------------------------
| resources/views/frontend/person.blade.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
-->
@extends('layouts.frontend') <!-- Lecture 5  -->

@section('content') <!-- Lecture 5  -->
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">

                        <div class="col-xs-12 col-sm-3">
                            <img src="http://lorempixel.com/200/200/people/?x=<?= mt_rand(1, 9999999) ?>" alt="" class="img-circle img-responsive">
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <h2>John Doe</h2>

                        </div>


                        <div class="col-sm-12 top-buffer">
                            <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> 7 liked objects </button>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="">  Cras justo odio</a>

                                </li>
                                <li class="list-group-item">
                                    <a href=""> Dapibus ac facilisis in</a>

                                </li>
                                <li class="list-group-item">
                                    <a href=""> Morbi leo risus</a>

                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-info btn-block"><span class="fa fa-user"></span> 245 liked articles </button>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="">Cras justo odio</a>

                                </li>
                                <li class="list-group-item">
                                    <a href=""> Dapibus ac facilisis in</a>

                                </li>
                                <li class="list-group-item">
                                    <a href=""> Morbi leo risus</a>

                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-primary btn-block"><span class="fa fa-gear"></span> 48 Comments </button>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="">Cras justo odio</a>

                                </li>
                                <li class="list-group-item">
                                    <a href="">Dapibus ac facilisis in</a>

                                </li>
                                <li class="list-group-item">
                                    <a href="">Morbi leo risus</a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection <!-- Lecture 5  -->
