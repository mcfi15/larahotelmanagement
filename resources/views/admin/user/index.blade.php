@extends('layouts.admin')

@section('title', 'Users')

@section('content')

@if(Auth::user()->role_as == 2)
<script>window.location = "/admin/dashboard";</script>
@endif

<nav class="mb-2" aria-label="breadcrumb">
  <ol class="breadcrumb mb-0">
    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Users</li>
  </ol>
</nav>
@include('layouts.alert.msg')
<div class="mb-9">
    <div id="projectSummary" data-list='{"valueNames":["projectName","assigness","start","deadline","task","projectprogress","status","action"],"page":6,"pagination":true}'>
      <div class="row mb-4 gx-6 gy-3 align-items-center">
        <div class="col-auto">
          <h2 class="mb-0">Users </h2>
        </div>
        <div class="col-auto"><a class="btn btn-primary px-5" href="{{ url('admin/users/create') }}"><i class="fa-solid fa-plus me-2"></i>Add new user</a></div>
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
                  <a class="btn btn-primary btn-sm" href="{{ url('admin/users/'.$user->id.'/edit') }}"><i class="far fa-edit"></i></a>
                  <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this data?')" href="{{ url('admin/users/'.$user->id.'/delete') }}"><i class="far fa-trash-alt"></i></a>
                </td>
               
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