<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight p-3 mb-2 bg-warning text-dark bg-opacity-75 fw-bold">
        {{ __('Dashboard') }}
    </h2>
</x-slot>
<style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: lightblue;
            }
        </style>


<div class="py-12" >

    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8" >
        
        <div class=" overflow-hidden shadow-xl sm:rounded-lg p-5 bg-yellow-ja bg-opacity-50" >

            <nav class="navbar navbar-light">
            <div class="container-fluid">
            <a class="navbar-brand"><h3><strong>Tasks Lists</strong></h3></a>
            
      
            <a href="/task" class="btn btn-success" role="button">Add new Task</a>
            
            </div>
            </nav>

            <!-- <table class="w-full text-md rounded mb-4 table table-hover p-3 mb-2 bg-light text-dark bg-opacity-25">
                <thead>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Task</th>
                    <th class="text-left p-3 px-5">Actions</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach(auth()->user()->tasks as $task)
                    <tr class="border-b hover:bg-orange-100">
                        <td class="p-3 px-5 ">
                            {{$task->description}}
                        </td>
                        <td class="p-3 px-5 ">
                            
                            <a href="/task/{{$task->id}}" name="edit" class="btn btn-outline-secondary btn-sm">Edit</a>
                            <form action="/task/{{$task->id}}" class="inline-block">
                                <button type="submit" name="delete" formmethod="POST" class="btn btn-outline-danger btn-sm">Delete</button>
                                {{ csrf_field() }}
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table> -->

            @foreach(auth()->user()->tasks as $task)
            <div class="card border-warning max-w-5xl mx-auto mtb-5" >
            
            <div class="card-content">

            <div class="card-body">

            <div class="text-left"> 
            {{$task->description}}
            <a href="/task/{{$task->id}}" name="edit" style="color:grey;">-</a>
            </div>

            
            
            <div class="text-right"> 
            <form action="/task/{{$task->id}}" class="inline-block">
            <button type="submit" name="delete" formmethod="POST" class="btn btn-outline-success btn-sm">Complete</button>
            {{ csrf_field() }}
            </form>
            </div>
            
            
            
            </div>

            </div>


            </div>
            @endforeach


        </div>
    </div>
    

</div>
</x-app-layout>