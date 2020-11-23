<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Task\Entity as Task;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date( Task::DUE_DATE);
            $table->string(Task::NAME);
            $table->string(Task::PRIORITY);
            $table->string(Task::STATUS);
            $table->boolean(Task::DELETED);

            $table->foreign(Task::STATUS)
                ->references('id')
                ->on('status')
                ->onDelete('restrict');

            $table->foreign(Task::PRIORITY)
                ->references('id')
                ->on('priority')
                ->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task');
    }
}
