@extends('backend.layouts.master')

@section('title')
DASHBOARD
@endsection()


@section('content')
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <!-- Layout Demo -->
            {{ Auth::user()->name }}
              <br>
            {{$msg}}
    <!--/ Layout Demo -->
  </div>
  <!-- / Content -->


  <!-- Footer -->
  <footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl">
    	<div class="text-center text-muted"><h6>Footer section</h6></div>
    </div>
  </footer>
  <!-- / Footer -->
  <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
@endsection()



@section('scripts')
@endsection()