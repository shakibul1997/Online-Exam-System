@extends('admin.header')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">All User</div>

               <div class="card-body">
          @if(session('deletestatus'))
            <div class="alert alert-danger">
          {{session('deletestatus')}}
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
    @forelse($all_users as $user)
    <tr>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
       <td>{{$user->mobile}}</td>
     
     <td>
    <div class="btn-group" role="group" aria-label="Basic example">
  <a href= "{{url('admin/viewprofile')}}/{{$user->id}}" class="btn btn-success"> Profile</a></button>
  <a href= "{{url('delete/user')}}/{{$user->id}}" class="btn btn-danger">Remove</a></button>
</div>

      </td>
      @empty
    <tr class="text-center text-success">
        <td colspan="7">No Data Avaiable</td>
    </tr>
    @endforelse
    </tr>
  </tbody>
</table>
{{$all_users->links()}}
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
