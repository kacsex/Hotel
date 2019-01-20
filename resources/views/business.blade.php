@extends('welcome')

@section('_content')
    <section class="ftco-section room-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Our conference rooms</span>
                    <h2>Explore our rooms</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="carousel-room owl-carousel">
                        @foreach ($rooms as $room)
                            <div class="item">
                                <div class="room-wrap">
                                    <a href="#" class="room-img"
                                       style="background-image: url({!! asset($room->image_source) !!});"></a>
                                    <div class="text p-4">
                                        <div class="d-flex mb-1">
                                            <div class="one-third">
                                                <p class="star-rate"><span class="icon-star"></span><span
                                                            class="icon-star"></span><span class="icon-star"></span><span
                                                            class="icon-star"></span><span
                                                            class="icon-star-half-full"></span></p>
                                                <h3><a href="#">{{$room->name}}</a></h3>
                                            </div>
                                            <div class="one-forth text-center">
                                                <p class="price">{{$room->price}}€ <br><span>/day</span></p>
                                            </div>
                                        </div>
                                        <p class="features">
                                            <span class="d-block mb-2"><i class="icon-check mr-2"></i> {{$room->description}}</span>
                                            <span class="d-block mb-2"><i class="icon-check mr-2"></i>For {{$room->size}} persons</span>
                                        </p>
                                        <p><a href="#" class="btn btn-primary">Reserve a room</a></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
