<nav class="row navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ url('images/logo.png') }}" alt="" />
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto mr-3">
            <li class="nav-item mx-md-2">
                <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item mx-md-2">
                <a class="nav-link" href="{{ url('/') }}">Travel Package</a>
            </li>
            <li class="nav-item mx-md-2">
                <a class="nav-link" href="{{ url('/') }}">Testimonial</a>
            </li>
        </ul>

        <!-- Mobile button -->
        <a class="form-inline d-sm-block d-md-none" href="{{ url('/login') }}">
            <button class="btn btn-login my-2 my-sm-0">
                Book Now
            </button>
        </a>
        <!-- Desktop Button -->
        <a class="form-inline my-2 my-lg-0 d-none d-md-block" href="{{ url('/login') }}">
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
              Book Now
            </button>
        </a>
    </div>
</nav>