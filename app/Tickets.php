<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tickets extends Model
{
    protected $fillable=[
        'title', 'content'
    ];
}
}
