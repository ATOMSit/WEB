@extends('layouts.app')

@section('title')
    Profil d'utilisateur
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('admins.users.edit',$user) }}
@endsection

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
        </div>
        <div class="col-lg-6 col-xl-8 pull-xl-6">
            <div class="panel">
                <div class="panel-body container-fluid">
                    <div class="example-wrap">
                        <h4 class="example-title">
                            MODIFIER MES INFORMATIONS
                        </h4>
                        <div class="example">
                            {!! form_start($form) !!}
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="form-control-label" for="inputBasicFirstName">
                                        Prénom
                                    </label>
                                    {!! form_widget($form->first_name) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-control-label" for="inputBasicLastName">
                                        Nom de famille
                                    </label>
                                    {!! form_widget($form->last_name) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label" for="inputBasicEmail">
                                    Adresse mail
                                </label>
                                {!! form_widget($form->email) !!}
                            </div>
                            <div class="form-group justify-content-end">
                                {!! form_widget($form->submit,$options = ['attr' => ['class' => 'btn btn-raised btn-primary btn-block']]) !!}
                            </div>
                            {!! form_end($form,false) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection