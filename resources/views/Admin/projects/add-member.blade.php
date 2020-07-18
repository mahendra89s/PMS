@extends('Admin.layouts.master')

@section('title')
  Add Member
@endsection('title')
@section('css')
    
@endsection('css')
@section('content')
<div class="panel-header">
        <div class="header text-center">
          <h2 class="title">Add Member</h2>
        </div>
      </div>
      <div class="content">
        <div class="row">
        <div class="col-md-3">
            
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>
                        Add Member To Project
                    </th>
                    <th>
                        Add
                    </th>
                    </thead>
                    <tbody>
                    @foreach($user as $u)
                    <tr>
                        <td>
                            {{ $u->name }} 
                        </td>
                        <td>
                            <a href="{{ route('member.add1',['id' => $u->id , 'pid' => $project->id]) }}" class="btn btn-info">Add</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                <a href="{{ route('project.member',['id' => $project->id]) }}" class="btn btn-danger">Back</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection('content')