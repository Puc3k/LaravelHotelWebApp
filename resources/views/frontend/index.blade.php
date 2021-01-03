<!--
|--------------------------------------------------------------------------
| resources/views/frontend/index.blade.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
-->
@extends('layouts.frontend') <!-- Lecture 5  -->

@section('content') <!-- Lecture 5  -->
<div class="container-fluid places">

    <p class="text-center red bolded">No offers were found that met the criteria</p>
    <h1 class="text-center">Interesting places</h1>

    <?php for ($i = 1; $i <= 3; $i++): ?>

        <div class="row">

            <?php for ($j = 1; $j <= 4; $j++): ?>

                <div class="col-md-3 col-sm-6">

                    <div class="thumbnail">
                        <img class="img-responsive" src="http://lorempixel.com/800/400/city/?x=<?= mt_rand(1, 9999999) ?>" alt="...">
                        <div class="caption">
                            <h3>Lorem ipsum  <small>City</small> </h3>
                            <p>Lorem impsum dolor sit amet. Lorem impsum dolor sit amet.</p>
                            <p><a href="{{ route('object') }}" class="btn btn-primary" role="button">Details</a></p>
                        </div>
                    </div>
                </div>

            <?php endfor; ?>


        </div>

    <?php endfor; ?>

</div>
@endsection <!-- Lecture 5  -->


