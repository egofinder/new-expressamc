<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    public function Appraisal()
    {
        return $this->hasMany(Appraisal::class, 'loan_number', 'TransDetailsLoan');
    }

}
