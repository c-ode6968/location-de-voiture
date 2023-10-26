<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallerie extends Model
{
    use HasFactory;
    protected $table = 'galleries';
    protected $primarykey = 'id';
    protected $fillable = [
        'marque',
        'images',
    ];

    public function getGalleries(){
        return Gallerie::all();
    }
}
