<!--
|--------------------------------------------------------------------------
| resources/views/frontend/room.blade.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
-->
@extends('layouts.frontend') <!-- Lecture 5  -->

@section('content') <!-- Lecture 5  -->
<div class="container places">
    <h1 class="text-center">Room in <a href="{{ route('object') }}">X</a> object</h1>

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


    <section>

        <ul class="list-group">
            <li class="list-group-item">
                <span class="bolded">Description:</span> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.
            </li>
            <li class="list-group-item">
                <span class="bolded">Room size:</span> 3
            </li>
            <li class="list-group-item">
                <span class="bolded">Price per night:</span> 150 USD
            </li>
            <li class="list-group-item">
                <span class="bolded">Address:</span> Vestibulum ante ipsum primis
            </li>
        </ul>
    </section>

    <section id="reservation">

        <h3>Reservation</h3>

        <div class="row">
            <div class="col-md-6">
                <form method="POST">
                    <div class="form-group">
                        <label for="checkin">Check in</label>
                        <input required name="checkin" type="text" class="form-control datepicker" id="checkin" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="checkout">Check out</label>
                        <input required name="checkout" type="text" class="form-control datepicker" id="checkout" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary">Book</button> 
                    <p class="text-danger">There are no vacancies</p>
                </form>
            </div><br>
            <div class="col-md-6">
                <div id="avaiability_calendar"></div>
            </div>
        </div>


    </section>

</div>
@endsection <!-- Lecture 5  -->
