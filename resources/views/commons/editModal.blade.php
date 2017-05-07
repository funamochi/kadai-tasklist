<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#editModal<?php echo $modalnum; ?>">編集</button>

<div class="modal fade" id="editModal<?php echo $modalnum; ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">タスクの編集</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12">
                        {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                        <div class="form-group col-xs-6 col-sm-5">
                            {!! Form::label('status', 'ステータス:') !!}
                            {!! Form::text('status', null, ['class' => 'form-control']) !!}
                        </div>
    
                        <div class="form-group col-xs-12 col-sm-11">                                
                            {!! Form::label('content', 'タスク:') !!}
                            {!! Form::text('content', null, ['class' => 'form-control', 'rows' => '5']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                {!! Form::submit('更新', ['class' => 'btn btn-info']) !!}
        
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>