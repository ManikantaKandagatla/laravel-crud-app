<?php


namespace App\Models\Task;

use App\Models\QueryUtil;
use DB;
use App\Models\Task\Entity as Task;

class Repository
{
    public function listAllTaks($params) {
        $query = QueryUtil::getSimpleQuery('task');
        $this->resolveQueryParams($query, $params);
        return $query->get();
    }

    private function resolvePagination($query, $limit, $offset) {
        $query->take($limit);
        $query->skip(($offset-1 )*$limit);
        $query->orderBy('id', 'desc');
    }

    private function resolveQueryParams($query, $params) {
        $limit = -1;
        $offset = -1;

        foreach($params as $key => $value) {
            if($key == 'from') {
                $query->where(Task::DUE_DATE , '>', $value);
            } else if($key == 'to') {
                $query->where(Task::DUE_DATE , '<', $value);
            } else if($key == 'limit') {
                $limit = $value;
            } else if($key == 'pageNumber') {
                $offset = $value;
            } else {
                $query->where($key, $value);
            }
        }
        if($limit !== -1 && $offset != -1) {
            $this->resolvePagination($query, $limit, $offset);
        }
    }
}
