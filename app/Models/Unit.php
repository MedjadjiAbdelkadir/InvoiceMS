<?php

namespace App\Models;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Unit extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'ar_name',
        'responsible_id'
    ];

    /* ------------------------ Start Relations ------------------------ */
     public function branches() {
        return $this->hasMany(Branch::class, 'unit_id' , 'id'); 
    }
    /* ------------------------ Start Relations ------------------------ */
}
