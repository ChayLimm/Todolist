@extends ('layouts.app')

@section ('content')
    <h1>
       Task List
    </h1>

    @foreach($tasks as $task)
    <div>
    <div class="card @if($task->iscompleted()) border-danger @endif " style="margin-bottom :20px;">
  <div class="card-body">
      <p>{{$task->description}}</p> 

   

    

@if($task->iscompleted())
  <form action="/tasks/delete/{{$task->id}}" method="POST">
  @method ('DELETE')
     @csrf
      <button class="btn btn-danger" input="submit">Delete</button>
  </form>
@else
  <form action="/tasks/{{$task->id}}" method="POST">
    
       @method ('PATCH') <!--  convert post into patch -->
       @csrf
        <button class="btn btn-success" input="submit" style="border: 1px solid #1f1f1f;" >Complete </button>
  </form>
@endif

    
    


  </div>
 </div>   
</div>
    @endforeach
<a href="/tasks/create" class="btn btn-primary btn-lg btn-block">New Task</a>
@endsection


