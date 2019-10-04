@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('admin/assets/examples/css/pages/profile-v2.css')}}">
@endpush

@push('scripts')
    <script src="{{asset('admin/assets/examples/js/pages/profile-v2.js')}}"></script>
@endpush

@section('content')
    <div class="row align-items-start">
        <!-- Left Column -->
        <div class="col-lg-6 col-xl-4 pull-xl-6">
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
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                               role="menuitem">
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
            <div class="card card-shadow" id="chartPie">
                <div class="card-block p-0 p-30 h-full">
                    <div class="font-size-20 text-center">
                        Réseaux sociaux
                    </div>
                    <div class="row no-space mt-40">
                        @if($user->socialsAccounts->count() === 0)
                            <i class="icon wb-close mx-auto d-block" style="font-size: 124px; color: rgba(245, 0, 0, 0.76)"></i>
                        @else
                            <i class="icon wb-check-circle mx-auto d-blodck" style="font-size: 124px; color: rgba(21, 209, 0, 0.79)"></i>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-5">
            <!-- Panel Pie -->
            <div class="card card-shadow" id="chartPie">
                <div class="card-block p-0 p-30 h-full">
                    <div class="font-size-20 text-center">
                        SECURITE
                    </div>
                    <div class="row no-space mt-40">
                        @if($user->password_updated === null)
                            @if(\Carbon\Carbon::make($user->created_at)->addWeeks(3) < \Carbon\Carbon::today())
                                <div class="alert alert-alt alert-danger alert-dismissible" role="alert">
                                    Votre mot de passe a plus de 3 semaines. Il est fortement conseullez de le changer pour plus de sécurité.
                                </div>
                            @elseif(\Carbon\Carbon::make($user->created_at)->addWeeks(2) < \Carbon\Carbon::today())
                                <div class="alert alert-alt alert-warning alert-dismissible" role="alert">
                                    Votre mot de passe a plus de 2 semaines. Il est fortement conseillez de le changer très rapidement pour plus de sécurité.
                                </div>
                            @else
                                <div class="alert alert-alt alert-primary alert-dismissible" role="alert">
                                    Votre mot de passe est à jour. Veuillez le changer régulièrement pour plus de sécurité.
                                </div>
                            @endif
                        @else
                        @endif
                        <button type="button" data-target="#examplePositionCenter" data-toggle="modal" class="btn btn-raised btn-primary mx-auto d-block">
                            Mettre à jour mon mot de passe
                        </button>
                        <div class="modal fade" id="examplePositionCenter" aria-hidden="true" aria-labelledby="examplePositionCenter"
                             role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-center">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title">
                                            Modifier mon mot de passe
                                        </h4>
                                    </div>
                                    <div class="modal-body">

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                            Fermer
                                        </button>
                                        <button type="button" class="btn btn-primary">
                                            Sauvegarder
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Panel Pie -->
        </div>
        <!-- End Right Column -->
    </div>

@endsection