@extends('layouts.app')

@section('admin')
class="active"
@endsection

@section('content')

<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg overlay2" style="padding: 140px 0 60px 0;">
    <h3>Administración</h3>
</div>
<!-- bradcam_area_end -->

<div class="about_area" style="padding: 60px 0 60px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection