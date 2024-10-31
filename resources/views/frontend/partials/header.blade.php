 <!-- Spinner Start -->
 <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>{{$explore->address}}</small>
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>{{$explore->phone}}</small>
                <small class="text-light"><i class="fa fa-envelope-open me-2"></i>{{$explore->email}}</small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{$explore->twit}}"><i class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{$explore->facebook}}"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{$explore->linkedin}}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{$explore->instagram}}"><i class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="{{$explore->youtube}}"><i class="fab fa-youtube fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{route('raju')}}" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>{{$explore->name}}</h1>
             {{-- <img src="img/explore.png" alt="Logo"> --}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('raju')}}" class="nav-item nav-link active">Home</a>
                <a href="{{route('about-us')}}" class="nav-item nav-link">About</a>
                <a href="{{route('service-us')}}" class="nav-item nav-link">Services</a>
                <a href="{{route('pakage_detail')}}" class="nav-item nav-link">Packages</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="/destination" class="dropdown-item">Destination</a>
                        <a href="/booking" class="dropdown-item">Booking</a>
                        <a href="/team_list" class="dropdown-item">Travel Guides</a>
                        <a href="/testimonial" class="dropdown-item">Testimonial</a>
                        <a href="/error" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="{{route('contact-us')}}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
        </div>
    </nav>


</div>
<!-- Navbar & Hero End -->
