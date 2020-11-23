<?php


namespace App\Models;

use DB;

class QueryUtil
{
    public static function getCountJoinQuery($basetable, $column, $projectionColumn = 'name') {
        $joinTable = str_replace('Id', '', $column);
        $joinColumn = 'id';
        return DB::table($basetable)
            ->join($joinTable, $basetable.'.'.$column ,  '=', $joinTable.'.'.$joinColumn)
            ->select($joinTable.'.'.$projectionColumn, DB::raw('count(*) as count'))
            ->groupBy($column);
    }

    public static function getCountPlainQuery($baseTable, $column) {
        return DB::table($baseTable)
            ->select($column, DB::raw('count(*) as count'))
            ->groupBy($column);
    }

    public static function getSimpleQuery($baseTable) {
        return DB::table($baseTable)
            ->select('*');
    }

}
