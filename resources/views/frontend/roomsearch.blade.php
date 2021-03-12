<!--
|--------------------------------------------------------------------------
| resources/views/frontend/roomsearch.blade.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
-->
@extends('layouts.frontend') <!-- Lecture 5  -->

@section('content') <!-- Lecture 5  -->
<div class="container-fluid places">

    <h1 class="text-center">Dostępne pokoje</h1>

    @foreach($city->rooms->chunk(4) as $chunked_rooms)

        <div class="row">

            @foreach($chunked_rooms as $room)

                <div class="col-md-3 col-sm-6">

                    <div class="thumbnail">
                        <img class="img-responsive img-circle" src="{{$room->photos->first()->path ?? $placeholder}}" alt="..." style="width:250px;height:250px;">
                        <div class="caption">
                            <h3>Pokój nr {{$room->room_number}}<small class="orange bolded"> {{$room->room_price}} zł</small> </h3>
                            <p>{{str_limit($room->description,70)}}</p>
                            <p><a href="{{ route('room',['id'=>$room->id]) }}" class="btn btn-primary" role="button">Szczegóły</a><a href="{{ route('room',['id'=>$room->id]) }}#reservation" class="btn btn-success pull-right" role="button">Rezerwuj</a></p>
                        </div>
                    </div>
                </div>

            @endforeach


        </div>

        @endforeach

</div>
@endsection <!-- Lecture 5  -->


