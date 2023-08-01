@extends('dashboard.layouts.main')
@section('container')
@if (session()->has('success'))
  <div class="alert alert-info" role="alert">
    {{ session('success') }}
  </div>
@endif
@if($errors->any())
<div id="error-box">
    @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
</div>
@endif
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-4">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>
        <div style="height: 15px"></div>
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>
        <div style="height: 15px"></div>
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>
@endsection