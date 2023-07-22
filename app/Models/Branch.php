<?php

namespace App\Models;

use App\Models\Unit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Branch extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'ar_name',
        'responsible_id'
    ];

    /* ------------------------ Start Relations ------------------------ */
    public function unit() {
        return $this->belongsTo(Unit::class, 'unit_id' , 'id'); 
    }
    /* ------------------------ Start Relations ------------------------ */
    
}
