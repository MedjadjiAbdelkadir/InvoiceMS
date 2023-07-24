<?php

namespace App\Models;

use App\Models\Unit;
use App\Models\Municipal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Branch extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'municipal_id',
        'unit_id',
        'responsible_id',
        'phone',
        'support_email',
        'info_email',
    ];

    protected $casts = [
        'phone' => 'array',
        'created_at'  => 'datetime:Y-m-d H:i',
        'updated_at' => 'datetime:Y-m-d H:i',
    ];

    // protected $casts = [
    //     'created_at'  => 'datetime:Y-m-d H:i',
    //     'updated_at' => 'datetime:Y-m-d H:i',
    //     'start' => 'datetime:Y-m-d H:i',
    //     'end' => 'datetime:Y-m-d H:i',
    // ];

    /* ------------------------ Start Relations ------------------------ */
    public function unit() {
        return $this->belongsTo(Unit::class, 'unit_id' , 'id'); 
    }
    
    public function located() {
        return $this->belongsTo(Municipal::class, 'municipal_id' , 'id'); 
    }
    /* ------------------------ Start Relations ------------------------ */
    
}
