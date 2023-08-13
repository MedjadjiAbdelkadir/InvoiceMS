<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InvoiceDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'invoice_id',
        'invoice_code',
        'payment_status',
        'payment_date',
        'note'
    ];

    /* ------------------------ Start Relations ------------------------ */
    // public function subscriber() {
    //     return $this->belongsTo(Region::class, 'region_id' , 'id'); 
    // }
    /* ------------------------ Start Relations ------------------------ */
}