  @extends('layouts.app')

  @include('layouts.slider')

  @section('content')

      <!-- ======= Icon Boxes Section ======= -->
      <section id="icon-boxes" class="icon-boxes">
          <div class="container">

              <div class="row">

                  @foreach ($articles as $scope)

                      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                          <a href="{{ route('front.show', $scope->slug) }}">
                              <div class="icon-box">
                                  <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                  <h4 class="title"><a
                                          href="{{ route('front.show', $scope->slug) }}">{{ $scope->name }}</a>
                                  </h4>
                                  <p class="description">{{ $scope->details }}</p>
                              </div>
                          </a>

                      </div>

                  @endforeach


              </div>

          </div>
      </section><!-- End Icon Boxes Section -->

      <!-- ======= About Us Section ======= -->
      <section id="about" class="about">
          <div class="container" data-aos="fade-up">

              <div class="section-title">
                  <h2>About Us</h2>
                  <p>Vision Lumbini for All and Forever and for All Vision Lumbini: For Vision Lumbini, to focus on the
                      direction of all, think of me as ours.</p>
              </div>

              <div class="row content">
                  <div class="col-lg-6">
                      <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                          labore et dolore
                          magna aliqua.
                      </p>
                      <ul>
                          <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                              consequat</li>
                          <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate
                              velit</li>
                          <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                              consequat</li>
                      </ul>
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0">
                      <p>
                          Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit in voluptate
                          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                          proident, sunt in
                          culpa qui officia deserunt mollit anim id est laborum.
                      </p>
                      <a href="#" class="btn-learn-more">Learn More</a>
                  </div>
              </div>

          </div>
      </section><!-- End About Us Section -->

      <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients">
          <div class="container" data-aos="zoom-in">

              <div class="clients-slider swiper-container">
                  <div class="swiper-wrapper align-items-center">
                      <div class="swiper-slide"><img src="assets/img/clients/logo.gif" class="img-fluid" alt=""></div>
                      <div class="swiper-slide"><img src="assets/img/clients/logo.gif" class="img-fluid" alt=""></div>
                      <div class="swiper-slide"><img src="assets/img/clients/logo.gif" class="img-fluid" alt=""></div>
                      <div class="swiper-slide"><img src="assets/img/clients/logo.gif" class="img-fluid" alt=""></div>
                      <div class="swiper-slide"><img src="assets/img/clients/logo.gif" class="img-fluid" alt=""></div>
                      <div class="swiper-slide"><img src="assets/img/clients/logo.gif" class="img-fluid" alt=""></div>
                      <div class="swiper-slide"><img src="assets/img/clients/logo.gif" class="img-fluid" alt=""></div>
                      <div class="swiper-slide"><img src="assets/img/clients/logo.gif" class="img-fluid" alt=""></div>
                  </div>
                  <div class="swiper-pagination"></div>
              </div>

          </div>
      </section><!-- End Clients Section -->

      <!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us">
          <div class="container-fluid">

              <div class="row">

                  <div class="col-lg-5 align-items-stretch position-relative video-box"
                      style='background-image: url("assets/img/visionlumbini.jpg");' data-aos="fade-right">
                      <a href="https://www.youtube.com/watch?v=L-iKRLU1LWw" class="venobox play-btn mb-4"
                          data-vbtype="video" data-autoplay="true"></a>
                  </div>

                  <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">

                      <div class="content">
                          <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
                          <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                          </p>
                      </div>

                      <div class="accordion-list">
                          <ul>
                              <li data-aos="fade-up" data-aos-delay="100">
                                  <a data-bs-toggle="collapse" class="collapse"
                                      data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at
                                      lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i
                                          class="bx bx-chevron-up icon-close"></i></a>
                                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                      <p>
                                          Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                          laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                                          rhoncus dolor purus non.
                                      </p>
                                  </div>
                              </li>

                              <li data-aos="fade-up" data-aos-delay="200">
                                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                      class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i
                                          class="bx bx-chevron-down icon-show"></i><i
                                          class="bx bx-chevron-up icon-close"></i></a>
                                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                      <p>
                                          Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                          interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                          scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper
                                          dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                      </p>
                                  </div>
                              </li>

                              <li data-aos="fade-up" data-aos-delay="300">
                                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                      class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i
                                          class="bx bx-chevron-down icon-show"></i><i
                                          class="bx bx-chevron-up icon-close"></i></a>
                                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                      <p>
                                          Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                          Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet
                                          nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis
                                          convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio
                                          morbi quis
                                      </p>
                                  </div>
                              </li>

                          </ul>
                      </div>

                  </div>

              </div>

          </div>
      </section><!-- End Why Us Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
          <div class="container" data-aos="fade-up">

              <div class="section-title">
                  <h2>Services</h2>
                  <p>Services provided by Vision Lumbini Limited</p>
              </div>

              <div class="row">
                  <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                      <div class="icon-box">
                          <i class="bi bi-card-checklist"></i>
                          <h4><a href="#">Lorem Ipsum</a></h4>
                          <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                              cupiditate non provident</p>
                      </div>
                  </div>
                  <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                      <div class="icon-box">
                          <i class="bi bi-bar-chart"></i>
                          <h4><a href="#">Dolor Sitema</a></h4>
                          <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                              consequat tarad limino ata</p>
                      </div>
                  </div>
                  <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="300">
                      <div class="icon-box">
                          <i class="bi bi-binoculars"></i>
                          <h4><a href="#">Sed ut perspiciatis</a></h4>
                          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                              nulla pariatur</p>
                      </div>
                  </div>
                  <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="400">
                      <div class="icon-box">
                          <i class="bi bi-brightness-high"></i>
                          <h4><a href="#">Nemo Enim</a></h4>
                          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                              anim id est laborum</p>
                      </div>
                  </div>
                  <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="500">
                      <div class="icon-box">
                          <i class="bi bi-calendar4-week"></i>
                          <h4><a href="#">Magni Dolore</a></h4>
                          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                              voluptatum deleniti atque</p>
                      </div>
                  </div>
                  <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="600">
                      <div class="icon-box">
                          <i class="bi bi-briefcase"></i>
                          <h4><a href="#">Eiusmod Tempor</a></h4>
                          <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
                              nobis est eligendi</p>
                      </div>
                  </div>
              </div>

          </div>
      </section><!-- End Services Section -->

      <!-- ======= Cta Section ======= -->
      <!-- <section id="cta" class="cta">
                                                                              <div class="container">

                                                                                <div class="row" data-aos="zoom-in">
                                                                                  <div class="col-lg-9 text-center text-lg-start">
                                                                                    <h3>Call To Action</h3>
                                                                                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                                                  </div>
                                                                                  <div class="col-lg-3 cta-btn-container text-center">
                                                                                    <a class="cta-btn align-middle" href="#">Call To Action</a>
                                                                                  </div>
                                                                                </div>

                                                                              </div>
                                                                           
                                                                                <!-- ======= Team Section ======= -->
      <section id="team" class="team section-bg">
          <div class="container" data-aos="fade-up">

              <div class="section-title">
                  <h2>Our Team</h2>
                  <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                      sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                      Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
              </div>

              <div class="row">

                  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                      <div class="member d-flex align-items-start">
                          <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                          <div class="member-info">
                              <h4>Team member 1</h4>
                              <span>Chief Executive Officer</span>
                              <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                              <div class="social">
                                  <a href=""><i class="ri-twitter-fill"></i></a>
                                  <a href=""><i class="ri-facebook-fill"></i></a>
                                  <a href=""><i class="ri-instagram-fill"></i></a>
                                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                      <div class="member d-flex align-items-start">
                          <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                          <div class="member-info">
                              <h4>Team member 2</h4>
                              <span>Product Manager</span>
                              <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                              <div class="social">
                                  <a href=""><i class="ri-twitter-fill"></i></a>
                                  <a href=""><i class="ri-facebook-fill"></i></a>
                                  <a href=""><i class="ri-instagram-fill"></i></a>
                                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="300">
                      <div class="member d-flex align-items-start">
                          <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                          <div class="member-info">
                              <h4>Team member 3</h4>
                              <span>CTO</span>
                              <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                              <div class="social">
                                  <a href=""><i class="ri-twitter-fill"></i></a>
                                  <a href=""><i class="ri-facebook-fill"></i></a>
                                  <a href=""><i class="ri-instagram-fill"></i></a>
                                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
                      <div class="member d-flex align-items-start">
                          <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                          <div class="member-info">
                              <h4>Team member 4</h4>
                              <span>Accountant</span>
                              <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                              <div class="social">
                                  <a href=""><i class="ri-twitter-fill"></i></a>
                                  <a href=""><i class="ri-facebook-fill"></i></a>
                                  <a href=""><i class="ri-instagram-fill"></i></a>
                                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>

          </div>
      </section><!-- End Team Section -->


      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="faq" class="faq section-bg">
          <div class="container" data-aos="fade-up">

              <div class="section-title">
                  <h2>Frequently Asked Questions</h2>
              </div>

              <div class="faq-list">
                  <ul>
                      <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                              data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i
                                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                          <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                              <p>
                                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet
                                  non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor
                                  purus non.
                              </p>
                          </div>
                      </li>

                      <li data-aos="fade-up" data-aos-delay="200">
                          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                              data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc?
                              <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                          <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                              <p>
                                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                  velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                                  donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                  cursus turpis massa tincidunt dui.
                              </p>
                          </div>
                      </li>

                      <li data-aos="fade-up" data-aos-delay="300">
                          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                              data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit?
                              <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                          <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                              <p>
                                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                  pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit.
                                  Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
                                  Urna molestie at elementum eu facilisis sed odio morbi quis
                              </p>
                          </div>
                      </li>

                      <li data-aos="fade-up" data-aos-delay="400">
                          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                              data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam
                              sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i
                                  class="bx bx-chevron-up icon-close"></i></a>
                          <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                              <p>
                                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in
                                  est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                                  adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                              </p>
                          </div>
                      </li>

                      <li data-aos="fade-up" data-aos-delay="500">
                          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                              data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius
                              vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i
                                  class="bx bx-chevron-up icon-close"></i></a>
                          <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                              <p>
                                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                  integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                                  eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                              </p>
                          </div>
                      </li>

                  </ul>
              </div>

          </div>
      </section><!-- End Frequently Asked Questions Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
          <div class="container" data-aos="fade-up">

              <div class="section-title">
                  <h2>Contact Us</h2>
              </div>

              <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

                  <div class="col-lg-5">
                      <div class="info">
                          <div class="address">
                              <i class="bi bi-geo-alt"></i>
                              <h4>Location:</h4>
                              <p>Butwal-6,Rupandehi</p>
                          </div>

                          <div class="email">
                              <i class="bi bi-envelope"></i>
                              <h4>Email:</h4>
                              <p>contact@visionlumbini.org.np</p>
                          </div>

                          <div class="phone">
                              <i class="bi bi-phone"></i>
                              <h4>Call:</h4>
                              <p>Main : +977 071-549494</p>
                              <p> Ktm : 01-5905890 </p>
                          </div>

                      </div>

                  </div>

                  <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

                      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                          <div class="row">
                              <div class="col-md-6 form-group">
                                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                      required>
                              </div>
                              <div class="col-md-6 form-group mt-3 mt-md-0">
                                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                      required>
                              </div>
                          </div>
                          <div class="form-group mt-3">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                  required>
                          </div>
                          <div class="form-group mt-3">
                              <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                  required></textarea>
                          </div>
                          <div class="my-3">
                              <div class="loading">Loading</div>
                              <div class="error-message"></div>
                              <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div>
                          <div class="text-center"><button type="submit">Send Message</button></div>
                      </form>

                  </div>

              </div>

          </div>
      </section><!-- End Contact Section -->


  @endsection
