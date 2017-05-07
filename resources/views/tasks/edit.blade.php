@extends('layouts.app')

@section('content')

    <h1 class="h1">タスク編集ページ</h1>

    @include('commons.error_messages')

    <div class="row">
        <div class="col-xs-12">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                <div class="form-group col-xs-6 col-sm-5">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
        
                <div class="form-group col-xs-12 col-sm-11">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('更新', ['class' => 'btn btn-info']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection