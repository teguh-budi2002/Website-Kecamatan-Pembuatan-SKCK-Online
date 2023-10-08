<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKCKValidate extends Model
{
    use HasFactory;
    protected $table = 'skck_validate_by';
    protected $guarded = ['id'];
}
