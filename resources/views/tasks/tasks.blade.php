@if (count($tasks) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>ステータス</th>
                <th>タスク</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->content }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@else
    <div>
        <p>タスクがまだ登録されていません。</p>
    </div>
@endif

{!! link_to_route('tasks.create', '新規タスクの作成', [], ['class' => 'btn btn-primary']) !!}