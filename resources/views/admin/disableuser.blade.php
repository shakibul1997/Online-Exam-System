@extends('admin.header')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">All Disable User</div>

               <div class="card-body">
 @if(session('restorestatus'))
            <div class="alert alert-danger">
          {{session('restorestatus')}}
              </div>
        @endif
                  <table class="table table-bordered">
  <thead>
    <tr>
      <th >Name</th>
      <th >Email</th>
      <th >Phone</th>
      <th >Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse($deleted_user as $delete)
    <tr>
      <td>{{$delete->name}}</td>
      <td>{{$delete->email}}</td>
       <td>{{$delete->phone}}</td>
     
     <td>
    <div class="btn-group" role="group" aria-label="Basic example">
  <a href= "{{url('admin/user/restore')}}/{{$delete->id}}" class="btn btn-success">Restore</a></button>
      </td>
      @empty
    <tr class="text-center text-success">
        <td colspan="7">No Data Avaiable</td>
    </tr>
    @endforelse
    </tr>
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
