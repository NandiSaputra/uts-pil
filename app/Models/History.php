<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function friends()
    {
        return $this->belongsTo('App\Models\Friends');
    }
    public function groups()
    {
        return $this->belongsTo('App\Models\Groups');
    }
}
