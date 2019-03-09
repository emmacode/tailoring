<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['style_description', 'style_file', 'fabric_source', 'measurement_source',
        'name', 'phone', 'address', 'measurement_shoulder_back', 'measurement_chest', 'measurement_top_length',
        'measurement_neck', 'measurement_body_stomach', 'measurement_sleeves',  'measurement_round_sleeves'];
}