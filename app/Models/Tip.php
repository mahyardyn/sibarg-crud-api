<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'tips';

    protected $primaryKey = 'Guid';

    protected $fillable = ['Guid','title','description'];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
