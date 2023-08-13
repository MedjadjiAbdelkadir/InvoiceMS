<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InvoiceAttachment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'invoice_id',
        'invoice_code',
        'file_name',
    ];

    /* ------------------------ Start Relations ------------------------ */
    // public function subscriber() {
    //     return $this->belongsTo(Region::class, 'region_id' , 'id'); 
    // }
    /* ------------------------ Start Relations ------------------------ */
}