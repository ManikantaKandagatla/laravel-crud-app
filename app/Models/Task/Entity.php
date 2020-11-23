<?php

namespace App\Models\Task;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    protected $table = 'Task';

    const DUE_DATE = 'due_date';
    const PRIORITY = 'priorityId';
    const STATUS = 'statusId';
    const DELETED ='deleted';
    const NAME = 'name';

    const JOIN_COLUMNS = [self::PRIORITY, self::STATUS];

    protected $fillable = [
        self::DUE_DATE,
        self::STATUS,
        self::NAME,
        self::STATUS,
        self::PRIORITY
    ];

    const COLUMNS = [self::DUE_DATE, self::PRIORITY, self::STATUS, self::NAME];
}
