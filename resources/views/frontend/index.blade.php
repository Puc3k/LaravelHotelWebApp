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

    @foreach($objects->chunk(4) as $chunked_object)

        <div class="row">

        @foreach($chunked_object as $object)

                <div class="col-md-3 col-sm-6">

                    <div class="thumbnail">
                        <img class="img-responsive" src="{{$object->photos->first()->path ?? null}}" alt="...">
                        <div class="caption">
                            <h3>{{$object->name}}<small>{{$object->city->name}}</small> </h3>
                            <p>{{str_limit($object->description,100)}}.</p>
                            <p><a href="{{ route('object') }}" class="btn btn-primary" role="button">Details</a></p>
                        </div>
                    </div>
                </div>

                @endforeach


        </div>

    @endforeach

</div>
@endsection <!-- Lecture 5  -->


