<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voitures extends Model
{
    use HasFactory;

    protected $table = 'voitures';
    protected $primarykey = 'idv';
    protected $fillable = [
        'marque',
        'model',
        'plaque_d\'immatriculation',
        'aménagement',
        'nombre_de_place',
        'prix_location_journalier',
        'date_debut',
        'date_fin',
        'image'
    ];

    public function getVoiture(){
        return Voitures::all();
    }

    public function getCatalogue(){
        return Voitures::all();
    }

    public static function getVoitureById($idv)
    {
        return self::where('idv', $idv)->first();
    }
}
