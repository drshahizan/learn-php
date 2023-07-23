@extends('layouts.master')

@section('content')
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo">
                <h1><a href="{{ route('homepage') }}">Be Boundless</a></h1>
            </div>            
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#featured">Cultures</a></li>
                    <li><a class="nav-link scrollto" href="#testimonials">Reviews</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Festival and Celebrations</a></li>
                    <li>
                        <a class="nav-link scrollto" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->
  
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <h1>Dive Into Malaysian Culture</h1>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section>
    <!-- End Hero -->
  
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row content">
                    <div class="col-lg-6">
                        <h2>Highlights of Malaysian Culture</h2>
                        <h3>A Journey Through Malaysian Culture: Where Diversity Thrives</h3>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Malaysian culture is rich, diverse, and influenced by various ethnic groups, including Malays, Chinese, Indians, and indigenous tribes. 
                            The country's multicultural heritage has shaped its traditions, customs, festivals, cuisine, and arts. Here is an introduction to some key aspects of Malaysian culture:
                        </p>
                        <ul>
                            <li>
                                <i class="ri-check-double-line"></i> 
                                Cultural Diversity: Malaysia is known for its multicultural society, where people from different ethnic backgrounds live harmoniously. 
                                This diversity is evident in the various languages spoken, religious practices, and cultural traditions observed throughout the country.
                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> 
                                Festivals: Malaysians celebrate a multitude of festivals throughout the year. Some prominent ones include Hari Raya Aidilfitri (celebrated by Muslims at the end of Ramadan), 
                                Chinese New Year (celebrated by the Chinese community), Deepavali (celebrated by Hindus), and Christmas (celebrated by Christians). 
                            </li>
                        </ul>
                        <p class="fst-italic">
                            These are just a few highlights of Malaysian culture. Exploring further will reveal even more aspects, reflecting the unique blend of customs, traditions, and practices that make Malaysia a fascinating and culturally vibrant nation.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->
  
        <!-- ======= Featured Section ======= -->
        <section id="featured" class="featured">
            <div class="container">
                <div class="slider-container">
                    <div class="text-center">
                        <div class="swiper-container" style="max-width: 100%;">
                            <div class="swiper-wrapper">
                                @php
                                $slidesPerPage = 1;
                                $culturesArray = $cultures->toArray();
                                $totalSlides = count($culturesArray);
                                $totalRows = ceil($totalSlides / $slidesPerPage);
                                $rowCounter = 0;
                                @endphp
                                @for ($page = 0; $page < $totalRows; $page++)
                                <div class="swiper-slide">
                                    <div class="row">
                                        @foreach(array_slice($culturesArray, $page * $slidesPerPage, $slidesPerPage) as $culture)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="card mx-auto" style="width: 18rem;">
                                                <img src="{{ asset('storage/cultures/'.$culture['image']) }}" class="card-img-top custom-card-img" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title text-center"><a href="">{{ $culture['title'] }}</a></h5>
                                                    <p class="card-text text-center" style="text-align: justify;">
                                                        {!! $culture['description'] !!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endfor
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                            <!-- Add Navigation -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>                    
        <!-- End Featured Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container position-relative">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                @foreach($reviews as $review)
                <div class="swiper-slide">
                    <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>{{ $review->user->name }}</h3> <!-- assuming user relationship exists in UserReview model -->
                    <h4>Reviewer</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        {!! $review->review !!}
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    </div>
                </div><!-- End testimonial item -->
                @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>

            </div>
        </section>
        <!-- End Testimonials Section -->
  
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="section-title">
                    <h2>Festival & Celebrations</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-chinese">Chinese</li>
                            <li data-filter=".filter-malay">Malay</li>
                            <li data-filter=".filter-indian">Indian</li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container">
                    @foreach($festivals as $festival)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $festival->category }}">
                        <img src="{{ asset('storage/festivals/' . $festival->image) }}" class="card-img-top" alt="{{ $festival->title }}">
                        <div class="portfolio-info">
                            <h4>{{ $festival->title }}</h4>
                            <a href="{{ asset('storage/festivals/' . $festival->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $festival->title }}"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->
    </main>
    <!-- End #main -->
  
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row footer-newsletter justify-content-center">
                    <div class="col-lg-6">
                    <form action="" method="post">
                        <input type="email" name="email" placeholder="Enter your Email"><input type="submit" value="Subscribe">
                    </form>
                    </div>
                </div>
                <div class="social-links">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="container footer-bottom clearfix">
        </div>
    </footer>
    <!-- End Footer -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    </body>
@endsection
