<!--
|--------------------------------------------------------------------------
| resources/views/backend/index.blade.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
-->
@extends('layouts.backend') <!-- Lecture 5 -->

@section('content') <!-- Lecture 5 -->
<h2 class="sub-header">Booking calendar</h2>

<?php for ($i = 1; $i <= 3; $i++): ?>

    <h3 class="red">X object</h3>


    <?php for ($j = 1; $j <= 4; $j++): ?>

        <h4 class="blue"> Room <?= $j ?></h4>

        <div class="row top-buffer">
            <div class="col-md-3">
                <div class="reservation_calendar" id="<?= $i . $j ?>"></div>
            </div>
            <div class="col-md-9">
                <div class="center-block loader loader_<?= $i . $j ?>" style="display: none;"></div>
                <div class="hidden_<?= $i . $j ?>" style="display: none;">


                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Room number</th>
                                    <th>Check in</th>
                                    <th>Check out</th>
                                    <th>Guest</th>
                                    <th>Confirmation</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3</td>
                                    <td>12/02/2012</td>
                                    <td>12/03/2015</td>
                                    <td><a target="_blank" href="{{ route('person') }}">John</a></td>
                                    <td><a href="#" class="btn btn-primary btn-xs">Confirm</a></td>
                                    <td><a href=""><span class="glyphicon glyphicon-remove"></span></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

        <hr>

    <?php endfor; ?>

<?php endfor; ?>
@endsection <!-- Lecture 5 -->


