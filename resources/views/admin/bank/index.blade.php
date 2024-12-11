@extends('layouts.admin')

@section('title', 'Bank Details')

@section('content')

<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item active">Banks</li>
    </ol>
  </nav>
  @include('layouts.alert.msg')
<div class="mb-9">
    <div id="projectSummary" data-list='{"valueNames":["projectName","assigness","start","deadline","task","projectprogress","status","action"],"page":6,"pagination":true}'>
      <div class="row mb-4 gx-6 gy-3 align-items-center">
        <div class="col-auto">
          <h2 class="mb-0">Banks</h2>
        </div>
        <div class="col-auto"><a class="btn btn-primary px-5" href="{{ url('admin/banks/create') }}"><i class="fa-solid fa-plus me-2"></i>Add new bank</a></div>
      </div>
      
      <div class="table-responsive scrollbar">
        <table class="table fs--1 mb-0 border-top border-200">
          <thead>
            <tr>
              <th class="sort align-middle ps-3" scope="col" data-sort="projectName" style="width:10%;">Bank Name</th>
              <th class="sort align-middle ps-3" scope="col" data-sort="assigness" style="width:10%;">ACCOUNT NAME</th>
              <th class="sort align-middle ps-3" scope="col" data-sort="start" style="width:10%;">ACCOUNT NUMBER</th>
              <th class="sort align-middle ps-3" scope="col" data-sort="deadline" style="width:10%;">STAUS</th>
              
              <th class="sort align-middle ps-3" scope="col" style="width:10%;">ACTION</th>
            </tr>
          </thead>
          <tbody class="list" id="table-latest-review-body">

            @forelse ($banks as $bank)
            <tr class="position-static">
                
                <td class="align-middle white-space-nowrap start ps-3 py-4">
                    {{ $bank->bank_name }}
                </td>
                <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                    {{ $bank->account_name }}
                </td>

                <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                    {{ $bank->account_number }}
                </td>
                
                <td class="align-middle white-space-nowrap ps-3 projectprogress py-4">
                    {{ $bank->status }}
                  
                </td>
               
                <td >
                  <a class="btn btn-primary btn-sm" href="{{ url('admin/banks/'.$bank->id.'/edit') }}"><i class="far fa-edit"></i></a>
                  <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this data?')" href="{{ url('admin/banks/'.$bank->id.'/delete') }}"><i class="far fa-trash-alt"></i></a>
                      
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
            {{ $banks->links() }}
        </div>
      </div>


    </div>
  </div>

@endsection