<?php

use App\Models\Defaults\Picklists as Picklists;
use Illuminate\Database\Seeder;


class StatusSeeder extends Seeder
{
    public function run() {
        $this->seed();
    }

    private function seed()
    {
        $name = DB::connection()->getName();
        DB::transaction(function() use ($name) {
            foreach (Picklists::getDefualtStatus() as $status) {
                DB::table('status')->insert($status);
            }
        });
    }
}
