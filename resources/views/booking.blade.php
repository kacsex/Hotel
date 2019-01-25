@extends('welcome')

@section('_content')
    <section class="ftco-section">
        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Reference number</th>
                    <th scope="col">Floor</th>
                    <th scope="col">Room</th>
                    <th scope="col">Date From</th>
                    <th scope="col">Date Until</th>
                    <th scope="col">Meal</th>
                </tr>
                </thead>
                @if(!empty($bookings))
                <tbody>
                @foreach ($bookings as $room)
                <tr>
                    <th scope="col">{{$room->id}}</th>
                    <th scope="col">{{$room->room->floor}}</th>
                    <th scope="col">{{$room->room->number}}</th>
                    <th scope="col">{{$room->date_from}}</th>
                    <th scope="col">{{$room->date_to}}</th>
                    <th scope="col">{{$room->meal->name}}</th>
                </tr>
                @endforeach()
                </tbody>
                @endif()
            </table>
        </div>
    </section>
@endsection
