@extends("layout")

@section("title", "Completed Tasks")

@section("add-task")

    <div class="add-task">
        <a href="#" class="add">
            <i class="fas fa-plus-circle"></i>
            <span>Add Task</span>
        </a>
        <div class="new-task">
            <div class="input-area">
                <input type="text" name="task-name" id="task-name" class="task-name" placeholder="Add your task">
                <input type="text" name="date" id="datepicker" class="due-date" placeholder="Due date" readonly="true">
            </div>
            <div class="submit-area">
                <a href="#" class="submit-btn">Save task</a>
                <a href="#" class="cancel">Cancel</a>
            </div>
        </div>
    </div>

@endsection

@section("content")

    <div class="tasks">
        <div class="note-container finished-task">
            <i class="fas fa-ellipsis-v move-icon"></i>
            <div class="list-content">
                <div class="description">
                    <div class="check-list">
                        <input type="checkbox" id="list01" class="checkbox" checked>
                        <label class="check-label" for="list01">Complete ToDo List</label>
                    </div>
                    <p class="add-info">
                        <span class="deadline">06.08.2019</span>
                        <span class="file"><i class="fas fa-paperclip"></i>3</span>
                    </p>
                </div>
                <div class="features">
                    <input class="star" type="checkbox" id="star01">
                    <label class="star-label" for="star01"><i class="far fa-star"></i></label>
                    <a class="edit" href="#" title="edit"><i class="fas fa-pencil-alt"></i></a>
                </div>
            </div>
        </div>
    </div>

@endsection