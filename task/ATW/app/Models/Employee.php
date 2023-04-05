<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public static $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'company_id' => 'required',
        'email' => 'required|email',
        'phone' => 'required|numeric|max:11',

    ];
    protected $guarded = [];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}