<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $guarded = [];

    public function user()
    {
        return $this->BelongsTo('App\Models\User');
    }
}