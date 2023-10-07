<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile_wh extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'tb_wh_profile';
    protected $fillable = ['warehouse_name'];
}
