<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'logo' => 'required|mimes:jpg,png,bmp,jpeg',
        'website' => 'required',


    ];
    protected $guarded = [];
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}