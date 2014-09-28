<?php

class TaskController extends basecontroller{
    public function getAll(){
        return View::make('task.all');
    }
    public function getNew(){
        return View::make('task.new');
    }
    public function postNew(){
         $validator = Validator::make(Input::all(),
            array(
                'name' => 'required'
            )
        );
        if ($validator->fails())
        {
            return Redirect::to('tasks/new')->withErrors($validator)->withInput();
        }
        $task = new Task;
        $task->name = Input::get('name');
        $task->description = Input::get('description');
        $task->status = Input::get('status');
        $task->shared = "none";
        $task->owner = Sentry::getUser()->id;
        $task->deadline = date("Y-m-d");
        
        if($task->save()){
            return Redirect::to('tasks/all')->with('message','Your project has been created.');
        }else{
            return Redirect::to('tasks/new')->withErrors($validator)->withInput();
        }
    }
}
