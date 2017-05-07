@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                @if (count($tasks) > 0)
                    @include('tasks.tasks', ['tasks' => $tasks])
                @else
                    <p>まだタスクが作成されていません。</p>                    
                @endif
                <h2 class="h2">新規タスク作成</h2>
                <div class="form-horizontal">
                {!! Form::open(['route' => 'tasks.store']) !!}
                    <div class="form-group col-xs-6 col-sm-5">
                        {!! Form::label('status', 'ステータス:') !!}
                        {!! Form::textarea('status', old('status'), ['class' => 'form-control', 'rows' => '1']) !!}
                    </div>
                    <div class="form-group col-xs-12 col-sm-11">
                        {!! Form::label('content', 'タスク:') !!}
                        {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '5']) !!}
                    </div>
                    <div class="form-group col-xs-4 col-sm-3">
                    {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                    </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1 class="h1">Welcome to the Tasklist</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection