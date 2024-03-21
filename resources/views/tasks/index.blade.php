@extends ('layouts.app')

@section ('content')
    <h1>
       Task List
    </h1>

    @foreach($tasks as $task)
    <div>
    <div class="card @if($task->iscompleted()) border-success @endif " style="margin-bottom :20px;">
  <div class="card-body">
      <p>{{$task->description}}</p> 

   

    <form action="/tasks/{{$task->id}}" method="POST">
    
    @method ('PATCH') <!--  convert post into patch -->
    @csrf
      <button class="btn @if($task->iscompleted()) btn-success @endif" input="submit" style="border: 1px solid #1f1f1f;" >Complete</button>
    </form>

  </div>
 </div>   
</div>
    @endforeach
<a href="/tasks/create" class="btn btn-primary btn-lg btn-block">New Task</a>
@endsection


