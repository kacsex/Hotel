@extends('voyager::master')
<?php $page = TCG\Voyager\Models\User::first();
$user = Auth::user();
$bookings = DB::table('bookings')->leftJoin('meals', 'bookings.id_meal', '=', 'meals.id')->leftJoin('rooms', 'bookings.id_room', '=', 'rooms.id')->where('id_user', $user->id)->get();

?>

@if(Gate::check('browse', $page))
@section('content')
    <div class="page-content">
        @include('voyager::alerts')
        @include('voyager::dimmers')
    </div>
@stop

@else

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            My bookings
        </h1>
    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Reference number</th>
                                    <th>Number of room</th>
                                    <th>Floor</th>
                                    <th>Meal type</th>
                                    <th>Check in</th>
                                    <th>Check out</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($bookings as $booking): ?>
                                    <tr>
                                    <td> <?php echo $booking->id; ?> </td>
                                        <td> <?php echo $booking->id_room; ?> </td>
                                        <td> <?php echo $booking->floor; ?> </td>

                                        <td> <?php echo $booking->name; ?> </td>
                                        <td> <?php echo $booking->date_from; ?> </td>
                                        <td> <?php echo $booking->date_to; ?> </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ voyager_asset('lib/css/responsive.dataTables.min.css') }}">
@stop

@section('javascript')
    <script src="{{ voyager_asset('lib/js/dataTables.responsive.min.js') }}"></script>
@stop

@endif

