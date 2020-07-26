@extends('Admin.layouts.master')

@section('title')
  Users
@endsection('title')
@section('css')
  <style>
    .table>thead>tr>th{
      font-weight: bold;
    }
  </style>
@endsection('css')
@section('content')
<div class="panel-header">
        <div class="header text-center">
          <h2 class="title">Users</h2>
        </div>
      </div>
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              
              <div class="card-body">
              
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        User Type
                      </th>
                      <th >
                        Edit
                      </th>
                      <th >
                        Delete
                      </th>
                    </thead>
                    <tbody>
                   
                    @foreach($users as $user)
                      <tr>
                        <td>
                          {{ $user->name }}
                        </td>
                        <td>
                          {{ $user->email }}
                        </td>
                        <td>
                          <?php
                                if($user->user_type == 1){
                                  $user1 = 'ADMIN';
                                }
                                else{
                                  $user1 = 'USER';
                                }
                          ?>
                          {{ $user1 }}
                        </td>
                        <td >
                          <form action="{{ route('user.edit',['id' => $user->id]) }}" method='GET'>
                            @csrf
                            <button type="submit" class="btn btn-warning">Edit</button>
                          </form>
                          
                        </td>
                        <td >
                          <form action="{{ route('user.delete',['id' => $user->id]) }}" method='POST'>
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </td>
                      </tr>
                     @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      
@endsection('content')