<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\InvoiceDetail;
use App\Models\InvoiceAttachment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'invoice_code',
        'client_id',
        // 'issue_date',

        'invoice_date',
        'last_review',
        'preview',
        'next_preview',
        'next_invoice',

        'last_payment_date',

        'old_consumption',
        'new_consumption',
        'consumption',

        'amount',
        'total',
        'payment_status',
        'payment_date',
        'note',
    ];

    protected $casts = [
        'created_at'  => 'datetime:Y-m-d H:i',
        'updated_at' => 'datetime:Y-m-d H:i',

        'invoice_date' => 'datetime:Y-m-d H:i',

        'last_review' => 'datetime:Y-m-d H:i',
        'preview'      => 'datetime:Y-m-d H:i',
        'next_preview' => 'datetime:Y-m-d H:i',
        'next_invoice' => 'datetime:Y-m-d H:i',
        
        'last_payment_date' => 'datetime:Y-m-d H:i',
        'payment_date'      => 'datetime:Y-m-d H:i',
    ];


    
    protected $appends = ['consumption_period', 'consumption'];


    public function getConsumptionAttribute() {
        return $this->new_consumption - $this->old_consumption;
    }
    public function getConsumptionPeriodAttribute() {
        return Carbon::parse($this->last_review)->format('Y-m-d') .' - '. Carbon::parse($this->preview)->format('Y-m-d');
    }
    

    /* ------------------------ Start Relations ------------------------ */
    public function invoiceDetails() {
        return $this->hasMany(InvoiceDetail::class, 'invoice_id' , 'id'); 
    }

    public function invoiceAttachments() {
        return $this->hasMany(InvoiceAttachment::class, 'invoice_id' , 'id'); 
    }
    /* ------------------------ End Relations ------------------------ */
}
