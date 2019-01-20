@extends('welcome')

@section('_content')
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url({!! asset('theme/images/bg_1.jpg') !!});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center justify-content-start">
                    <div class="col-md-6 col-sm-12 ftco-animate">
                        <h1 class="mb-4">Welcome to Cozy the paradize near the blue sea</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url({!! asset('theme/images/bg_2.jpg') !!});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center justify-content-start">
                    <div class="col-md-6 col-sm-12 ftco-animate">
                        <h1 class="mb-4">Book the perfect accomodations without breaking the bank</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url({!! asset('theme/images/bg_3.jpg') !!});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center justify-content-start">
                    <div class="col-md-6 col-sm-12 ftco-animate">
                        <h1 class="mb-4">Lets go to discovering</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="ftco-section-reservation">
        <div class="container">
            <div class="row justify-content-end ftco-animate">
                <div class="col-lg-4 col-md-5 reservation p-md-5">
                    <div class="block-17">
                        <form action="{{ action('HomeController@roomsSearch') }}" method="get" class="d-block">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="fields d-block">

                                <div class="book-date one-third">
                                    <label for="check-in">Check in:</label>
                                    <input type="text" name="checkin_date" id="checkin_date" class="form-control" placeholder="YYYY/M/D">
                                </div>

                                <div class="book-date one-third">
                                    <label for="check-out">Check out:</label>
                                    <input type="text" name="checkout_date" id="checkout_date" class="form-control" placeholder="YYYY/M/D">
                                </div>

                                <div class="one-third">
                                    <label for="Guest">Guest:</label>
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="gente" id="gente" class="form-control">
                                            <option value=1>1</option>
                                            <option value=2>2</option>
                                            <option value=3>3</option>
                                            <option value=4>4+</option>
                                            <option value=5>Sala de conferencias</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="search-submit btn btn-primary" value="Check Availability">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@if(!empty($rooms))
<section class="ftco-section room-section bg-light">
    <div class="container">
        <div class="row">
            @foreach ($rooms as $room)
            <div class="col-md-4 ftco-animate">
                <div class="room-wrap">
                    <div class="text p-4">
                        <div class="d-flex mb-1">
                            <div class="one-third">
                                <h3><a href="#">{{$room->category->name}}</a></h3>
                            </div>
                            <div class="one-forth text-center">
                                <p class="price">{{$room->category->price}}€ <br><span>/night</span></p>
                            </div>
                        </div>
                        <p class="features">
                            <span class="d-block mb-2"><i class="icon-check mr-2"></i>Planta: {{$room->floor}}</span>
                        </p>
                        <p class="features">
                            <span class="d-block mb-2"><i class="icon-check mr-2"></i>Numero: {{$room->number}}</span>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection

