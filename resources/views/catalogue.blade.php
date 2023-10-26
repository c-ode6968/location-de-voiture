@extends('layouts.base')
@section('content')

<!-- Bare de recherche -->

  <div class="container text-center" style="margin-top: 83m;">
    <div class="row justify-content-center" >
      
        <div class="col-md-6" >  <hr>
            <form id="price-filter-form" class="fixed-search-bar" >
                <div class="input-group" style="margin-left: 25%; padding:4px">
                    <div class="form-outline" style="margin: 5px;">
                        <input type="number" id="min-price" class="form-control" placeholder="Prix Min" />
                    </div>
                    <div class="form-outline" style="margin: 5px;">
                        <input type="number" id="max-price" class="form-control" placeholder="Prix Max" />
                    </div>
                    <div class="form-outline" style="margin: 5px;">
                        <input type="date" id="start-date" class="form-control" placeholder="Date de début" />
                    </div>
                    <div class="form-outline" style="margin: 5px;">
                        <input type="date" id="end-date" class="form-control" placeholder="Date de fin" />
                    </div>
                    <button type="button" class="btn btn-primary" style="padding: 7px; margin:2px" onclick="applyPriceFilter()"><i class="bi bi-search" style="margin: 6px;"></i>Filtrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
<style>
    /* Styles pour la barre de recherche fixe */
    .fixed-search-bar {
        margin-top: 5em;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        background-color: #fff; 
        z-index: 1000;
        padding: 10px; 
    }
</style>



    <!-- ======= Catalogue voitures Section ======= -->
    <section id="menu" class="menu" style="margin-top: 5em;">
    <!-- <a class="back" href="{{route('staff.home')}}"><i class="bi bi-arrow-left-square-fill"></i></a></i> -->
      <div class="container" data-aos="fade-up">
        <div class="section-header"><h1><strong>Notre catalogue</strong></h1></div>
        <strong></strong><hr>
        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
          <div class="tab-pane fade active show" id="menu-starters">
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
                    <h4>Marque: <strong>{{$voiture -> marque}}</strong></h4>
                    <p class="ingredients">Model: <strong>{{$voiture -> model}}</strong></p>
                    <p class="price">Prix location journalier: {{$voiture -> prix_location_journalier}} €</p>

                    <a style="text-decoration: #333; font-size:30dp;" href="{{route('detailvoiture', ['idv' => $voiture -> idv])}}"><strong>Detail de l'offre </strong> </a>
                </div>
                </div><!-- Menu Item -->
              @endforeach
            </div>
            <div class="pag">{{ $voitures->onEachSide(1)->links('pagination.pagination') }}</div>
          </div><!-- End Starter Menu Content -->
        </div>
        <style>
          .custom-pagination{
            display: flex;
            justify-content: center;
            list-style-type: none;
            padding: 0;
            margin-top: 40px;
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

          .back{
            margin-top: 5em;
            color: red;
            justify-content: center;
            font-size: 30px;
            margin-left: 50%;
        }
        </style>

      </div>
    </section><!-- End Menu Section -->


@endsection