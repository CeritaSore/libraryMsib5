@extends('backend.index')
@section('content')
    <div class="content-wrapper ">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Welcome @if (empty(Auth::user()->name))
                            @else
                                {{ Auth::user()->name }}
                            @endif
                        </h3>
                        <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span
                                class="text-primary">3 unread alerts!</span></h6>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Todays Income</h4>
                        <div class="d-flex justify-content-between">
                            <p class="text-muted">Avg. Session</p>
                            <p class="text-muted">max: 40</p>
                        </div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-info w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Total Revenue</h4>
                        <div class="d-flex justify-content-between">
                            <p class="text-muted">Avg. Session</p>
                            <p class="text-muted">max: 120</p>
                        </div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Pending Product</h4>
                        <div class="d-flex justify-content-between">
                            <p class="text-muted">Avg. Session</p>
                            <p class="text-muted">max: 54</p>
                        </div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-danger w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sales</h4>
                        <div class="d-flex justify-content-between">
                            <p class="text-muted">Avg. Session</p>
                            <p class="text-muted">max: 143</p>
                        </div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-warning w-25" role="progressbar" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
