@extends('layouts.basestaff')
@section('content')

<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Ajouter une voiture</h3>
            <div class="card">
                <form class="form-card" action="{{ route('voitures.store') }}" method="post" >
                @csrf
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Marca<span class="text-danger"> *</span></label> 
                            <input type="text" id="name" name="marque" value="{{ old('marque') }}" placeholder="Entrer une marque" > 
                            @error('marque')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Modele<span class="text-danger"> *</span></label> 
                            <input type="text" id="lname" name="model" value="{{ old('model') }}" placeholder="Entrer un model"> 
                            @error('model')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Plaque d'immatriculation<span class="text-danger"> *</span></label> 
                            <input type="text" id="plaque" name="plaque_immatriculation" value="{{ old('plaque_immatriculation') }}" placeholder="Numero de plaque" >
                            @error('plaque_immatriculation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Aménagement<span class="text-danger"> *</span></label> 
                            <input type="text" id="mob" name="aménagement" value="{{ old('aménagement') }}" placeholder="Type d'aménagement" > 
                            @error('aménagement')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Nombre de place<span class="text-danger"> *</span></label> 
                            <input type="number" id="plaque" name="nombre_de_place" value="{{ old('nombre_de_place') }}" placeholder="Entrer le nombre de place"> 
                            @error('nombre_de_place')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Prix de location journalier<span class="text-danger"> *</span></label> 
                            <input type="number" id="mob" name="prix_location_journalier" value="{{ old('prix_location_journalier') }}" placeholder="Entrer un prix de location journalier" > 
                            @error('model')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Date de début location<span class="text-danger"> *</span></label> 
                            <input type="date" id="date_debut" name="date_debut" value="{{ old('date_debut') }}" placeholder="Entrer une date de début" > 
                            @error('date_debut')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Date de fin location<span class="text-danger"> *</span></label> 
                            <input type="date" id="mob" name="date_fin" value="{{ old('date_fin') }}" placeholder="Entrer une date de fin" > 
                            @error('date_fin')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Image<span class="text-danger"> *</span></label> 
                            <input type="file" id="profile_image" value="{{ old('image') }}" name="image" size="33" />
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> 
                            <button type="submit" class="btn-block btn-primary">Ajouter</button> 
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
