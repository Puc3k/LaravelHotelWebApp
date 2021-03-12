<!--
|--------------------------------------------------------------------------
| resources/views/frontend/room.blade.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
-->
@extends('layouts.frontend') <!-- Lecture 5  -->

@section('content') <!-- Lecture 5  -->
<div class="container places">
    <h1 class="text-center">Pokój w obiekcie <a href="{{ route('object',['room'=>$room->tourist_object_id]) }}">{{ $room->object->name}}</a></h1>

    @foreach($room->photos->chunk(3) as $chunked_photos)
        <div class="row top-buffer">
            @foreach($chunked_photos as $photo)
            <div class="col-md-4">
                <img class="img-responsive" src="{{$photo->path ?? $placeholder}}" alt="" style="width:400px;height:200px;">
            </div>
            @endforeach
        </div>
   @endforeach


    <section>

        <ul class="list-group">
            <li class="list-group-item">
                <span class="bolded">Opis: </span>{{$room->description}}
            </li>
            <li class="list-group-item">
                <span class="bolded">Rozmiar pokoju: </span> {{$room->room_size}} osobowy
            </li>
            <li class="list-group-item">
                <span class="bolded">Cena za noc:</span> {{$room->room_price}} zł
            <li class="list-group-item">
                <span class="bolded">Adres: </span>{{$room->object->city->name}} ul.{{$room->object->address->street}} {{$room->object->address->number}} 
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
@endsection
@push('scripts')
<script>
 
    /* Lecture 21 */
    function datesBetween(startDt, endDt) {
        var between = [];
        var currentDate = new Date(startDt);
        var end = new Date(endDt);
        while (currentDate <= end)
        {
            between.push( $.datepicker.formatDate('mm/dd/yy',new Date(currentDate)) );
            currentDate.setDate(currentDate.getDate() + 1);
        }
    
            return between;
    }
        
    $.ajax({
    
        cache: false,
        url: base_url + '/ajaxGetRoomReservations/' + {{ $room->id }},
        type: "GET",
        success: function(response){
    
    
            var eventDates = {};
            var dates = [/* Lecture 21 */];
            
            /* Lecture 21 */
            for(var i = 0; i <= response.reservations.length - 1; i++)
            {
                dates.push(datesBetween(new Date(response.reservations[i].day_in), new Date(response.reservations[i].day_out))); // array of arrays
            }
            
            
            /*  a = [1];
                b = [2];
                x = a.concat(b);
                x = [1,2];
                [ [1],[2],[3] ] => [1,2,3]  */
            dates = [].concat.apply([], dates); /* Lecture 21 */   // flattened array
    
            /* Lecture 21 */
            for (var i = 0; i <= dates.length - 1; i++)
            {
                eventDates[dates[i]] = dates[i];
            }
    
    
            $(function () {
                $("#avaiability_calendar").datepicker({
                    onSelect: function (data) {
    
            //            console.log($('#checkin').val());
    
                        if ($('#checkin').val() == '')
                        {
                            $('#checkin').val(data);
                        } else if ($('#checkout').val() == '')
                        {
                            $('#checkout').val(data);
                        } else if ($('#checkout').val() != '')
                        {
                            $('#checkin').val(data);
                            $('#checkout').val('');
                        }
    
                    },
                    beforeShowDay: function (date)
                    {
                        var tmp =  eventDates[$.datepicker.formatDate('mm/dd/yy', date)]; /* Lecture 21 */
                        //console.log(date);
                        if (tmp)
                            return [false, 'unavaiable_date'];
                        else
                            return [true, ''];
                    }
    
    
                });
            });
    
    
        }
    
    
    });
    
    
        
    </script>
@endpush
