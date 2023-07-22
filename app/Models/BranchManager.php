<?php

namespace App\Models;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class BranchManager extends Authenticatable
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
        return $this->hasMany(Branch::class, 'responsible_id' , 'id'); 
    }
    /* ------------------------ Start Relations ------------------------ */
}
