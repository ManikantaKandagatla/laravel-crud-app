<?php

namespace App\Models\Task\Picklist;

use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
    protected $table='priority';

    const NAME='name';

    protected $fillable = [
        self::NAME
    ];
}
