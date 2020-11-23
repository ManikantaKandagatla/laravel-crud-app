<?php


namespace App\Http\Controllers;
use App\Models\Task\Entity as Task;
use App\Models\Task\Repository;
use App\Models\Validator;
use Illuminate\Http\Request as Request;
use App\Models\Task\AggregationsService as AggregationService;
use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFoundException;

class TaskController extends Controller
{
    public function addTask(Request $request) {
        (new Validator)->validateCreateRequest($request);
        $task = $this->getTaskFromRequest($request);
        $task->save();
        return $task;
    }

    public function updateTask(Request $request) {
        $data = $request->all();
        (new Validator)->validateUpdateRequest($request);
        Task::where('id', $data['id'])
            ->update($data);
        return $data;
    }

    public function get($id) {
        return Task::findOrFail($id);
    }

    public function listTasks(Request $request) {
        $params = $request->all();
        return (new Repository)->listAllTaks($params);
    }

    public function getGroupByData(Request $request) {
        (new Validator)->validateGroupByRequest($request);
        $columnData = $request->all();
        return (new AggregationService)->getCountsByColumn($columnData['column']);
    }

    private function getTaskFromRequest(Request $request) {
        $task = new Task([
            'name' => $request['name'],
            'due_date' => $request['due_date'],
            'statusId' => $request['statusId'],
            'priorityId' => $request['priorityId'],
        ]);
        return $task;
    }
}
