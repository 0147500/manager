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
}
