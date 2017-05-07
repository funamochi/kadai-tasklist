
    <h1 class="h1">{{ $user->name }}のタスク</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-xs-1">id</th>
                    <th class="col-xs-2">ステータス</th>
                    <th class="col-xs-4">タスク</th>
                    <th class="col-xs-3">作成日</th>
                    <th class="col-xs-1"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                        <td>{{ $task->created_at }}</td>
                        <td><span class="btn-group" style="display:inline">
                            @if (Auth::user()->id == $task->user_id)
                                    @include('commons.editModal', ['modalnum' => $task->id])
                            @endif                            
                            @if (Auth::user()->id == $task->user_id)
                                    @include('commons.deleteModal', ['modalnum' => $task->id])
                            @endif
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

