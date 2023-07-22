<?php

namespace App\Models;

use App\Models\Unit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UnitManager extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
    ];

    /* ------------------------ Start Relations ------------------------ */
    public function manager() {
        return $this->hasMany(Unit::class, 'responsible_id' , 'id'); 
    }
    /* ------------------------ Start Relations ------------------------ */
}
