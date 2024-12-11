@extends('layouts.admin')

@section('title', 'Website Settings')

@section('content')

@if(Auth::user()->role_as == 2)
<script>window.location = "/admin/dashboard";</script>
@endif

<div class="mb-9">
    <div class="row g-6">
        @include('layouts.alert.msg')
        <div class="col-12 col-xl-12">
            <form action="{{ url('admin/settings') }}" method="POST">
                @csrf
            <div class="border-bottom border-300 mb-4">

                
                <div class="mb-6">
                    <h4 class="mb-4">Website Information</h4>
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="website_name"
                                    name="website_name"
                                    value="{{ $setting->website_name ?? ''}}"
                                        type="text" placeholder="Website Name" /><label class="text-700 form-icon-label"
                                        for="website_name">WEBSITE NAME</label></div><span
                                    class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                    @error('website_name')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="website_url"
                                    name="website_url"
                                    value="{{ $setting->website_url ?? ''}}"
                                        type="text" placeholder="Website URL" /><label class="text-700 form-icon-label"
                                        for="website_url">WEBSITE URL</label></div><span
                                    class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                    @error('website_url')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="email"
                                    name="email"
                                    value="{{ $setting->email ?? ''}}"
                                        type="email" placeholder="Email" /><label class="text-700 form-icon-label"
                                        for="email">ENTER YOUR EMAIL</label></div><span
                                    class="fa-solid fa-envelope text-900 fs--1 form-icon"></span>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="email2"
                                    name="email2"
                                    value="{{ $setting->email2 ?? ''}}"
                                        type="email" placeholder="Email 2" /><label class="text-700 form-icon-label"
                                        for="email2">ENTER ANOTHER EMAIL</label></div><span
                                    class="fa-solid fa-envelope text-900 fs--1 form-icon"></span>
                                    @error('email2')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="phone"
                                    name="phone"
                                    value="{{ $setting->phone ?? '' }}"
                                        type="tel" placeholder="Phone" /><label class="text-700 form-icon-label"
                                        for="phone">ENTER YOUR PHONE</label></div><span
                                    class="fa-solid fa-phone text-900 fs--1 form-icon"></span>
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="phone2"
                                    name="phone2"
                                    value="{{ $setting->phone2 ?? '' }}"
                                        type="tel" placeholder="Phone" /><label class="text-700 form-icon-label"
                                        for="phone2">ENTER ANOTHER PHONE</label></div><span
                                    class="fa-solid fa-phone text-900 fs--1 form-icon"></span>
                                    @error('phone2')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating">
                                    <select class="form-select" id="country" name="country">
                                        <option value="{{ $setting->country ?? '' }}">{{ $setting->country ?? '' }}</option>
                                        @foreach ($countries as $item)
                                            <option value="{{ $item->name }}" >{{ $item->name }}</option> 
                                        @endforeach
                                    </select>
                                    <label for="country">Select Country</label>
                                </div>
                            </div>
                            @error('country')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>
                        
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="zipcode"
                                    name="zipcode"
                                    value="{{ $setting->zipcode ?? ''}}"
                                        type="text" placeholder="ZIPCODE" /><label class="text-700 form-icon-label"
                                        for="zipcode">ZIPCODE</label></div><span
                                    class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                    @error('zipcode')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><textarea class="form-control form-icon-input" id="address"
                                    name="address"
                                        style="height: 115px;" placeholder="address">{{ $setting->address ?? ''}}</textarea><label
                                        class="text-700 form-icon-label" for="address">Address</label></div><span
                                    class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                    @error('address')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <h4 class="mb-4">Meta Information</h4>
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="page_title"
                                    name="page_title"
                                    value="{{ $setting->page_title ?? ''}}"
                                        type="text" placeholder="Page Title" /><label class="text-700 form-icon-label"
                                        for="page_title">PAGE TITLE</label></div><span
                                    class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                    @error('page_title')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="meta_title"
                                    name="meta_title"
                                    value="{{ $setting->meta_title ?? ''}}"
                                        type="text" placeholder="Meta Tilte" /><label class="text-700 form-icon-label"
                                        for="meta_title">META TITLE</label></div><span
                                    class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                    @error('meta_title')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                        
                        
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><textarea class="form-control form-icon-input" id="meta_keywords"
                                    name="meta_keywords"
                                        style="height: 115px;" placeholder="Meta Keywords">{{ $setting->meta_keywords ?? ''}}</textarea><label
                                        class="text-700 form-icon-label" for="meta_keywords">META KEYWORDS</label></div><span
                                    class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                    @error('meta_keywords')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><textarea class="form-control form-icon-input" id="meta_description"
                                    name="meta_description"
                                        style="height: 115px;" placeholder="Meta Description">{{ $setting->meta_description ?? ''}}</textarea><label
                                        class="text-700 form-icon-label" for="meta_description">META DESCRIPTION</label></div><span
                                    class="fa-solid fa-circle-info text-900 fs--1 form-icon"></span>
                                    @error('meta_description')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <h4 class="mb-4">Social Information</h4>
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="facebook"
                                    name="facebook"
                                    value="{{ $setting->facebook ?? ''}}"
                                        type="text" placeholder="Facebook" /><label class="text-700 form-icon-label"
                                        for="facebook">FACEBOOK</label></div><span
                                    class="fab fa-facebook-square text-900 fs--1 form-icon"></span>
                                    @error('facebook')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="twitter"
                                    name="twitter"
                                    value="{{ $setting->twitter ?? ''}}"
                                        type="text" placeholder="Twitter" /><label class="text-700 form-icon-label"
                                        for="twitter">Twitter</label></div><span
                                    class="fab fa-twitter-square text-900 fs--1 form-icon"></span>
                                    @error('twitter')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                        
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="instagram"
                                    name="instagram"
                                    value="{{ $setting->instagram ?? ''}}"
                                        type="text" placeholder="Instagram" /><label class="text-700 form-icon-label"
                                        for="instagram">INSTAGRAM</label></div><span
                                    class="fab fa-instagram-square text-900 fs--1 form-icon"></span>
                                    @error('instagram')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-icon-container">
                                <div class="form-floating"><input class="form-control form-icon-input" id="linkedin"
                                    name="linkedin"
                                    value="{{ $setting->linkedin ?? ''}}"
                                        type="text" placeholder="Linkedin" /><label class="text-700 form-icon-label"
                                        for="linkedin">LINKEDIN</label></div><span
                                    class="fab fa-linkedin text-900 fs--1 form-icon"></span>
                                    @error('linkedin')
                                        <small class="text-danger">{{ $message }}</small>  
                                    @enderror
                            </div>
                        </div>
                        
                    </div>
                </div>
                
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