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
                                    <input type="text" name="checkin_date" id="checkin_date" class="form-control"
                                           placeholder="YYYY/M/D">
                                </div>

                                <div class="book-date one-third">
                                    <label for="check-out">Check out:</label>
                                    <input type="text" name="checkout_date" id="checkout_date" class="form-control"
                                           placeholder="YYYY/M/D">
                                </div>

                                <div class="one-third">
                                    <label for="Guest">Number of guests:</label>
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="gente" id="gente" class="form-control">
                                            <option value=1>1</option>
                                            <option value=2>2</option>
                                            <option value=3>3</option>
                                            <option value=4>4+</option>
                                            <option value=5>Conference rooms</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="one-third">
                                    <label for="Guest">Meal type:</label>
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="meal" id="meal" class="form-control">
                                            @foreach ($meals as $meal)
                                                <option value={{$meal->id}}>{{$meal->name}}</option>
                                            @endforeach
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
        <section class="ftco-section room-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ftco-animate">
                        <div class="carousel-room owl-carousel">
                            @foreach ($rooms as $room)
                            <form action="{!! route('book.post', ['id'=>$room->id, 'meal'=>$mealS,'dateF'=>$dateF,'dateT'=>$dateT]) !!}" method="POST">
                                @csrf
                                <div class="item">
                                    <div class="room-wrap">
                                        <a href="#" class="room-img"
                                           style="background-image: url({!! asset($room->category->image_source) !!});"></a>
                                        <div class="text p-4">
                                            <div class="d-flex mb-1">
                                                <div class="one-third">
                                                    <p class="star-rate"><span class="icon-star"></span><span
                                                                class="icon-star"></span><span class="icon-star"></span><span
                                                                class="icon-star"></span><span
                                                                class="icon-star-half-full"></span></p>
                                                    <h3><a href="#">{{$room->category->name}}</a></h3>
                                                </div>
                                                <div class="one-forth text-center">
                                                    <p class="price">{{$room->category->price}}€ <br><span>/night</span></p>
                                                </div>
                                            </div>
                                            <p class="features">
                                                <span class="d-block mb-2"><i
                                                            class="icon-check mr-2"></i>Floor: {{$room->floor}}</span>
                                                <span class="d-block mb-2"><i
                                                            class="icon-check mr-2"></i>Number: {{$room->number}}</span>
                                            </p>
                                            <p><input type="submit" class="search-submit btn btn-primary" value="Book"></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <section class="services bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4 ftco-animate py-5 nav-link-wrap aside-stretch">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link px-4 active" id="v-pills-master-tab" data-toggle="pill"
                           href="#v-pills-master" role="tab" aria-controls="v-pills-master" aria-selected="true"><span
                                    class="mr-3 flaticon-bed"></span> Master Bedrooms</a>

                        <a class="nav-link px-4" id="v-pills-buffet-tab" data-toggle="pill" href="#v-pills-buffet"
                           role="tab" aria-controls="v-pills-buffet" aria-selected="false"><span
                                    class="mr-3 flaticon-tray"></span> Breakfast Buffet</a>

                        <a class="nav-link px-4" id="v-pills-fitness-tab" data-toggle="pill" href="#v-pills-fitness"
                           role="tab" aria-controls="v-pills-fitness" aria-selected="false"><span
                                    class="mr-3 flaticon-woman"></span> Fitness Center</a>

                        <a class="nav-link px-4" id="v-pills-reception-tab" data-toggle="pill" href="#v-pills-reception"
                           role="tab" aria-controls="v-pills-reception" aria-selected="false"><span
                                    class="mr-3 flaticon-receptionist"></span> 24 Hour Reception</a>

                        <a class="nav-link px-4" id="v-pills-sea-tab" data-toggle="pill" href="#v-pills-sea" role="tab"
                           aria-controls="v-pills-sea" aria-selected="false"><span
                                    class="mr-3 flaticon-deck-chair"></span> Sea View Balcony</a>

                        <a class="nav-link px-4" id="v-pills-spa-tab" data-toggle="pill" href="#v-pills-spa" role="tab"
                           aria-controls="v-pills-spa" aria-selected="false"><span class="mr-3 flaticon-spa"></span>
                            Pool &amp; Spa</a>

                        <a class="nav-link px-4" id="v-pills-wifi-tab" data-toggle="pill" href="#v-pills-wifi"
                           role="tab" aria-controls="v-pills-wifi" aria-selected="false"><span
                                    class="mr-3 flaticon-wifi-router"></span> Free wifi</a>
                    </div>
                </div>
                <div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center">

                    <div class="tab-content pl-md-5" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-master" role="tabpanel"
                             aria-labelledby="v-pills-master-tab">
                            <span class="icon mb-3 d-block flaticon-bed"></span>
                            <h2 class="mb-4">Deluxe Rooms</h2>
                            <p class="lead">With such thoughtful touches as soft lighting and plush brocade furniture,
                                our Deluxe Rooms marry beauty with spaciousness and expansive city views.</p>
                        </div>

                        <div class="tab-pane fade" id="v-pills-buffet" role="tabpanel"
                             aria-labelledby="v-pills-buffet-tab">
                            <span class="icon mb-3 d-block flaticon-tray"></span>
                            <h2 class="mb-4">A taste of the World</h2>
                            <p class="lead">From innovative takes on Arabic dishes to the freshest seafood, authentic
                                Italian classics to pan-Asian flavours, our 10 restaurants and lounges serve up
                                something for everyone.</p>
                        </div>

                        <div class="tab-pane fade" id="v-pills-fitness" role="tabpanel"
                             aria-labelledby="v-pills-fitness-tab">
                            <span class="icon mb-3 d-block flaticon-woman"></span>
                            <h2 class="mb-4">Fitness Center</h2>
                            <p class="lead">Stay on track with your fitness goals even when you’re far from home. Our
                                full-service Fitness Centre is open 24 hours a day, seven days a week, meaning you can
                                get in a workout whenever it is convenient for you, then unwind in our sauna or steam
                                room.</p>
                        </div>

                        <div class="tab-pane fade" id="v-pills-reception" role="tabpanel"
                             aria-labelledby="v-pills-reception-tab">
                            <span class="icon mb-3 d-block flaticon-receptionist"></span>
                            <h2 class="mb-4">24 Hours Reception</h2>
                            <p class="lead">We operate a 24 hour reception; therefore you will not need to worry about
                                late check-in. </p>
                        </div>

                        <div class="tab-pane fade" id="v-pills-sea" role="tabpanel" aria-labelledby="v-pills-sea-tab">
                            <span class="icon mb-3 d-block flaticon-deck-chair"></span>
                            <h2 class="mb-4">Sea view balcony</h2>
                            <p class="lead">Aside from a lovely view of the sea, these rooms have a balcony from which
                                to enjoy it even more.</p>
                        </div>

                        <div class="tab-pane fade" id="v-pills-spa" role="tabpanel" aria-labelledby="v-pills-spa-tab">
                            <span class="icon mb-3 d-block flaticon-spa"></span>
                            <h2 class="mb-4">Pool &amp; Spa</h2>
                            <p class="lead">Our global spa concept was created to address a new generation of travel and
                                healthier lifestyle needs. Find balance, recharge and energize at eforea spa. This
                                transformational spa concept is the first of its kind.</p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-wifi" role="tabpanel" aria-labelledby="v-pills-wifi-tab">
                            <span class="icon mb-3 d-block flaticon-wifi-router"></span>
                            <h2 class="mb-4">Free wifi coverage</h2>
                            <p class="lead"> Our free WiFi internet service is available 24-hours in lobby, meeting
                                room, facilities and guest rooms.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

