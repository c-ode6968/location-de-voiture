<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilities extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $primarykey = 'id';
    protected $fillable = [
        'phone',
        'adresse',
        'desc_site',
        'email',
        'flotte_de_voitures_variee',
        'tarifs_competitifs',
        'facilite_de_reservation_en_ligne',
        'service_clientele_exceptionnel',
        'assurance_et_securite',
        'programme_de_fidelite',
        'appel_a_laction',
        'marque',
        'personnel',
        'partenaire'
    ];


    public function getContact(){
        return Utilities::all();
    }

    public function getQuiSommesNous(){
        return Utilities::all();
    }
    
}
