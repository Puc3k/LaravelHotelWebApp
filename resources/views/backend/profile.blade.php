<!--
|--------------------------------------------------------------------------
| resources/views/backend/profile.blade.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
-->
@extends('layouts.backend') <!-- Lecture 5 -->

@section('content') <!-- Lecture 5 -->
<h2>User data</h2>
<form method="POST" class="form-horizontal" enctype="multipart/form-data">
    <fieldset>
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Name *</label>
            <div class="col-lg-10">
                <input name="name" type="text" required class="form-control" id="name" value="Name">
            </div>
        </div>
        <div class="form-group">
            <label for="surname" class="col-lg-2 control-label">Last name *</label>
            <div class="col-lg-10">
                <input name="surname" type="text" required class="form-control" id="surname" value="Last name">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email *</label>
            <div class="col-lg-10">
                <input name="email" type="email" required class="form-control" id="inputEmail" value="Email">
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <label for="userPicture">Add your photo</label>
                <input name="userPicture" type="file" id="userPicture">
            </div>
        </div>

        <div class="col-lg-10 col-lg-offset-2">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img class="img-responsive" src="http://lorempixel.com/275/150/people/?x=<?= mt_rand(1, 9999999) ?>" alt="...">
                        <div class="caption">
                            <p><a href="#" class="btn btn-primary btn-xs" role="button">Delete</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </fieldset>
</form>
@endsection <!-- Lecture 5 -->

