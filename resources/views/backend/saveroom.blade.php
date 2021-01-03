<!--
|--------------------------------------------------------------------------
| resources/views/backend/saveroom.blade.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
-->
@extends('layouts.backend') <!-- Lecture 5 -->

@section('content') <!-- Lecture 5 -->
<h2>Adding a new room to the object / editing</h2>
<form method="POST" enctype="multipart/form-data" class="form-horizontal">
    <fieldset>
        <div class="form-group">
            <label for="roomNumber" class="col-lg-2 control-label">Room number *</label>
            <div class="col-lg-10">
                <input name="room_number" required type="number" class="form-control" id="roomNumber" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="peopleNumber" class="col-lg-2 control-label">Room size *</label>
            <div class="col-lg-10">
                <input name="room_size" required type="number" class="form-control" id="peopleNumber" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="price" class="col-lg-2 control-label">Price *</label>
            <div class="col-lg-10">
                <input name="price" required type="number" class="form-control" id="price" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="descr" class="col-lg-2 control-label">Room description *</label>
            <div class="col-lg-10">
                <textarea name="description" required class="form-control" rows="3" id="descr"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <label for="roomPictures">Room gallery</label>
                <input type="file" name="roomPictures[]" id="roomPictures" multiple>
                <p class="help-block">Add a photo gallery of the room</p>
            </div>
        </div>

        <div class="col-lg-10 col-lg-offset-2">

            <?php for ($i = 1; $i <= 2; $i++): ?>

                <div class="row">


                    <?php for ($j = 1; $j <= 4; $j++): ?>

                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img class="img-responsive" src="http://lorempixel.com/275/150/city/?x=<?= mt_rand(1, 9999999) ?>" alt="...">
                                <div class="caption">
                                    <p><a href="#" class="btn btn-primary btn-xs" role="button">Delete</a></p>
                                </div>

                            </div>
                        </div>

                    <?php endfor; ?>

                </div>


            <?php endfor; ?>



        </div>


        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Save room</button>
            </div>
        </div>

    </fieldset>
</form>
@endsection <!-- Lecture 5 -->


