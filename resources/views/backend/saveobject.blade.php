<!--
|--------------------------------------------------------------------------
| resources/views/backend/saveobject.blade.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
-->
@extends('layouts.backend') <!-- Lecture 5 -->

@section('content') <!-- Lecture 5 -->
<h2>Adding a new object / editing</h2>
<form method="POST" enctype="multipart/form-data" class="form-horizontal">
    <fieldset>
        <div class="form-group">
            <label for="city" class="col-lg-2 control-label">City *</label>
            <div class="col-lg-10">
                <select name="city" class="form-control" id="city">
                    <option>Washington</option>
                    <option>Krakow</option>
                    <option>Moscow</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Name *</label>
            <div class="col-lg-10">
                <input name="name" required type="text" class="form-control" id="name" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="street" class="col-lg-2 control-label">Street *</label>
            <div class="col-lg-10">
                <input name="street" required type="text" class="form-control" id="street" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="number" class="col-lg-2 control-label">Number *</label>
            <div class="col-lg-10">
                <input name="number" required type="number" class="form-control" id="number" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="descr" class="col-lg-2 control-label">Object description *</label>
            <div class="col-lg-10">
                <textarea name="description" required class="form-control" rows="3" id="descr"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <label for="objectPictures">Object gallery</label>
                <input type="file" name="objectPictures[]" id="objectPictures" multiple>
                <p class="help-block">Add a photo gallery of the object</p>
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

        <div class="col-lg-10 col-lg-offset-2">
            Articles:
            <ul class="list-group">
                <?php for ($i = 1; $i <= 6; $i++): ?>
                    <li class="list-group-item">
                        Title <a href="">delete</a>
                    </li>
                <?php endfor; ?>

            </ul>
        </div>

        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Save object</button>
            </div>
        </div>

    </fieldset>
</form>

<div class="col-lg-10 col-lg-offset-2">

    <form method="POST" class="form-horizontal">
        <fieldset>

            <div class="form-group">
                <label for="textTitle" class="col-lg-2 control-label">Title *</label>
                <div class="col-lg-10">
                    <input name="title" required type="text" class="form-control" id="textTitle" placeholder="">
                </div>
            </div>

            <div class="form-group">
                <label for="textArea" class="col-lg-2 control-label">Content *</label>
                <div class="col-lg-10">
                    <textarea name="content" required class="form-control" rows="3" id="textArea"></textarea>
                    <span class="help-block">Add an article about this object.</span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </fieldset>
    </form>

</div>
@endsection <!-- Lecture 5 -->


