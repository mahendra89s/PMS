@extends('Admin.layouts.master')

@section('title')
  Projects
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
          <h2 class="title">Projects</h2>
        </div>
      </div>
      
<div class="content">
        <div class="row">
        
          <div class="col-md-12">
            <div class="card">
              
              <div class="card-body">
              <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      
                      <a href="{{ route('project.add') }}" class="btn btn-danger text-right"><i class="now-ui-icons ui-1_simple-add"></i> Add Project</a>
                    </div>
              </div>
              
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Project Name
                      </th>
                      <th>
                        Client Name
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        Status
                      </th>
                      <th>
                        Member
                      </th>
                      <th >
                        Edit
                      </th>
                      <th >
                        Delete
                      </th>
                    </thead>
                    <tbody>
                    @foreach($projects as $project)
                      <tr>
                        <td>
                          <a href="{{ route('project.show',['id' => $project->id]) }}">{{ $project->project_name }}</a>
                        </td>
                        <td>
                          {{ $project->client_name }}
                        </td>
                        <td>
                          {{ $project->description }}
                        </td>
                        
                        <td>
                          @php
                            if($project->status == 1)
                              {$status = 'Completed';
                              
                              }
                            else
                            {$status = 'Pending';
                            }
                          @endphp
                          <p class="{{ ($status == 'Completed')? 'text-success' : 'text-danger' }}">{{ $status }}</p>
                        </td>
                        <td>
                          <a href="{{ route('project.member',['id' => $project->id]) }} " class="btn btn-danger">
                          
                          Member
                          </a>
                        </td>
                        <td >
                          <form action="{{ route('project.edit',['id' => $project->id]) }} " method='GET'>
                            @csrf
                            <button type="submit" class="btn btn-warning">Edit</button>
                          </form>
                          
                        </td>
                        <td >
                          <form action="{{ route('project.delete',['id' => $project->id]) }} " method='GET'>
                            
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