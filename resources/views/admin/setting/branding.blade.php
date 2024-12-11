@extends('layouts.admin')

@section('title', 'Website Settings')

@section('content')

@if(Auth::user()->role_as == 2)
<script>window.location = "/admin/dashboard";</script>
@endif

<div class="mb-9">
    <div class="row g-6">
        
        <div class="col-12 col-xl-12">
            <form action="{{ url('admin/brandings') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="border-bottom border-300 mb-4">
                <h4 class="mb-4">Website Brandings</h4>
                
                <div class="card-body">
                    <div class="row">
                      @include('layouts.alert.msg')
                          <div class="row g-3 align-center">
                              <div class="col-lg-5">
                                  <div class="form-group">
                                      <label for="favicon">Favicon</label>
                                      <br>
                                      <span style=""><small><em>Specify the logo That will apear at the footer of your website</em></small></span>
                                  </div>
                              </div>
                              <div class="col-lg-7">
                                  <div class="form-group">
                                      <div class="form-control-wrap">
                                          <img src="{{ asset($setting->favicon) ?? '' }}" alt="Favicon" width="100" height="100">
                                          <input type="file" class="form-control" id="favicon" name="favicon">
                                          @error('favicon')
                                              <small class="text-danger">{{ $message }}</small>  
                                          @enderror
                                      </div>
                                  </div>
                              </div>
                          </div>
      
                          <div class="row g-3 align-center">
                              <div class="col-lg-5">
                                  <div class="form-group">
                                      <label for="logo">Logo</label>
                                      <br>
                                      <span style=""><small><em>Specify the logo of your website Logo should have a transparent background (300 x 82) recommended.</em></small></span>
                                  </div>
                              </div>
                              <div class="col-lg-7">
                                  <div class="form-group">
                                      <div class="form-control-wrap">
                                          <img src="{{ asset($setting->logo) ?? '' }}" alt="Logo" width="250" height="100">
                                          <input type="file" class="form-control" id="logo" name="logo">
                                          @error('logo')
                                              <small class="text-danger">{{ $message }}</small>  
                                          @enderror
                                      </div>
                                  </div>
                              </div>
                          </div>
      
                          <div class="row g-3 align-center">
                              <div class="col-lg-5">
                                  <div class="form-group">
                                      <label for="footerlogo">Footer Logo</label>
                                      <br>
                                      <span style=""><small><em>Specify the logo of your website Logo should have a transparent background (300 x 82) recommended.</em></small></span>
                                  </div>
                              </div>
                              <div class="col-lg-7">
                                  <div class="form-group">
                                      <div class="form-control-wrap">
                                          <img src="{{ asset($setting->footerlogo) ?? '' }}" alt="Footer Logo" width="250" height="100">
                                          <input type="file" class="form-control" id="footerlogo" name="footerlogo">
                                          @error('footerlogo')
                                              <small class="text-danger">{{ $message }}</small>  
                                          @enderror
                                      </div>
                                  </div>
                              </div>
                          </div>
                         
                    </div>
                  </div>

                  <br><br>
                <div class="text-end mb-6">
                    <div>
                        <button class="btn btn-phoenix-primary">Save Information</button>
                    </div>
                </div>
            </div>
            </form>

        </div>
    </div>
</div>

@endsection