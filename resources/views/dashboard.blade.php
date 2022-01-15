<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight p-3 mb-2 bg-warning text-dark bg-opacity-75 fw-bold">
        {{ __('Dashboard') }}
    </h2>
</x-slot>
<style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class=" overflow-hidden shadow-xl sm:rounded-lg p-5 bg-warning bg-opacity-50">
            <div class="flex">
                <div class="flex-auto text-2xl mb-4 text-dark fw-bolder" >Tasks Lists</div>
                
                <div class="flex-auto text-right mt-2 ">
                    <a href="/task" class="bg-blue-500 hover:bg-blue-700 text font-bold py-2 px-4 rounded btn btn-success btn-sm" role="button">Add new Tasks</a> 
                </div>
            </div>
            <table class="w-full text-md rounded mb-4 table table-hover p-3 mb-2 bg-light text-dark bg-opacity-25">
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
                            
                            <a href="/task/{{$task->id}}" name="edit" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text py-1 px-2 rounded focus:outline-none focus:shadow-outline btn btn-outline-secondary">Edit</a>
                            <form action="/task/{{$task->id}}" class="inline-block">
                                <button type="submit" name="delete" formmethod="POST" class="text-sm bg-red-500 hover:bg-red-700 text py-1 px-2 rounded focus:outline-none focus:shadow-outline btn btn-outline-danger">Delete</button>
                                {{ csrf_field() }}
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>
</x-app-layout>