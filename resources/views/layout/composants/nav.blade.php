<!-- Page Preloder -->

<div id="preloder">
    <div class="loader">
        <img src="{{asset('theme/img/logo.png')}}" alt="">
        <h2>Loading.....</h2>
    </div>
</div>


<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img src="{{asset('theme/img/logo.png')}}" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="active"><a href="{{route('welcome')}}">Home</a></li>
            <li><a href="{{route('service')}}">Services</a></li>
            <li><a href="{{route('blog')}}">Blog</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
            
        </ul>
    </nav>
</header>
<!-- Header section end -->
