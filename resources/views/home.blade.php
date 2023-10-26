@extends('layouts.base')
@section('content')

  <!-- Bare de recherche -->
  <div class="container text-center" style="margin-top: 8em;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form id="price-filter-form">
                <div class="input-group" style="margin-left: 20%; padding:4px">
                    <div class="form-outline" style="margin: 5px;">
                        <input type="number" id="min-price" class="form-control" placeholder="Prix Min" />
                    </div>
                    <div class="form-outline" style="margin: 5px;">
                        <input type="number" id="max-price" class="form-control" placeholder="Prix Max" />
                    </div>
                    <button type="button" class="btn btn-primary" style="padding: 7px; margin:2px" onclick="applyPriceFilter()"><i class="bi bi-search" style="margin: 6px;"></i>Filtrer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    /* Styles pour la barre de recherche fixe */

</style>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Faites Vos Resrvations<br>Chez Nous</h2>
          @foreach($contacts as $contact)
              <p data-aos="fade-up" data-aos-delay="100">{{ $contact->appel_a_laction }}</p>
          @endforeach

          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="{{route('contact')}}" class="btn-book-a-table">Reservez</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="/img/voitures/alpina_b5.jpg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Qui Sommes Nous</h2>
          <p>En Savoir Plus<span> Sur Nous</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(/img/chefs/chauffeur.jpg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Reservez</h4>
              @foreach($contacts as $contact)
              <p>{{($contact -> phone)}}</p>
              
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">{{($contact -> desc_site)}}</p>
              @endforeach
              <ul>
                <li><i class="bi bi-check2-all"></i> {{($contact -> service_clientele_exceptionnel)}}</li>
              </ul>
              <div class="position-relative mt-4">
                <img src="/img/voitures/luxury.jpg" class="img-fluid" alt="">
          
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Pourquoi nous choisir ?</h3>
              @foreach($contacts as $contact)
              <p>{{ $contact -> assurance_et_securite }}</p>
              <div class="text-center">
                <a href="{{route('quisommenous')}}" class="more-btn">Lire plus<i class="bx bx-chevron-right"></i></a> 
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Notres personnels</h4>
                  <p>{{ $contact -> personnel }}</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Nos partenaires</h4>
                  <p>{{ $contact -> partenaire }}</p>
                  <strong><p class="color">Restaurant le Luxe </p></strong>
                  <strong><p class="color">CCA Banque </p></strong>
                  <strong><p class="color">Mercedes-Benz </p></strong>
                </div>
              </div><!-- End Icon Box -->

              <style>
                .color{
                  text-transform: uppercase;
                  text-decoration-color:red ;
                }
                .color1{
                  text-transform: uppercase;
                  color: #fff;
                }
              </style>
              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Nos marques</h4>
                  <p>{{ $contact -> marque}}</p>
                  <strong><p class="color1">Mercedes-Benz </p></strong>
                  <strong><p class="color1">BMW</p></strong>
                  <strong><p class="color1">Audi </p></strong>
                  <strong><p class="color1">Chevrolet </p></strong>
                  @endforeach 
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Catalogue voitures Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Nos Voitures</h2>
          <p>Faites <span>Votres Choix chez Herzt</span></p>
        </div>
        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <h3>Nos Meilleurs Offres</h3>
            </div>

            <div class="row gy-5">
              @foreach($voitures as $voiture)
                <div class="col-lg-4 menu-item">
                  <div class="card" style="margin-block-end: 10px;">
                    @if(!empty($voiture -> image))
                      @php
                        $imagePath = public_path('img/voitures/' . $voiture -> image)
                      @endphp
                      @if(file_exists($imagePath))    
                        <a href="{{asset('img/voitures/' . $voiture -> image)}}" class="glightbox"><img src="{{asset('img/voitures/' . $voiture -> image)}}" class="menu-img img-fluid" alt=""></a>
                      @else
                      <a href="/img/voitures/default.jpg" class="glightbox"><img src="/img/voitures/default.jpg" class="menu-img img-fluid" alt=""></a>
                      @endif
                    @endif
                    <h4>Marque: {{$voiture -> marque}}</h4>
                    <p class="ingredients">Model: {{$voiture -> model}}</p>
                    <p class="price">Prix location journalier: {{$voiture -> prix_location_journalier}} €</p>
                      <!-- button -->
                      <a style="text-decoration: #333; font-size:30dp;" href="{{route('detailvoiture', ['idv' => $voiture -> idv])}}"><strong>Detail de l'offre </strong> </a>
                      
                  </div>
                </div><!-- Menu Item -->
              @endforeach
            </div>
            <div class="pag">{{ $voitures->onEachSide(1)->links('pagination.pagination') }}</div>
            <!-- End Starter Menu Content -->
          </div>
        </div>
        <style>
          .custom-pagination{
            margin-top: 30px;
            display: flex;
            justify-content: center;
            list-style-type: none;
            padding: 0;
          }
          
          .custom-pagination li{
            margin: 0 5px;
            font-size: 16px;
            color: #333;
            border: 1px solid #333;
            border-radius: 4px;
            padding: 5px 15px;
            cursor: pointer;      
          }

          custom-pagination li.active{
            background-color: #333;
            color: #fff;
          }
        </style>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>What Are They <span>Saying About Us</span></p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Personnels</h2>
          <p>Notres<span>Personnels les plus</span> Qalifié</p>
        </div>

        <div class="row gy-4">
        @foreach($personnels as $personnel)
        @if(in_array($personnel->role, ['Ingegneur', 'Directeur général', 'Mecanicien']))
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
              @if(!empty($personnel -> photos))
                    @php
                      $imagePath = public_path('img/chefs/' . $personnel -> photos)
                    @endphp
                    @if(file_exists($imagePath))    
                      <a href="{{asset('img/chefs/' . $personnel -> photos)}}" class="glightbox"><img src="{{asset('img/chefs/' . $personnel -> photos)}}" class="menu-img img-fluid" alt=""></a>
                    @else
                    <a href="/img/voitures/default.jpg" class="glightbox"><img src="/img/voitures/default.jpg" class="menu-img img-fluid" alt=""></a>
                    @endif
                  @endif
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>{{($personnel -> nom)}}</h4>
                <span>{{($personnel -> role)}}</span>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->
          @endif
          @endforeach
        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Faites Une Réservation</h2>
          <p>N'exitez <span>Pas a </span> Nous Contactés</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-4 reservation-img" style="background-image: url(/img/voitures/ferrari_enzo.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
            <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Telehone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="date" class="form-control" id="date" placeholder="Periode" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="time" id="time" placeholder="Heure" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="people" id="people" placeholder="of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Besoin D'aide ? <span>Contactez nous</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Notre Adresse</h3>
                @foreach($contacts as $contact)
                <p>{{$contact -> adresse}}</p>
                
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email </h3>
                <p>{{$contact -> email}}</p>
                
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Telephone</h3>
                <p>{{$contact -> phone}}</p>
                @endforeach
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Heures D'ouverture</h3>
                <div><strong>Lun-Sam:</strong> 11AM - 23PM;
                  <strong>Dimanche:</strong> Fermé
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nom" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Envoyer</button></div>
        </form><!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


@endsection