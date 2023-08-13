<?php

namespace App\Models;

use App\Models\Region;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'region_id',
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
    public function invoices() {
        return $this->hasMany(Invoice::class, 'client_id' , 'id'); 
    }

    public function subscriber() {
        return $this->belongsTo(Region::class, 'region_id' , 'id'); 
    }
    /* ------------------------ End Relations ------------------------ */
}
