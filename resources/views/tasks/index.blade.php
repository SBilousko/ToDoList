@extends("layouts.app")

@section("title", "All Tasks")

@section("add-task")

    <div class="add-task">
        <a href="#" class="add">
            <i class="fas fa-plus-circle"></i>
            <span>Add Task</span>
        </a>
        <div class="new-task">
            {{-- <form action="{{ url('task') }}#" method="POST"> --}}
                {{-- {{ csrf_field() }} --}}
                <div class="input-area">
                    <input type="text" name="name" id="task-name" class="task-name" placeholder="Add your task">
                    <input type="text" name="date" id="datepicker" class="due-date" placeholder="Due date" readonly="true">
                </div>
                <div class="submit-area">
                    {{-- <button type="submit" id="submit-btn"> --}}
                        <a href="#" id="submit-btn" class="submit-btn">Save task</a>
                        {{-- Save task --}}
                    {{-- </button> --}}
                    {{-- <button> --}}
                        <a href="#" class="cancel">Cancel</a>
                    {{-- </button> --}}
                </div>
            {{-- </form> --}}
        </div>
    </div>

@endsection

@section("content")

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="tasks">
        @foreach ($tasks as $task)
            <div class="note-container @if ($task->favourite) highlighted-task @endif @if ($task->done) finished-task @endif">
                <i class="fas fa-ellipsis-v move-icon"></i>
                <div class="list-content">
                    <div class="description">
                        <div class="check-list">
                            <input type="checkbox" id="{{ $task->id }}" class="checkbox" @if ($task->done) checked @endif>
                            <label class="check-label" for="{{ $task->id }}">{{ $task->title }}</label>
                        </div>
                        <p class="add-info">
                            <span class="deadline">{{ $task->deadline }}</span>
                            {{-- <span class="file"><i class="fas fa-paperclip"></i>3</span> --}}
                        </p>
                    </div>
                    <div class="features">
                        <input class="star" type="checkbox" id="star01">
                        <label class="star-label" for="star01"><i class="far fa-star @if ($task->favourite) fas @endif"></i></label>
                        <a class="edit" href="#" title="edit"><i class="fas fa-pencil-alt"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endsection