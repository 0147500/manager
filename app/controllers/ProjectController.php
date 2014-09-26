<?php
class ProjectController extends BaseController{
    public function getAll(){
        $project = Project::where('owner', '=', Sentry::getUser()->id)->paginate(6);
        return View::make('project.all')->with('projects', $project);
    }
    public function getDetail($id){
        $project = Project::where('owner', '=', Sentry::getUser()->id)->where('id','=',$id)->first();
        if(empty($project)){
            return View::make('project.404');
        }else{
            return View::make('project.detail')->with('project',$project);    
        }
        
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
        $project->shared = "none";
        $project->owner = Sentry::getUser()->id;
        $project->deadline = date("Y-m-d");
        
        if($project->save()){
            return Redirect::to('projects/all')->with('message','Your project has been created.');
        }else{
            return Redirect::to('projects/new')->withErrors($validator)->withInput();
        }
    }
}
