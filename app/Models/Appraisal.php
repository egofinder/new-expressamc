<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appraisal extends Model
{
    use HasFactory;

    protected $fillable = [
        'loan_number',
        'order_date',
        'order_by',
        'fee',
        'payment',
        'paid_by',
    ];

    public function Loans()
    {
        return $this->belongsTo(Loan::class);
    }

    public function Users()
    {
        return $this->hasOne(User::class, 'id', 'order_by');
    }
}
