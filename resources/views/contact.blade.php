@extends('layouts.base')
@section('content')

<p class="contact"><strong>Nos contacts</strong></p>
<style>
    .contact{
        margin-top: 2em;
        text-align: center;
        text-transform: uppercase;
        text-decoration: solid;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 50px;
        font-style: normal;
        background-color: blanchedalmond;
    }
</style>
<hr>
<!-- <a class="back" href="{{route('staff.home')}}"><i class="bi bi-arrow-left-square-fill"></i></a></i> -->
<div class="container-fluid mb-5" style="margin-top: 0.1em;">
  <!-- Section: Block Content -->
  <section class="mb-4">
    <style>
      .map-container {
        overflow: hidden;
        position: relative;
        height: 0;
      }
      .map-container iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
      }

      .back{
            margin-top: 5em;
            color: red;
            justify-content: center;
            font-size: 30px;
            margin-left: 50%;
        }
    </style>

    <div class="card mt-3" style="margin-left: 4em; margin-right: 4em;">
      <div class="row" >
        <div class="col-md-6">
          <!-- Google Maps -->
          <div id="map-within-card-2" class="map-container rounded-left" style="height: 400px">
            <iframe src="https://maps.google.com/maps?q=Seattle&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
              style="border:0" allowfullscreen></iframe>
          </div>
          <!-- Google Maps -->
        </div>
        <div class="col-10 col-md-4 mx-auto align-self-center py-4">
          <strong><h6 class="text-uppercase " style="font-weight: 5em;">Nos Bureaux</h6></strong>
          <hr>
          @foreach($contacts as $contact)
          <h3 class="font-weight-normal mb-4">{{$contact -> adresse}}</h3>
          <h3><p class="text-muted font-weight-light mb-0"><strong>Telephone:</strong> {{$contact -> phone}}<br><strong>Email: </strong>{{$contact -> email}}</p></h3>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Block Content -->
</div>

  @endsection