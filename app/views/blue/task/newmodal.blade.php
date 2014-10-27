{{ Form::open(array('url' => 'tasks/new')) }}
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Quick task</h4>
      </div>
      <div class="modal-body">
        {{ $errors->first('name') }}
        {{ $errors->first('description') }}
            
            {{ Form::label('name', 'Task name', array('class' => 'control-label'))}}
            {{ Form::text('name',null,array('class' => 'form-control', 'placeholder' => 'Task name', 'required' => ''))}}
            <br>
            {{ Form::label('description', 'Task description', array('class' => 'control-label'))}}
            {{ Form::textarea('description',null,array('class' => 'form-control', 'placeholder' => 'Task description', 'required' => ''))}}
            <br>
            {{ Form::label('project_id', 'Project', array('class' => 'control-label'))}}
            <?php
            $projects = Project::lists('name', 'id');
            array_unshift($projects, 'Please select a project')
            ?>
            {{ Form::select('project_id',$projects, 'Please select a project',array('class'=>'form-control')) }}
            {{ Form::label('status', 'Task status', array('class' => 'control-label'))}}
            {{ Form::select('status', array(
                'planning' => 'Planning',
                'wip' => 'Work in proccess',
                'done' => 'Done'
                ), 'planning',array('class' => 'form-control', 'placeholder' => 'Project description', 'required' => ''))
            }}
            <br> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
{{ Form::close() }}