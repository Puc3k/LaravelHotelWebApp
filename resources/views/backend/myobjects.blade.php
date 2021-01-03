<!--
|--------------------------------------------------------------------------
| resources/views/backend/myobjects.blade.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
-->
@extends('layouts.backend') <!-- Lecture 5 -->

@section('content') <!-- Lecture 5 -->
<h2>List of objects</h2>
<?php for ($i = 1; $i <= 3; $i++): ?>

    <div class="panel panel-success top-buffer">
        <div class="panel-heading">
            <h3 class="panel-title">X object <small><a href="{{ route('saveObject') }}" class="btn btn-danger btn-xs">edit</a> <a href="{{ route('saveRoom') }}" class="btn btn-danger btn-xs">add a room</a> <a title="delete" href=""><span class="glyphicon glyphicon-remove"></span></a></small> </h3>
        </div>

        <div class="panel-body">
            <?php for ($j = 1; $j <= 4; $j++): ?>
                <span class="my_objects">
                    Room 1 <a title="edit" href="{{ route('saveRoom') }}"><span class="glyphicon glyphicon-edit"></span></a> <a title="delete" href=""><span class="glyphicon glyphicon-remove"></span></a> </span>
            <?php endfor; ?>
        </div>

    </div>

<?php endfor; ?>
@endsection <!-- Lecture 5 -->
