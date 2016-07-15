@extends('layouts.app')

@section('content')

    <!-- Bootstrap 模版... -->
    <div class="container">

        <div class="panel-body">
            <!-- 显示验证错误 -->
            <div class="panel-title">
                <h3>TODO List</h3>

                <table class="table">
                    <tr>
                        <th>任务</th>
                        <th>操作</th>
                    </tr>
                    <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>
                            <form action="/tasks/{{ $task->id }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button>完成任务</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                    </tbody>
                </table>
            </div>
            <!-- 新任务的表单 -->
            <form action="/tasks" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- 任务名称 -->
                <div class="form-group">
                    <label for="task" class="col-sm-3 control-label">Task</label>

                    <div class="col-sm-6">
                        <input type="text" name="name" id="task-name" class="form-control">
                    </div>
                </div>

                <!-- 增加任务按钮-->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default js-submit">
                            <i class="fa fa-plus"></i> 增加任务
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- 代办：目前任务 -->
@endsection