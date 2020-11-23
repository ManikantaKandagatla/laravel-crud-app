<?php


namespace App\Models\Defaults;


class Picklists
{
    const PRIORITES = [
        ['id' => 'p1', 'name' => 'High'],
        [ 'id' => 'p2', 'name'=> 'low'],
        ['id' => 'p3', 'name' => 'medium']
    ];
    const STATUSES = [
        ['id' => 's1','name' => 'open'],
        ['id' => 's2','name' => 'inprogress'],
        ['id' => 's3',  'name' => 'closed'],
        ['id' => 's4', 'name' => 'hold']];

    public static function getDefualtPriorites() {
        return self::PRIORITES;
    }

    public static function getDefualtStatus() {
        return self::STATUSES;
    }


}
