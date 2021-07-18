<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShareForm extends Model
{
    use HasFactory;
     protected $fillable = [
     'app_name',
      'app_district',
     'app_mun',
     'app_ward',
     'app_cit',
     'app_mob',
     'app_ph',
     'app_email',
     'app_father',
     'app_grandf',
        'app_hw',
     'app_ceo',
     'app_gaurdian',
     'nom_name',
     'nom_rln',
     'nom_district',
     'app_kitta',
     'app_total',
    'user_id',

     ];
}
