@extends('welcome')

@section('_content')
    <section class="ftco-section room-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Our Rooms</span>
                    <h2>Explore our rooms</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="room-wrap">
                        <a href="#" class="room-img" style="background-image: url({!! asset('theme/images/room-1.jpg') !!});"></a>
                        <div class="text p-4">
                            <div class="d-flex mb-1">
                                <div class="one-third">
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                    <h3><a href="#">Luxury Room</a></h3>
                                </div>
                                <div class="one-forth text-center">
                                    <p class="price">$99 <br><span>/night</span></p>
                                </div>
                            </div>
                            <p class="features">
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                            </p>
                            <p><a href="#" class="btn btn-primary">Reserve a room</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="room-wrap">
                        <a href="#" class="room-img" style="background-image: url({!! asset('theme/images/room-2.jpg') !!});"></a>
                        <div class="text p-4">
                            <div class="d-flex mb-1">
                                <div class="one-third">
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                    <h3><a href="#">Family Room</a></h3>
                                </div>
                                <div class="one-forth text-center">
                                    <p class="price">$99 <br><span>/night</span></p>
                                </div>
                            </div>
                            <p class="features">
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                            </p>
                            <p><a href="#" class="btn btn-primary">Reserve a room</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="room-wrap">
                        <a href="#" class="room-img" style="background-image: url({!! asset('theme/images/room-3.jpg') !!});"></a>
                        <div class="text p-4">
                            <div class="d-flex mb-1">
                                <div class="one-third">
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                    <h3><a href="#">Deluxe Room</a></h3>
                                </div>
                                <div class="one-forth text-center">
                                    <p class="price">$99 <br><span>/night</span></p>
                                </div>
                            </div>
                            <p class="features">
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                            </p>
                            <p><a href="#" class="btn btn-primary">Reserve a room</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section room-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Our conference rooms</span>
                    <h2>Explore our conference rooms</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="room-wrap">
                        <a href="#" class="room-img" style="background-image: url({!! asset('theme/images/amenities-3.jpg') !!});"></a>
                        <div class="text p-4">
                            <div class="d-flex mb-1">
                                <div class="one-third">
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                    <h3><a href="#">Small conference room</a></h3>
                                </div>
                                <div class="one-forth text-center">
                                    <p class="price">$99 <br><span>/day</span></p>
                                </div>
                            </div>
                            <p class="features">
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                            </p>
                            <p><a href="#" class="btn btn-primary">Reserve a room</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="room-wrap">
                        <a href="#" class="room-img" style="background-image: url({!! asset('theme/images/room-2.jpg') !!});"></a>
                        <div class="text p-4">
                            <div class="d-flex mb-1">
                                <div class="one-third">
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                    <h3><a href="#">Family Room</a></h3>
                                </div>
                                <div class="one-forth text-center">
                                    <p class="price">$99 <br><span>/night</span></p>
                                </div>
                            </div>
                            <p class="features">
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                            </p>
                            <p><a href="#" class="btn btn-primary">Reserve a room</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="room-wrap">
                        <a href="#" class="room-img" style="background-image: url({!! asset('theme/images/room-3.jpg') !!});"></a>
                        <div class="text p-4">
                            <div class="d-flex mb-1">
                                <div class="one-third">
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                    <h3><a href="#">Deluxe Room</a></h3>
                                </div>
                                <div class="one-forth text-center">
                                    <p class="price">$99 <br><span>/night</span></p>
                                </div>
                            </div>
                            <p class="features">
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                            </p>
                            <p><a href="#" class="btn btn-primary">Reserve a room</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection