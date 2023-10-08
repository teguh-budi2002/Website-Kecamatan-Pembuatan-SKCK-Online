<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKCK extends Model
{
    use HasFactory;
    protected $table = 'skck';
    protected $guarded = ['id'];

    public function data_skck_user() {
        return $this->belongsTo(User::class);
    }

    public function skck_validate_by() {
        return $this->hasOne(SKCKValidate::class, 'skck_id');
    }
}
