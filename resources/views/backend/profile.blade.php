@extends('backend.index')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="border-bottom text-center pb-4">
                                    @if (empty(Auth::user()->foto))
                                        <img src="{{ asset('backend/assets/img/nophoto.jpg') }}" width="" alt="Profile"
                                            class="rounded-circle">
                                    @else
                                        <img src="{{ asset('backend/assets/img') }}/{{ Auth::user()->foto }}" width=""
                                            alt="Profile" class="rounded-circle">
                                    @endif

                                    <div class="mb-3">
                                        <h3>{{ Auth::user()->name }}</h3>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <h5 class="mb-0 me-2 text-muted">{{ Auth::user()->role }}</h5>

                                        </div>
                                    </div>
                                    <p class="w-75 mx-auto mb-3">Seorang Admin dari website kelola perpustakaan </p>

                                </div>
                                <div class="border-bottom py-4">
                                    <p>Skills</p>
                                    <div>
                                        <label class="badge badge-outline-dark">Hand lettering</label>
                                        <label class="badge badge-outline-dark">Information Design</label>
                                        <label class="badge badge-outline-dark">Graphic Design</label>
                                        <label class="badge badge-outline-dark">Web Design</label>
                                    </div>
                                </div>
                                <div class="border-bottom py-4">
                                    <div class="d-flex mb-3">
                                        <div class="progress progress-md flex-grow">
                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="55"
                                                style="width: 55%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="progress progress-md flex-grow">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="75"
                                                style="width: 75%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-4">
                                    <p class="clearfix">
                                        <span class="float-left">
                                            {{ Auth::user()->status }}
                                        </span>
                                        <span class="float-right text-muted">
                                            Status
                                        </span>
                                    </p>

                                    <p class="clearfix">
                                        <span class="float-left">
                                            Mail
                                        </span>
                                        <span class="float-right text-muted">
                                            {{ Auth::user()->email }}
                                        </span>
                                    </p>

                                </div>
                                <button class="btn btn-primary btn-block mb-2">Preview</button>
                            </div>
                            <div class="col-lg-8">
                                <div class="d-block d-md-flex justify-content-between mt-4 mt-md-0">
                                    <div class="text-center mt-4 mt-md-0">
                                        
                                        
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            Change Password
                                        </button>

                                    </div>
                                </div>
                                <div class="mt-4 py-2 border-top border-bottom">
                                    <ul class="nav profile-navbar">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                <i class="ti-user"></i>
                                                Info
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">
                                                <i class="ti-receipt"></i>
                                                Feed
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="profile-feed">
                                    <div class="d-flex align-items-start profile-feed-item">
                                        <img src="{{ asset('backend/assets/img/nophoto.jpg') }}" alt="profile"
                                            class="img-sm rounded-circle">
                                        <div class="ms-4">
                                            <h6>
                                                Mason Beck
                                                <small class="ms-4 text-muted"><i class="ti-time me-1"></i>10
                                                    hours</small>
                                            </h6>
                                            <p>
                                                There is no better advertisement campaign that is low cost and also
                                                successful at the same time.
                                            </p>
                                            <p class="small text-muted mt-2 mb-0">
                                                <span>
                                                    <i class="ti-star me-1"></i>4
                                                </span>
                                                <span class="ms-2">
                                                    <i class="ti-comment me-1"></i>11
                                                </span>
                                                <span class="ms-2">
                                                    <i class="ti-share"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start profile-feed-item">
                                        <img src="{{ asset('backend/assets/img/nophoto.jpg') }}" alt="profile"
                                            class="img-sm rounded-circle">
                                        <div class="ms-4">
                                            <h6>
                                                Willie Stanley
                                                <small class="ms-4 text-muted"><i class="ti-time me-1"></i>10
                                                    hours</small>
                                            </h6>
                                            <img src="" alt="sample" class="rounded mw-100">
                                            <p class="small text-muted mt-2 mb-0">
                                                <span>
                                                    <i class="ti-star me-1"></i>4
                                                </span>
                                                <span class="ms-2">
                                                    <i class="ti-comment me-1"></i>11
                                                </span>
                                                <span class="ms-2">
                                                    <i class="ti-share"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start profile-feed-item">
                                        <img src="{{ asset('backend/assets/img/nophoto.jpg') }}" alt="profile"
                                            class="img-sm rounded-circle">
                                        <div class="ms-4">
                                            <h6>
                                                Dylan Silva
                                                <small class="ms-4 text-muted"><i class="ti-time me-1"></i>10
                                                    hours</small>
                                            </h6>
                                            <p>
                                                When I first got into the online advertising business, I was looking for the
                                                magical combination
                                                that would put my website into the top search engine rankings
                                            </p>
                                            <img src="../../../../images/samples/1280x768/5.jpg" alt="sample"
                                                class="rounded mw-100">
                                            <p class="small text-muted mt-2 mb-0">
                                                <span>
                                                    <i class="ti-star me-1"></i>4
                                                </span>
                                                <span class="ms-2">
                                                    <i class="ti-comment me-1"></i>11
                                                </span>
                                                <span class="ms-2">
                                                    <i class="ti-share"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="{{ route('password.action') }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
            
                            <div class="form-floating">
                                <input type="password" class="form-control mb-3" placeholder="Masukan Password lama"
                                    id="floatingTextarea2" name="old_password" required />
                                <label for="floatingTextarea2">Password Lama </label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control mb-3" placeholder="Masukan Password Baru"
                                    id="floatingTextarea2" name="new_password" required />
                                <label for="floatingTextarea2">Password Baru </label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control mb-3" placeholder="Masukan Password Baru"
                                    id="floatingTextarea2" name="new_password_confirmation" required />
                                <label for="floatingTextarea2">Password Baru Confirmation </label>
                            </div>
                          
                            



                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                        </form>
            </div>
           
        </div>
    </div>
</div>

@endsection