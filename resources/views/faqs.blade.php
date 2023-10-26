@extends('layouts.base')
@section('content')

    <strong><h1 class="gal"> Questions Fréquentes</h1></strong>
<hr>
    <!-- <a class="back" href="{{route('staff.home')}}"><i class="bi bi-arrow-left-square-fill"></i></a></i> -->
<div class="container py-3" style="margin-top: 2em;">
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="accordion" id="faq">
                @foreach($faqs as $faq)
                <div class="card">
                    <div class="card-header p-2" >
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                {{$faq -> question}}
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                        <div class="card-body">
                            <b>Réponse</b> {{$faq -> reponse}}
                        </div>
                    </div>
                </div><br>
                @endforeach
            </div>
            <div class="pag">{{ $faqs->onEachSide(1)->links('pagination.pagination') }}</div>
        </div>
    </div>
    <!--/row-->
</div>
<!--container-->

<style>
    .gal{
        margin-top: 3em;
        text-align: center;
        text-transform: uppercase;
        font-size: 50px;
        background-color: blanchedalmond;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
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