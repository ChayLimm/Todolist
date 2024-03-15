@extends('layouts.app')

@section('content')
    <h1>New Tasks</h1>
    <form method="POST" action="/tasks">
        <div class="form-group">
            <label for="description">Tasks Description</label>
           <input type="text" class="forms-control" name="description">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Create Task
            </button>
        </div>
    </form>
@endsection
 