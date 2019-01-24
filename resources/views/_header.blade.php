<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ URL::to('home') }}">Hotel JutaVit</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('home*') ? 'active' : '' }}{{ request()->is('login*') ? 'active' : '' }} {{ request()->is('register*') ? 'active' : '' }}"><a href="{{ URL::to('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item {{ request()->is('rooms*') ? 'active' : '' }}{{ request()->is('login*') ? 'active' : '' }} {{ request()->is('register*') ? 'active' : '' }}"><a href="{{ URL::to('rooms') }}" class="nav-link">Rooms</a></li>
                <li class="nav-item {{ request()->is('dining*') ? 'active' : '' }}{{ request()->is('login*') ? 'active' : '' }} {{ request()->is('register*') ? 'active' : '' }}"><a href="{{ URL::to('dining') }}" class="nav-link">Dining &amp; Bar</a></li>
                <li class="nav-item {{ request()->is('amenities*') ? 'active' : '' }} {{ request()->is('login*') ? 'active' : '' }} {{ request()->is('register*') ? 'active' : '' }}"><a href="{{ URL::to('amenities') }}" class="nav-link">Amenities</a></li>
                <li class="nav-item {{ request()->is('contact*') ? 'active' : '' }} {{ request()->is('login*') ? 'active' : '' }} {{ request()->is('register*') ? 'active' : '' }}"><a href="{{ URL::to('contact') }}" class="nav-link">Contact</a></li>
                @if(!Auth::Check())
                <li class="nav-item {{ request()->is('login*') ? 'active' : '' }} {{ request()->is('register*') ? 'active' : '' }}"><a href="/login" class="nav-link">Login</a></li>
                @else
                    <li class="nav-item active"><a href="/logout" class="nav-link">Logout</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
