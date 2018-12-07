@extends('welcome')

@section('_content')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="amenities d-md-flex ftco-animate">
                    <div class="one-half order-first img" style="background-image: url({!! asset('theme/images/amenities-1.jpg') !!});"></div>
                    <div class="one-half order-last text">
                        <h2>Business Center</h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                            decided to leave for the far World of Grammar.</p>
                    </div>
                </div>
                <div class="amenities d-md-flex ftco-animate">
                    <div class="one-half order-last img" style="background-image: url({!! asset('theme/images/amenities-2.jpg') !!});"></div>
                    <div class="one-half order-first text">
                        <h2>Cozy Restaurant</h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                            decided to leave for the far World of Grammar.</p>
                    </div>
                </div>
                <div class="amenities d-md-flex ftco-animate">
                    <div class="one-half order-first img" style="background-image: url({!! asset('theme/images/amenities-3.jpg') !!});"></div>
                    <div class="one-half order-last text">
                        <h2>Meeting &amp; Conferences</h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                            decided to leave for the far World of Grammar.</p>
                    </div>
                </div>
                <div class="amenities d-md-flex ftco-animate">
                    <div class="one-half order-last img" style="background-image: url({!! asset('theme/images/amenities-4.jpg') !!});"></div>
                    <div class="one-half order-first text">
                        <h2>Airport Shuttle &amp; Parking Lot</h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                            decided to leave for the far World of Grammar.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection