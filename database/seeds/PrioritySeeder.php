<?php
use App\Models\Defaults\Picklists as Picklists;
use Illuminate\Database\Seeder;

class PrioritySeeder extends Seeder
{

    public function run() {
        $this->seed();
    }

    private function seed()
    {
        $name = DB::connection()->getName();
        DB::transaction(function() use ($name) {
            foreach (Picklists::getDefualtPriorites() as $priority) {
                DB::table('priority')->insert($priority);
            }
        });
    }
}
