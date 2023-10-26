@extends('layouts.base')
@section('content')

    <strong><h1 class="gal"> Notres Galleries d'images</h1></strong>
<hr>
   <!-- <a class="back" href="{{route('staff.home')}}"><i class="bi bi-arrow-left-square-fill"></i></a></i>  -->
<!-- Control buttons -->
<div class="btnB" id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('bmw')"> BMW</button>
  <button class="btn" onclick="filterSelection('jeep')"> Jeep</button>
  <button class="btn" onclick="filterSelection('audi')"> Audi</button>
  <button class="btn" onclick="filterSelection('cupra')"> Cupra</button>
  <button class="btn" onclick="filterSelection('jaguar')"> Jaguar</button>
  <button class="btn" onclick="filterSelection('honda')"> Honda</button>
  <button class="btn" onclick="filterSelection('citroen')"> Citroen</button>
  <button class="btn" onclick="filterSelection('fiat')"> Fiat</button>
  <button class="btn" onclick="filterSelection('toyota')"> Toyota</button>
  <button class="btn" onclick="filterSelection('ford')"> Ford</button>
  <button class="btn" onclick="filterSelection('volkswagen')"> Volkswagen</button>
  <button class="btn" onclick="filterSelection('caterham')"> Caterham</button>
  <button class="btn" onclick="filterSelection('opel')"> Opel</button>
  <button class="btn" onclick="filterSelection('nissan')"> Nissan</button>
  <button class="btn" onclick="filterSelection('ferrari')"> Ferrari</button>
  <button class="btn" onclick="filterSelection('porche')"> Porche</button>
  <button class="btn" onclick="filterSelection('lexus')"> Lexus</button>
  <button class="btn" onclick="filterSelection('bus')"> Bus</button>
</div>

  <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-block-end: 20px; margin-left:30px ; margin-right:30px; margin-top:4em">
    @foreach($galleries as $gallerie)
      <div class="col">
        <div class="card">
              @if(!empty($gallerie -> images))
                  @php
                    $imagePath = public_path('img/voitures/' . $gallerie -> images)
                  @endphp
                  @if(file_exists($imagePath))
                  <a href="{{asset('img/voitures/' . $gallerie -> images)}}" class="glightbox"><img src ="{{asset('img/voitures/' . $gallerie -> images)}}" class=" card-img-top" alt=""></a>
                  @else
                      <a href="/img/voitures/default.jpg" class="glightbox"><img src ="/img/voitures/default.jpg" class=" card-img-top" alt=""></a>
                  @endif
              @endif 
          <div class="card-body">
            <h5 class="card-title">Marque: {{$gallerie -> marque}}</h5>
          </div>
        </div>
      </div>
    @endforeach
  </div>
  <div class="pag">{{ $galleries->onEachSide(1)->links('pagination.pagination') }}</div>

  <script>
    function filterSelection(marque) {
        var cards = document.querySelectorAll('.col'); // Sélectionnez tous les éléments de la galerie

        // Si l'option "Tout" est sélectionnée, affichez toutes les voitures
        if (marque === 'all') {
            cards.forEach(function(card) {
                card.style.display = 'block';
            });
        } else {
            // Sinon, masquez les voitures qui ne correspondent pas à la marque sélectionnée
            cards.forEach(function(card) {
                var marqueCard = card.querySelector('.card-title').textContent.toLowerCase();
                if (marqueCard.includes(marque)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
        window.location.href = '?marque=' + marque;
    }
</script>


      <style>
        .gal{
          margin-top: 3em;
          text-align: center;
          text-transform: uppercase;
          font-size: 50px;
          background-color: blanchedalmond;
          font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .card-title{
          size: 20px;
          text-transform: uppercase;
          text-align: center;
          text-size-adjust: 42px;
        }
        .container {
          
          overflow: hidden; 
        }
      
        .filterDiv {
          float: left;
          background-color: #2196F3;
          color: #ffffff;
          width: 100px;
          line-height: 100px;
          text-align: center;
          margin: 2px;
          display: none; /* Hidden by default */
        }

        /* The "show" class is added to the filtered elements */
        .show {
          display: block;
        }

        /* Style the buttons */
        .btn {
          border: none;
          outline: none;
          padding: 12px 16px;
          background-color: #f1f1f1;
          cursor: pointer;
        }

        /* Add a light grey background on mouse-over */
        .btn:hover {
          background-color: #ddd;
        }

        /* Add a dark background to the active button */
        .btn.active {
          background-color: #666;
          color: white;
        }    


                    /* Style the button container */
              .btnB {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                margin-top: 20px; /* Adjust the margin as needed */
              }

              /* Style the buttons */
              .btn {
                margin: 5px; /* Adjust the margin between buttons as needed */
                padding: 10px 20px;
                background-color: #007bff;
                color: #fff;
                border: none;
                cursor: pointer;
                border-radius: 5px;
              }

              .btn.active {
                background-color: #0056b3;
              }
              .custom-pagination{
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

          .back{
            margin-top: 5em;
            color: red;
            justify-content: center;
            font-size: 30px;
            margin-left: 50%;
        }
            </style>
@endsection

