<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestAppraisal extends Model
{
    use HasFactory;

    protected $fillable = [
        'loan_number',
        'order_date',
        'order_by',
        'company',
        'fee',
        'payment',
        'paid_by',
        'phone',
        'fax',
    ];

    public function Loans()
    {
        return $this->belongsTo(GuestLoan::class);
    }

    public function Addon()
    {
        return $this->hasMany(GuestAppraisalAddon::class, 'guest_appraisal_id');
    }
}
