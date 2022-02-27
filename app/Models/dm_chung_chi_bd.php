<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dm_chung_chi_bd extends Model
{
    use HasFactory;
    protected $fillable = [
        'MA_CHUNG_CHI_BD',
        'TEN_CHUNG_CHI_BD',
        'TU_VIET_TAT',
        'THU_TU_UU_TIEN',
    ];
}