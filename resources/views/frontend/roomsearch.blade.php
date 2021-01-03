<!--
|--------------------------------------------------------------------------
| resources/views/frontend/roomsearch.blade.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
-->
@extends('layouts.frontend') <!-- Lecture 5  -->

@section('content') <!-- Lecture 5  -->
<div class="container-fluid places">

    <h1 class="text-center">Available rooms</h1>

    <?php for ($i = 1; $i <= 3; $i++): ?>

        <div class="row">

            <?php for ($j = 1; $j <= 4; $j++): ?>

                <div class="col-md-3 col-sm-6">

                    <div class="thumbnail">
                        <img class="img-responsive img-circle" src="http://lorempixel.com/800/400/nightlife/?x=<?= mt_rand(1, 9999999) ?>" alt="...">
                        <div class="caption">
                            <h3>Lorem ipsum  <small class="orange bolded">250$</small> </h3>
                            <p>Lorem impsum dolor sit amet. Lorem impsum dolor sit amet.</p>
                            <p><a href="{{ route('room') }}" class="btn btn-primary" role="button">Details</a><a href="{{ route('room') }}#reservation" class="btn btn-success pull-right" role="button">Reservation</a></p>
                        </div>
                    </div>
                </div>

            <?php endfor; ?>


        </div>

    <?php endfor; ?>

</div>
@endsection <!-- Lecture 5  -->


