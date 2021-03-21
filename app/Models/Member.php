<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'date_of_birth', 'national_id_no', 'birth_certificate','gender', 'religion', 'marital_status', 'email', 'mobile1', 'mobile2', 'mobile3', 'admission_date', 'permanent_village', 'permanent_thana', 'permanent_sub_district', 'permanent_district', 'permanent_address', 'present_village', 'present_thana', 'present_sub_district', 'present_district', 'present_address'
    ];

    protected $casts = [
        'date_of_birth' => 'datetime',
        'admission_date' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
