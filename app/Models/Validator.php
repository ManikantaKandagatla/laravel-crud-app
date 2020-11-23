<?php


namespace App\Models;


use App\Models\Task\Entity;
use Illuminate\Http\Request;

class Validator
{
    public function validateCreateRequest($request){
        $request->validate([
            'name'=>'required|max:20|min:4',
            'statusId'=>'required',
            'due_date'=>'required|after:today',
            'priorityId'=>'required'
        ]);
    }

    public function validateUpdateRequest(Request $request) {
        $request->validate([
            'id'=>'required',
            'due_date' => 'after:today'
        ]);
    }


    public function validateDeleteRequest(Request $request) {
        $request->validate([
            'id'=>'required',
        ]);
    }

    public function validateGroupByRequest(Request $columnData) {
        $columnData['task_columns'] = Entity::COLUMNS;
        $columnData->validate([
            'column' => 'required|in_array:task_columns.*'
        ]);
    }
}
