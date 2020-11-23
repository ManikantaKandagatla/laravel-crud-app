<?php

namespace App\Models\Task\Picklist;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table='status';

    const NAME='name';

    protected $fillable = [
        self::NAME
    ];
}
