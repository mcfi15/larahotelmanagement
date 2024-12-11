@extends('layouts.admin')

@section('title', 'Users Role')

@section('content')

@if(Auth::user()->role_as == 2)
<script>window.location = "/admin/dashboard";</script>
@endif

<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item active">Users Role</li>
    </ol>
  </nav>
  @include('layouts.alert.msg')
<div class="mb-9">
    <div id="projectSummary" data-list='{"valueNames":["projectName","assigness","start","deadline","task","projectprogress","status","action"],"page":6,"pagination":true}'>
      <div class="row mb-4 gx-6 gy-3 align-items-center">
        <div class="col-auto">
          <h2 class="mb-0">Users Role</h2>
        </div>
        
      </div>
      
      <div class="table-responsive scrollbar">
        <table class="table fs--1 mb-0 border-top border-200">
          <thead>
            <tr>
              <th class="sort align-middle ps-3" scope="col" data-sort="projectName" style="width:10%;">PROFILE IMAGE</th>
              <th class="sort align-middle ps-3" scope="col" data-sort="assigness" style="width:10%;">NAME</th>
              <th class="sort align-middle ps-3" scope="col" data-sort="start" style="width:10%;">EMAIL</th>
              <th class="sort align-middle ps-3" scope="col" data-sort="deadline" style="width:10%;">ROLE</th>
              
              <th class="sort align-middle ps-3" scope="col" style="width:10%;">ACTION</th>
            </tr>
          </thead>
          <tbody class="list" id="table-latest-review-body">

            @forelse ($users as $user)
            <tr class="position-static">
                
                
                <td class="align-middle white-space-nowrap start ps-3 py-4">
                  @if ($user->image == '')
                  <img src="{{ asset('uploads/profile/avatar.png') }}" alt="Profile" style="width: 40px;height: 40px; border-radius:10px;">
                  @else
                  <img src="{{  asset($user->image) }}" alt="Profile" style="width: 40px;height: 40px; border-radius:10px;">
                  @endif
                </td>

                <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                    {{ $user->first_name. ' ' . $user->last_name}}
                </td>
                
                <td class="align-middle white-space-nowrap ps-3 projectprogress py-4">
                    {{ $user->email }}
                </td>

                <td class="align-middle white-space-nowrap ps-3 projectprogress py-4">
                  @if ($user->role_as == 0)
                    User
                  @elseif ($user->role_as == 1)
                    Super Admin
                  @elseif ($user->role_as == 2)
                    Sub Admin
                  @else
                    No User Not found
                  @endif
                </td>
               
                <td >
                  <a class="btn btn-primary btn-sm" href="#" data-bs-toggle="modal" data-bs-target="#editRoleModal{{ $user->id }}"><i class="far fa-edit"></i></a>
                </td>
                
                
                <div class="modal fade" id="editRoleModal{{ $user->id }}" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Change User Role</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1"></span></button>
                      </div>
                      <form action="{{ url('admin/roles/'.$user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                          <div class="col-sm-6 col-md-12">
                            <div class="form-floating">
                                <select class="form-select" id="role_as" name="role_as">
                                    <option value="">-- Select Role --</option>
                                    <option value="1">Super Admin</option>
                                    <option value="2">Sub Admin</option>
                                    <option value="0">User</option>
                                </select>
                                <label for="role_as">Role</label>
                            </div>
                            @error('role_as')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                          </div>
                        </div>
                        <div class="modal-footer"><button class="btn btn-primary" type="submit">Change</button><button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div>
                      </form>
                    </div>
                  </div>
                </div>
              </tr>
            @empty

             <tr>
              <td>
                No records found
              </td>
             </tr>
                
            @endforelse
            
            
          </tbody>
        </table>
      </div>
      <div class="d-flex flex-wrap align-items-center justify-content-between py-3 pe-0 fs--1 border-bottom border-200">
        <div class="d-flex">
            {{ $users->links() }}
        </div>
      </div>
    </div>
  </div>

@endsection