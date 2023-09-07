<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    //! List of all pending tasks ordered by company, each one of the Tasks will be displayed if it already has a related user.
    public function pendingTasks() {
        $data = DB::table('tasks')
        ->select('tasks.id', 'tasks.name', 'tasks.description', 'companies.name', 'users.name', 'tasks.start_date', 'tasks.deadline')
        ->join('companies','companies.id','=','tasks.company_id')
        ->join('users','users.id','=','tasks.user_id')
        ->where('tasks.status','=',0)
        ->orderBy('companies.name','asc')
        ->get();

        return $data->toJson();
    }

    //! list top 3 companies with most pending tasks
    public function pendingCompanyTasks() {
        $data = DB::table('companies')
            ->leftJoin('tasks', 'companies.id', '=', 'tasks.company_id')
            ->where('tasks.status', '=', 0)
            ->groupBy('tasks.company_id')
            ->orderByRaw('COUNT(tasks.id) DESC')
            ->limit(3)
            ->select('companies.id', DB::raw('COUNT(tasks.id) AS pendingTasks'), 'companies.name')
            ->get();
        
        return $data;
    }

    //list of all users that does not have the maximum assigned tasks
    public function assignedTasks() {
        $data = User::leftJoin('tasks', 'users.id', '=', 'tasks.user_id')
        ->groupBy('users.id', 'users.name', 'users.email')
        ->havingRaw('COUNT(tasks.id) < 5 OR COUNT(tasks.id) IS NULL')
        ->select('users.id', 'users.name', 'users.email', DB::raw('COUNT(tasks.id) as assignedTasks'))
        ->get();

        return $data->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
