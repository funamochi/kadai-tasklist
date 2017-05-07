<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal<?php echo $modalnum; ?>">削除</button>

<div class="modal fade" id="deleteModal<?php echo $modalnum; ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">本当に削除しますか？</h3>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-xs-1">id</th>
                            <th class="col-xs-2">ステータス</th>
                            <th class="col-xs-4">タスク</th>
                            <th class="col-xs-3">作成日</th>
                        </tr>
                    </thead>
                <tbody>
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                        <td>{{ $task->created_at }}</td>    
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">キャンセル</button>
                {!! Form::open(array(
                    'route' => array('tasks.destroy', $task->id), 
                    'method' => 'delete',
                    'style' => 'display:inline'
                )) !!}
                    {!! Form::submit('削除', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>