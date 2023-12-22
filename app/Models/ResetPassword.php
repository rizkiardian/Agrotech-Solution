<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResetPassword extends Model
{
    use HasFactory;
    protected $table = 'reset_password';
    protected $primaryKey = 'id_reset_password';
    public $timestamps = false;

    protected $fillable = [
        'email',
        'token',
        'status',
        'create_date'
    ];
}
