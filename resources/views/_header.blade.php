<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ URL::to('home') }}">Cozy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ URL::to('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ URL::to('about') }}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{ URL::to('rooms') }}" class="nav-link">Rooms</a></li>
                <li class="nav-item"><a href="{{ URL::to('dining') }}" class="nav-link">Dining &amp; Bar</a></li>
                <li class="nav-item"><a href="{{ URL::to('amenities') }}" class="nav-link">Amenities</a></li>
                <li class="nav-item"><a href="{{ URL::to('booking') }}" class="nav-link">Booking</a></li>
                <li class="nav-item"><a href="{{ URL::to('contact') }}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>