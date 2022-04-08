<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'TransDetailsLoan',
        'LoanProgram',
        'BrokerLenderName',
        'AEName',
        'LoanOfficerName',
        'SubjectPropertyAddress',
        'created_by',
    ];

    public function Appraisal()
    {
        return $this->hasOne(Appraisal::class, 'loan_number', 'TransDetailsLoan');
    }

    public function GuestAppraisal()
    {
        return $this->hasOne(GuestAppraisal::class, 'loan_number', 'TransDetailsLoan');
    }

    public function User()
    {
        return $this->hasOne(User::class, 'created_by', 'id');
    }

}
