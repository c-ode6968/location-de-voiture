@extends('layouts.basestaff')
@section('content')

<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Modifier une voiture</h3>
            <div class="card">
                <form class="form-card" onsubmit="event.preventDefault()">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Marca<span class="text-danger"> *</span></label> 
                            <input type="text" id="fname" name="fname" placeholder="Entrer une marque" onblur="validate(1)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Modele<span class="text-danger"> *</span></label> 
                            <input type="text" id="lname" name="lname" placeholder="Entrer un model" onblur="validate(2)"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Plaque d'immatriculation<span class="text-danger"> *</span></label> 
                            <input type="text" id="plaque" name="plaque" placeholder="Numero de plaque" onblur="validate(3)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Aménagement<span class="text-danger"> *</span></label> 
                            <input type="text" id="mob" name="mob" placeholder="Type d'aménagement" onblur="validate(4)"> 
                        </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Nombre de place<span class="text-danger"> *</span></label> 
                            <input type="text" id="plaque" name="plaque" placeholder="Entrer le nombre de place" onblur="validate(3)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Prix de location journalier<span class="text-danger"> *</span></label> 
                            <input type="text" id="mob" name="mob" placeholder="Entrer un prix de location journalier" onblur="validate(4)"> 
                        </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Date de début location<span class="text-danger"> *</span></label> 
                            <input type="text" id="plaque" name="plaque" placeholder="Entrer une date de début" onblur="validate(3)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Date de fin location<span class="text-danger"> *</span></label> 
                            <input type="text" id="mob" name="mob" placeholder="Entrer une date de fin" onblur="validate(4)"> 
                        </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Image<span class="text-danger"> *</span></label> 
                            <input type="file" id="profile_image" name="profile_image" size="33" />
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> 
                            <button type="submit" class="btn-block btn-primary">Mofier</button> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<style>
    h3{
        margin-top: 2em;
        size: 20px;
        text-transform: uppercase;
        font-style: bold;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    body{
        color: #000;
        overflow-x: hidden;
        height: 100%;
        background-image: url("");
        background-repeat: no-repeat;background-size: 100% 100%}
        .card{
            padding: 30px 40px;
            margin-top: 60px;
            margin-bottom: 60px;
            border: none !important;
            box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2)}
            .blue-text{
                color: #00BCD4
            }
            .form-control-label{
                margin-bottom: 0
            }
                
            input, textarea, button{
                padding: 8px 15px;
                border-radius: 5px !important;
                margin: 5px 0px;
                box-sizing: border-box;
                border: 1px solid #ccc;
                font-size: 18px !important;
                font-weight: 300
            }
            input:focus, textarea:focus{
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
                border: 1px solid #00BCD4;
                outline-width: 0;
                font-weight: 400
            }
            .btn-block{
                text-transform: uppercase;
                font-size: 15px !important;
                font-weight: 400;
                height: 43px;
                cursor: pointer
           }
            .btn-block:hover{
                color: #fff !important
            }
            button:focus{
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
                outline-width: 0;
                width: 100%;
            }
</style>

@endsection
