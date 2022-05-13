@extends('template.main')
@section('content')
    <!-- ======= hero Section ======= -->
    <section id="hero">
        <div class="hero-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"
                    style="background-image: url({{ url('/uploads/hero-carousel/IMG_20210622_231835.jpg') }});">
                </div>
                <div class="swiper-slide" style="background-image: url({{ url('/uploads/hero-carousel/3.jpg') }});">
                </div>
                <div class="swiper-slide" style="background-image: url({{ url('/uploads/hero-carousel/4.jpg') }});">
                </div>
                <div class="swiper-slide" style="background-image: url({{ url('/uploads/hero-carousel/5.jpg') }});">
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 about-img">
                        <img src="{{ url('/uploads/lembaga.jpg') }}" alt="">
                    </div>

                    <div class="col-lg-6 content">
                        <h2>Profil Lembaga Pendidikan Islam Arroqy</h2>
                        <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                            id est laborum.</h3>

                        <ul>
                            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </li>
                            <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate
                                velit.</li>
                            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu
                                fugiat nulla pariatur.</li>
                        </ul>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Galeri</h2>
                    <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam
                        enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum
                        velit export irure minim illum fore</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Semua</li>
                            <li data-filter=".PAUD">PAUD</li>
                            <li data-filter=".MADIN">MADIN</li>
                            <li data-filter=".Alumni">Alumni</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($galeri as $item)
                        <div class="col-lg-4 col-md-6 portfolio-item {{ $item->title }}">
                            <img src="{{ url('/uploads/galeri') . '/' . $item->image }}" class="img-fluid"
                                alt="lpi-arroqy">
                            <div class="portfolio-info">
                                <h4>{{ $item->title }}</h4>
                                <p>{{ $item->excerp }}</p>
                                <a href="{{ url('/uploads/galeri') . '/' . $item->image }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Berita Terkini</h2>
                    <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam
                        enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum
                        velit export irure minim illum fore</p>
                </div>

                <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <img src="{{ url('/uploads/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <img src="{{ url('/uploads/quote-sign-right.png') }}" class="quote-sign-right"
                                        alt="">
                                </p>
                                <img src="{{ url('/uploads/testimonial-1.jpg') }}" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <img src="{{ url('/uploads/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <img src="{{ url('/uploads/quote-sign-right.png') }}" class="quote-sign-right"
                                        alt="">
                                </p>
                                <img src="{{ url('/uploads/testimonial-2.jpg') }}" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <img src="{{ url('/uploads/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                    duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <img src="{{ url('/uploads/quote-sign-right.png') }}" class="quote-sign-right"
                                        alt="">
                                </p>
                                <img src="{{ url('/uploads/testimonial-3.jpg') }}" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <img src="{{ url('/uploads/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                    minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                    labore illum veniam.
                                    <img src="{{ url('/uploads/quote-sign-right.png') }}" class="quote-sign-right"
                                        alt="">
                                </p>
                                <img src="{{ url('/uploads/testimonial-4.jpg') }}" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <img src="{{ url('/uploads/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <img src="{{ url('/uploads/quote-sign-right.png') }}" class="quote-sign-right"
                                        alt="">
                                </p>
                                <img src="{{ url('/uploads/testimonial-5.jpg') }}" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action">
            <div class="container" data-aos="zoom-out">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3 class="cta-title">IKLAN LEWAT</h3>
                        <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        {{-- <a class="cta-btn align-middle" href="#">Call To Action</a> --}}
                    </div>
                </div>
            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Kontak Admin</h2>
                    <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam
                        enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum
                        velit export irure minim illum fore</p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Alamat</h3>
                            <a href="https://goo.gl/maps/Q2fMx6CwxGSi32Yh6">
                                <address>ARROQY, Gadu Barat, Ganding, Sumenep, Jawa Timur 69462</address>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="bi bi-phone"></i>
                            <h3>Nomor Telepon</h3>
                            <p><a href="tel:+62 1234 567 89">+62 1234 567 89</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:lpi-arroqy@gmail.ac.id">lpi-arroqy@gmail.ac.id</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
@push('after-script')
@endpush
