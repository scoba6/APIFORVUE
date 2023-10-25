<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Resources\TaskResource;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class TaskCompleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Task $task)
    {
        $task->is_completed = $request->is_completed;
        $task->save();

        return TaskResource::make($task);
    }
}
