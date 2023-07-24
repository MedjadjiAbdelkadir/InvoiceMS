<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Region extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'branch_id',
        'name',
    ];

    /* ------------------------ Start Relations ------------------------ */

    public function clients() {
        return $this->hasMany(Client::class, 'region_id' , 'id'); 
    }
    /* ------------------------ End Relations ------------------------ */
    


}
