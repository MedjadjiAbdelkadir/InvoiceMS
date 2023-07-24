<?php

namespace App\Models;

use App\Models\Region;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class RegionManager extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'gender',
        'region_id'
    ];

    /* ------------------------ Start Relations ------------------------ */
    public function manager() {
        return $this->hasOne(Region::class, 'region_id' , 'id'); 
    }
    /* ------------------------ End Relations ------------------------ */

}
