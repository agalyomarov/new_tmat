<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalanceHistory extends Model
{
    protected $table = 'balance_histories';
    protected $guarded = [];
    public $timestamps = false;
}
