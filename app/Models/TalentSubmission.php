<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TalentSubmission extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'name',
        'talent_description',
        'comments'
    ];
    
    protected $dates = ['deleted_at'];
}
