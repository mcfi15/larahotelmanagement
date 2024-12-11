@extends('layouts.admin')

@section('title', 'Offline Payments')

@section('content')

<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item active">Payments</li>
    </ol>
  </nav>
  @include('layouts.alert.msg')
<div class="mb-9">
    <div id="projectSummary" data-list='{"valueNames":["projectName","assigness","start","deadline","task","projectprogress","status","action"],"page":6,"pagination":true}'>
      <div class="row mb-4 gx-6 gy-3 align-items-center">
        <div class="col-auto">
          <h2 class="mb-0">Payments</h2>
        </div>
        <div class="col-auto"><a class="btn btn-primary px-5" href="{{ url('admin/payments/create') }}"><i class="fa-solid fa-plus me-2"></i>Add new payment</a></div>
      </div>
      
      <div class="table-responsive scrollbar">
        <table class="table fs--1 mb-0 border-top border-200">
          <thead>
            <tr>
              <th class="sort align-middle ps-3" scope="col" data-sort="projectName" style="width:10%;">BOOKING</th>
              <th class="sort align-middle ps-3" scope="col" data-sort="assigness" style="width:10%;">TYPE</th>
              <th class="sort align-middle ps-3" scope="col" data-sort="assigness" style="width:10%;">AMOUNT</th>
              <th class="sort align-middle ps-3" scope="col" data-sort="start" style="width:10%;">PAYMENT TYPE</th>
              <th class="sort align-middle ps-3" scope="col" data-sort="deadline" style="width:10%;">PAYMENT DETAILS</th>
              <th class="sort align-middle ps-3" scope="col" data-sort="projectprogress" style="width:10%;">PAYMENT DATE</th>
              
              <th class="sort align-middle ps-3" scope="col" style="width:10%;">ACTION</th>
            </tr>
          </thead>
          <tbody class="list" id="table-latest-review-body">

            @forelse ($payments as $payment)
            <tr class="position-static">
                <td class="align-middle white-space-nowrap ps-3 projectName py-4">
                  @if ($payment->booking)
                      {{ $payment->booking->created_at }}</td>
                  @else
                      No payment Type Found
                  @endif
                </td>
                
                <td class="align-middle white-space-nowrap start ps-3 py-4">
                    {{ $payment->type }}
                </td>
                <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                    {{ $payment->amount }}
                </td>

                <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                    {{ $payment->payment_type }}
                </td>
                
                <td class="align-middle white-space-nowrap ps-3 projectprogress py-4">
                    {{ $payment->payment_details }}
                  
                </td>

                <td class="align-middle white-space-nowrap ps-3 projectprogress py-4">
                  {{ $payment->payment_date }}
                
              </td>
               
                <td >
                  <a class="btn btn-primary btn-sm" href="{{ url('admin/payments/'.$payment->id.'/edit') }}"><i class="far fa-edit"></i></a>
                  <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this data?')" href="{{ url('admin/payments/'.$payment->id.'/delete') }}"><i class="far fa-trash-alt"></i></a>
                      
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
            {{ $payments->links() }}
        </div>
      </div>
    </div>
  </div>

@endsection