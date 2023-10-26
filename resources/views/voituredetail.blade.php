@extends('layouts.base')
@section('content')



<strong><h1 class="gal"> Details du vehicule</h1></strong>
<hr>
<a class="back" href="{{route('home')}}"><i class="bi bi-arrow-left-square-fill"></i></a></i>
<div class="container d-flex justify-content-center mt-50 mb-50" >
    <div class="row">
        <div class="col-md-10">
            <div class="card card-body mt-3 " style="width: 70%; margin-left: 25%;">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    @if(!empty($voitures -> image))
                        @php
                            $imagePath = public_path('img/voitures/' . $voitures -> images)
                        @endphp
                        @if(file_exists($imagePath))
                        <a href="{{asset('img/voitures/' . $voitures -> image)}}" class="glightbox"><img src ="{{asset('img/voitures/' . $voitures -> image)}}" class=" card-img-top" alt=""></a>
                        @else
                            <a href="/img/voitures/default.jpg" class="glightbox"><img src ="/img/voitures/default.jpg" class=" card-img-top" alt=""></a>
                        @endif
                    @endif 
                 <hr>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold">
                           <p style="color: red; font-size:40px"><strong>{{$voitures -> marque}}</strong></p>
                        </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item">Modele: {{$voitures -> model}}</li> |
                            <li class="list-inline-item">{{$voitures -> nombre_de_place}} places</li>
                        </ul>

                        <p class="mb-3"><strong>Amenagement : </strong>{{$voitures -> aménagement}}|  <strong>Plaque d'Immatriculation : </strong>{{$voitures -> plaque_immatriculation}} </p> 
                        <p class="mb-3"><strong>Date de début Loccation:</strong> {{$voitures -> date_debut}} | <strong>Date de fin Loccation: </strong> {{$voitures -> date_fin}} </p> 
                        <ul class="list-inline list-inline-dotted mb-0">
                            <li class="list-inline-item">Prix location journalier :</li>
                        </ul>
                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center ml-auto">
                        <h3 class="mb-0 font-weight-semibold"><strong>{{$voitures -> prix_location_journalier}} €</strong></h3>
                        <button type="button" class="btn btn-success mt-4 text-white"><i class="bi bi-plus"></i> Reservé</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
<style>
     .gal{
          margin-top: 3em;
          text-align: center;
          text-transform: uppercase;
          font-size: 50px;
          background-color: blanchedalmond;
          font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

                body {
            margin: 0;
            font-family: Roboto,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
            font-size: .8125rem;
            font-weight: 400;
            line-height: 1.5385;
            color: #333;
            text-align: left;
            background-color: #f5f5f5;
        }

        .mt-50{
            margin-top: 50px;
        }
        .mb-50{
            margin-bottom: 50px;
        }


        .bg-teal-400 { 
            background-color: #26a69a;
        }

        /* a{
            text-decoration: none !important;
        } */


        .fa {
                color: red;
        }

        .back{
            margin-top: 5em;
            color: red;
            justify-content: center;
            font-size: 30px;
            margin-left: 50%;
        }
</style>

