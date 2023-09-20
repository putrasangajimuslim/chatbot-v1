@extends('layouts.app')

@section('title')
    {{ __('Dashboard')}} | {{ config('app.name') }}
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Welcome Admin</h3>
        </div>
        <div class="col-12 col-xl-4">
        <div class="justify-content-end d-flex">
          <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
            <button class="btn btn-sm btn-light bg-white" type="button" id="">
            Today (10 Jan 2021)
            </button>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
@endsection