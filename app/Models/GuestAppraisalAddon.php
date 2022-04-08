<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestAppraisalAddon extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_date',
        'order_by',
        'fee',
        'guest_appraisal_id',
        'loan_number',
    ];

    public function GuestAppraisals()
    {
        return $this->belongsTo(GuestAppraisal::class);
    }
}
