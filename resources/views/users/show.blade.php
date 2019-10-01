@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('admin/assets/examples/css/pages/profile-v2.css')}}">
@endpush

@push('scripts')
    <script src="{{asset('admin/assets/examples/js/pages/profile-v2.js')}}"></script>
@endpush

@section('content')
    <div class="row">
        <!-- Left Column -->
        <div class="col-lg-6 col-xl-3 pull-xl-6">
            <div class="user-info card card-shadow text-center">
                <div class="user-base card-block">
                    <a class="avatar img-bordered avatar-100" href="javascript:void(0)">
                        <img src="{{$user->gravatar}}" alt="...">
                    </a>
                    <h4 class="user-name">
                        {{$user->last_name}} {{$user->first_name}}
                    </h4>
                    <p class="user-job">Art director</p>
                    <p class="user-location">Washington, d.c.</p>
                </div>

                <div class="user-actions">
                    <div class="dropdown">
                        <button class="btn btn-primary btn-round btn-outline dropdown-toggle" data-toggle="dropdown" id="userConnect" type="button" name="userConnect">
                            Options
                        </button>
                        <div class="dropdown-menu" aria-labelledby="userConnect" role="menu">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" role="menuitem">
                                Deconnexion
                            </a>
                        </div>
                    </div>
                </div>

                <div class="user-stats">
                    <a class="user-stat counter" href="javascript:void(0)">
                        <span class="counter-number font-size-16">260</span>
                        <span class="counter-label inline-block ml-5">Following</span>
                    </a>
                    <a class="user-stat counter p-15" href="javascript:void(0)">
                        <span class="counter-number font-size-16">1.8M</span>
                        <span class="counter-label inline-block ml-5">Followers</span>
                    </a>
                </div>

                <div class="user-socials list-group list-group-full">
                    <a class="list-group-item justify-content-center" href="javascript:void(0)">
                        <i class="icon bd-twitter"></i> twitter.com/example
                    </a>
                    <a class="list-group-item justify-content-center" href="javascript:void(0)">
                        <i class="icon bd-facebook"></i> facebook.com/example
                    </a>
                    <a class="list-group-item justify-content-center" href="javascript:void(0)">
                        <i class="icon bd-dribbble"></i> dribbble.com/example
                    </a>
                    <a class="list-group-item justify-content-center" href="javascript:void(0)">
                        <i class="icon bd-github"></i> github.com/example
                    </a>
                </div>

                <div class="card-footer">
                    <a href="#">
                        <i class="icon wb-print"></i> Export page as PDF
                    </a>
                </div>
            </div>
            <!-- End User Info -->
            <!-- Friend List -->
            <div class="user-friends card card-shadow">
                <div class="card-block">
                    <h4 class="card-title mb-20">
                        Friends
                        <span>210</span>
                    </h4>
                    <ul class="list-group list-group-full m-0">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="pr-20">
                                    <a class="avatar avatar-online" href="javascript:void(0)">
                                        <img class="img-fluid" src="{{asset('admin/portraits/1.jpg')}}" alt="...">
                                        <i></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-5 hover">
                                        Herman Beck
                                    </h5>
                                    <small>CEO</small>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="pr-20">
                                    <a class="avatar avatar-busy" href="javascript:void(0)">
                                        <img class="img-fluid" src="{{asset('admin/portraits/2.jpg')}}" alt="...">
                                        <i></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-5 hover">
                                        Mary Adams
                                    </h5>
                                    <small>CIO</small>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="pr-20">
                                    <a class="avatar avatar-off" href="javascript:void(0)">
                                        <img class="img-fluid" src="{{asset('admin/portraits/3.jpg')}}" alt="...">
                                        <i></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-5 hover">
                                        Caleb Richards
                                    </h5>
                                    <small>CTO</small>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="pr-20">
                                    <a class="avatar avatar-away" href="javascript:void(0)">
                                        <img class="img-fluid" src="{{asset('admin/portraits/4.jpg')}}" alt="...">
                                        <i></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-5 hover">
                                        June Lane
                                    </h5>
                                    <small>CVO</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Friends List -->
        </div>
        <!-- End Left Column -->

        <!-- Right Column -->
        <div class="col-lg-6 col-xl-3 ">
            <div class="card user-visitors">
                <div class="card-header card-header-transparent p-20">
                    <h4 class="card-title mb-0">Visitors</h4>
                </div>
                <div class="card-block">
                    <ul class="list-group list-group-full">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="pr-20">
                                    <a class="avatar avatar-online" href="javascript:void(0)">
                                        <img class="img-fluid" src="{{asset('admin/portraits/11.jpg')}}">
                                        <i></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-5 hover">Dan Cederholm
                                    </h5>
                                    <small>Co-founder of Company</small>
                                </div>
                                <div class="pt-10 pb-10 p-0">
                                    <button class="btn btn-icon btn-primary btn-outline btn-round btn-xs" type="button"
                                            name="button">
                                        <i class="icon icon-xs wb-plus mr-0"></i>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="pr-20">
                                    <a class="avatar" href="javascript:void(0)">
                                        <img class="img-fluid" src="{{asset('admin/portraits/12.jpg')}}">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-5 hover">Oykun Yilmaz</h5>
                                    <small>Co-founder of Company</small>
                                </div>
                                <div class="pt-10 pb-10 p-0">
                                    <button class="btn btn-icon btn-primary btn-outline btn-round btn-xs" type="button"
                                            name="button">
                                        <i class="icon icon-xs wb-plus mr-0"></i>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="pr-20">
                                    <a class="avatar" href="javascript:void(0)">
                                        <img class="img-fluid" src="{{asset('admin/portraits/10.jpg')}}">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-5 hover">Caleb Richards</h5>
                                    <small>Co-founder of Company</small>
                                </div>
                                <div class="pt-10 pb-10 p-0">
                                    <button class="btn btn-icon btn-primary btn-outline btn-round btn-xs" type="button"
                                            name="button">
                                        <i class="icon icon-xs wb-plus mr-0"></i>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="pr-20">
                                    <a class="avatar" href="javascript:void(0)">
                                        <img class="img-fluid" src="{{asset('admin/portraits/1.jpg')}}">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-5 hover">June Lane</h5>
                                    <small>Co-founder of Company</small>
                                </div>
                                <div class="pt-10 pb-10 p-0">
                                    <button class="btn btn-icon btn-primary btn-outline btn-round btn-xs" type="button"
                                            name="button">
                                        <i class="icon icon-xs wb-plus mr-0"></i>
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="text-center">
                        <button class="btn btn-round btn-outline btn-primary" type="button" name="button">See all
                            <span>(19)</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card user-may-know">
                <div class="card-header card-header-transparent p-20">
                    <h4 class="card-title mb-5">People you may know</h4>
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="#">Jackie Tran Anh</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Designer
                        </li>
                    </ol>
                </div>
                <div class="card-block">
                    <div class="avatar avatar-online avatar-lg m-5">
                        <img src="{{asset('admin/portraits/2.jpg')}}" alt=""/>
                        <i></i>
                    </div>
                    <div class="avatar avatar-off avatar-lg m-5">
                        <img src="{{asset('admin/portraits/3.jpg')}}" alt=""/>
                        <i></i>
                    </div>
                    <div class="avatar avatar-busy avatar-lg m-5">
                        <img src="{{asset('admin/portraits/4.jpg')}}" alt=""/>
                        <i></i>
                    </div>
                    <div class="avatar avatar-away avatar-lg m-5">
                        <img src="{{asset('admin/portraits/1.jpg')}}" alt=""/>
                        <i></i>
                    </div>
                    <div class="avatar avatar-online avatar-lg m-5">
                        <img src="{{asset('admin/portraits/5.jpg')}}" alt=""/>
                        <i></i>
                    </div>
                    <div class="avatar avatar-away avatar-lg m-5">
                        <img src="{{asset('admin/portraits/1.jpg')}}" alt=""/>
                        <i></i>
                    </div>
                    <div class="avatar avatar-away avatar-lg m-5">
                        <img src="{{asset('admin/portraits/1.jpg')}}" alt=""/>
                        <i></i>
                    </div>
                    <div class="avatar avatar-away avatar-lg m-5">
                        <img src="{{asset('admin/portraits/1.jpg')}}" alt=""/>
                        <i></i>
                    </div>
                </div>
                <div class="card-block">
                    <div class="input-search">
                        <button class="input-search-btn" type="button" name="button">
                            <i class="icon wb-search" aria-hidden="true"></i>
                        </button>
                        <input class="form-control" type="text" name="search" placeholder="Search...">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Right Column -->
    </div>

@endsection