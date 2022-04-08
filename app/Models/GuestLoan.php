<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestLoan extends Model
{
    use HasFactory;

    public function GuestAppraisal()
    {
        return $this->hasOne(GuestAppraisal::class, 'loan_number', 'TransDetailsLoan');
    }

}
