<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url({!! asset('theme/images/bg_1.jpg') !!});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-end">
                <div class="col-md-10 col-sm-12 ftco-animate mb-4">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ URL::to('home') }}">Home</a></span> <span>{{ $breadcrumb }}</span></p>
                    <h1 class="mb-3">{{ $title }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>