<?php
class ProjectController extends BaseController{
    public function getAll(){
        return View::make('project.all');
    }
    public function getDetail($user, $id){
        
    }
    public function getMy(){
        return View::make('project.my');
    }
    public function getShared(){
        return View::make('project.shared');
    }
    public function getNew(){
        return View::make('project.new');
    }
    public function postNew(){
        $validator = Validator::make(Input::all(),
            array(
                'name' => 'required',
                'description' => 'required|min:8'
            )
        );
        if ($validator->fails())
        {
            return Redirect::to('projects/new')->withErrors($validator)->withInput();
        }
        $project = new Project;
        
        $project->name = Input::get('name');
        $project->description = Input::get('description');
        $project->status = Input::get('status');
        $project->shared = null;
        $project->owner = Sentry::getUser()->id;
        $project->deadline = date();
        
        if($project->save()){
            return Redirect::to('projects/all')->with('message','Your project has been created.');
        }else{
            return Redirect::to('projects/new')->withErrors($validator)->withInput();
        }
        
        
        
        
    }
}
