<?php

namespace App\Models;

use App\Models\Unit;
use App\Models\Municipal;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'code',
        'name',
        'ar_name',
    ];

    /* ------------------------ Start Relations ------------------------ */
    public function municipals() {
        return $this->hasMany(Municipal::class, 'state_id' , 'id'); 
    }
    public function unit() {
        return $this->hasOne(Unit::class, 'state_id' , 'id'); 
    }
    /* ------------------------ Start Relations ------------------------ */

}
