<?php


namespace App\Models\Task;
use App\Models\QueryUtil;
use DB;
use App\Models\Task\Entity as Task;

class AggregationsService
{
    public function getCountsByColumn($column)
    {
        if (in_array($column, Task::JOIN_COLUMNS)) {
            return QueryUtil::getCountJoinQuery('task', $column, 'name')
                ->get();
        } else {
            return QueryUtil::getCountPlainQuery('task', $column)
                ->get();
        }
    }
}
