<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $table = 'faqs';
    protected $primarykey = 'id';
    protected $fillable = [
        'question',
        'reponse',
    ];

    public function getFaq(){
        return Faq::all();
    }
}
