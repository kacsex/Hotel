@extends('welcome')

@section('_content')
    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 ftco-animate makereservation p-5 bg-light">
                    <form action="#">
                        <h2 class="mb-4">Contact Details</h2>
                        <div class="row mb-5">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">First Name</label>
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Select Country</label>
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select class="countrypicker form-control" data-live-search="true"
                                                data-default="Country of Passport" data-flag="false"></select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="number" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <h2 class="mb-4">Booking details</h2>
                            </div>
                            <div class="col-md-12">
                                <h3 class="h4">Superior Room - Twin - Best available</h3>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="check-in">Check in:</label>
                                    <input type="text" id="checkin_date" class="form-control" placeholder="MM/DD/YYYY">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="check-out">Check out:</label>
                                    <input type="text" id="checkout_date" class="form-control" placeholder="MM/DD/YYYY">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Number of guests</label>
                                    <input type="text" class="form-control" placeholder="2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Select room</label>
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select class="countrypicker form-control" data-live-search="true"
                                                data-default="Country of Passport" data-flag="false"></select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Select meal</label>
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select class="countrypicker form-control" data-live-search="true"
                                                data-default="Country of Passport" data-flag="false"></select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""></label>
                                    <input style="margin-top: 40px; float: right" type="submit" class="search-submit btn btn-primary" value="Book">
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection