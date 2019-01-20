@extends('welcome')

@section('_content')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                @foreach ($rooms as $room)
                <div class="col-md-4 ftco-animate">
                    <div class="room-wrap">
                        <div class="text p-4">
                            <div class="d-flex mb-1">
                                <div class="one-third">
                                    <h3><a href="#">{{$room->name}}</a></h3>
                                </div>
                                <div class="one-forth text-center">
                                    <p class="price">{{$room->price}}€ <br><span>/night</span></p>
                                </div>
                            </div>
                            <p class="features">
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> {{$room->description}}</span>
                            </p>
                            <p class="features">
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i>Para {{$room->size}} personas</span>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
