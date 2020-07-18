@extends('Admin.layouts.master')

@section('title')
  Member
@endsection('title')
@section('content')
<div class="panel-header">
        <div class="header text-center">
          <h2 class="title">Members</h2>
        </div>
      </div>
      <div class="content">
        <div class="row">
        <div class="col-md-3">
            
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
              <div>
                <a href="{{ route('member.add',['id' => $id]) }}" class="btn btn-warning"><i class="now-ui-icons ui-1_simple-add"></i> Add Member</a>
              </div>
              <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>
                        Members Associated with Project
                    </th>
                    <th>
                        Delete
                    </th>
                    </thead>
                    <tbody>
                    @foreach($pro_mem as $mem)
                    <tr>
                        <td>
                        
                        {{ $mem->name }}
                        </td>
                        <td>
                            <a href="{{ route('member.delete',['mid' => $mem->pivot->user_id , 'pid' => $id]) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                <a href="{{ route('admin.projects') }}" class="btn btn-danger">Back</a>
              </div>
            </div>
        </div>
    </div>
    </div>

@endsection('content')