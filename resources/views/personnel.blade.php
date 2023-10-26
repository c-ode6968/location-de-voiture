@extends('layouts.base')
@section('content')

    <strong><h1 class="gal"> Nos Meilleurs membres du personnel</h1></strong>
<hr>
<a class="back" href="{{route('home')}}"><i class="bi bi-arrow-left-square-fill"></i></a></i>
<div class="container mt-5" style="margin-block-end: 1em; ">
@foreach($personnels as $personnel)
    <div class="row d-flex justify-content-center">
        <div class="col-md-5">
            <div class="card p-3 py-4">
                <div class="text-center">
                  @if(!empty($personnel -> photos))
                    @php
                      $imagePath = public_path('img/chefs/' . $personnel -> photos);
                    @endphp
                    @if(file_exists($imagePath))    
                      <img src="{{asset('img/chefs/' . $personnel -> photos)}}" width="150" class="rounded-circle">
                    @else
                      <img src="/img/voitures/default.jpg" width="150" class="rounded-circle">
                    @endif
                  @endif
                </div>
                <div class="text-center mt-3">
                <span class="bg-secondary p-1 px-4 rounded text-white">{{$personnel->nom}} {{$personnel->prenom}}</span>
                    <h5 class="mt-2 mb-0">{{$personnel -> role}}</h5><br>
                    <span><strong>Email: </strong>{{$personnel -> email}}</span><br>
                    <div class="px-4 mt-1"><br>
                        <p class="fonts">Consectetur adipiscing elit, sed do eiusmod tempor at. </p>
                    </div>
                    <ul class="social-list">
                        <li><a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="https://www.messenger.com/"><i class="bi bi-messenger"></i></a></li>
                        <li><a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a></li>
                        <li><a href="https://plus.google.com/"><i class="bi bi-google"></i></a></li>
                    </ul>

                    <div class="buttons">
                        <button class="btn btn-outline-primary px-4">Message</button>
                        <button class="btn btn-primary px-4 ms-3">Contact</button>
                    </div>
                </div>
            </div>
    </div>
</div><br>
@endforeach
</div>
<div class="pag">{{ $personnels->onEachSide(1)->links('pagination.pagination') }}</div>



<style>
      .gal{
          margin-top: 3em;
          text-align: center;
          text-transform: uppercase;
          font-size: 50px;
          background-color: blanchedalmond;
          font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        body{
                background:#eee;
            }

            .card{
                border:none;

                position:relative;
                overflow:hidden;
                border-radius:8px;
                cursor:pointer;
            }

            .card:before{
                
                content:"";
                position:absolute;
                left:0;
                top:0;
                width:4px;
                height:100%;
                background-color:#E1BEE7;
                transform:scaleY(1);
                transition:all 0.5s;
                transform-origin: bottom
            }

            .card:after{
                
                content:"";
                position:absolute;
                left:0;
                top:0;
                width:4px;
                height:100%;
                background-color:#8E24AA;
                transform:scaleY(0);
                transition:all 0.5s;
                transform-origin: bottom
            }

            .card:hover::after{
                transform:scaleY(1);
            }


            .fonts{
                font-size:11px;
            }

            .social-list{
                display:flex;
                list-style:none;
                justify-content:center;
                padding:0;
            }

            .social-list li{
                padding:10px;
                color:#8E24AA;
                font-size:19px;
            }


            .buttons button:nth-child(1){
                border:1px solid #8E24AA !important;
                color:#8E24AA;
                height:40px;
            }

            .buttons button:nth-child(1):hover{
                border:1px solid #8E24AA !important;
                color:#fff;
                height:40px;
                background-color:#8E24AA;
            }

            .buttons button:nth-child(2){
                border:1px solid #8E24AA !important;
                background-color:#8E24AA;
                color:#fff;
                    height:40px;
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