<?php

namespace App\Models;

use App\Models\State;
use App\Models\Branch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Unit extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'responsible_id',
        'state_id',
        'phone',
        'support_email',
        'info_email',
        'bank_account'
    ];

    protected $casts = [
        'phone' => 'array',
        'created_at'  => 'datetime:Y-m-d H:i',
        'updated_at' => 'datetime:Y-m-d H:i',
    ];

    /* ------------------------ Start Relations ------------------------ */
     public function branches() {
        return $this->hasMany(Branch::class, 'unit_id' , 'id'); 
    }

    public function located() {
        return $this->belongsTo(State::class, 'state_id' , 'id'); 
    }
    /* ------------------------ Start Relations ------------------------ */

}
