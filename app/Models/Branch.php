<?php

namespace App\Models;

use App\Models\Unit;
use App\Models\Client;
use App\Models\Region;
use App\Models\Municipal;
use App\Models\BranchManager;
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
        'phone',
        'support_email',
        'info_email',
    ];

    protected $casts = [
        'phone' => 'array',
        'created_at'  => 'datetime:Y-m-d H:i',
        'updated_at' => 'datetime:Y-m-d H:i',
    ];


    /* ------------------------ Start Relations ------------------------ */
    public function manager() {
        return $this->hasOne(BranchManager::class, 'branch_id' , 'id'); 
    }

    public function regions() {
        return $this->hasOne(Region::class, 'branch_id' , 'id'); 
    }

    public function unit() {
        return $this->belongsTo(Unit::class, 'unit_id' , 'id'); 
    }
    
    public function located() {
        return $this->belongsTo(Municipal::class, 'municipal_id' , 'id'); 
    }

    // public function clients() {
    //     return $this->hasMany(Client::class, 'branch_id' , 'id'); 
    // }
    /* ------------------------ Start Relations ------------------------ */
    
}
