
@extends('User.layouts.master')
@section('title')
    Manage Task
@endsection('title')
@section('css')

    <link rel="stylesheet" href="{{ asset('assets/user/css/task-show.css')}}" />
@endsection('css')
@section('content')
<div class="container my-5">
        <div class="row head">
            <div class="md-12">
                <div class="header px-3">
                    Tasks :
                    
                </div> 
                <div class="addbtn">
                    <a class="btn" id="btn1" href={{ route('task.add',['pid' => $id]) }}><i class="fas fa-plus"></i> Add Task</a>
                </div>
                
            </div>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row">
        <div class=" col-md-8">
            @foreach($tasks as $task)
                <div class="card ">
                    
                    <div class="card-body">
                        <div class="prjname px-3 pt-2 mb-3">
                            <h1>{{ $task->title }}</h1>
                        </div>
                        <div class="prjdetails px-3 py-2">
                            <h5>{{ $task->Task_description }} </h5>
                        </div> 
                        <div class="status mt-4">
                            @php
                                $user = $task->user;
                            @endphp
                            <a class="btn">{{ $user->name }}</a>
                            <a class="btn" id="btn1">Manage Task</a>
                        </div>
                    </div>
                </div>
            @endforeach
                
            </div>
            
            <div class=" col-md-3">
                <div class="card ">
                    <div class="card-body">
                        <div class=" px-3 pt-2 mb-3">
                        <h3>Members</h3>
                        <ul>
                        @foreach($mem as $m)
                            <li><h5>{{ $m->name }}</h5></li>
                        @endforeach
                        </ul>
                        </div>
                        
                       
                    </div>
                </div>
            </div>

        </div>
    </div>

    
@endsection('content')