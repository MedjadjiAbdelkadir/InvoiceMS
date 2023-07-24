<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'branch_id',
        'code',
        'name',
        'email',
        'phone',
        'password',
        'gender',
        'address',
        'status'
    ];

    /* ------------------------ Start Relations ------------------------ */
    // public function manager() {
    //     return $this->hasMany(Unit::class, 'responsible_id' , 'id'); 
    // }
    /* ------------------------ Start Relations ------------------------ */
}
