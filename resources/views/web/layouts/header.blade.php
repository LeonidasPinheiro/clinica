<!-- Start Navbar Area -->
@php
    $settingValue = getSettingValue();
@endphp
<header class="position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-1 col-4">
                <a href="{{ url('/') }}" class="header-logo">
                    <img src="{{ getLogoUrl() }}" alt="Infy HMS" class="img-fluid" />
                </a>
            </div>
            <div class="col-lg-11 col-8 ps-0">
                <nav class="navbar navbar-expand-xl navbar-light justify-content-end py-0">
                    <button class="navbar-toggler border-0 p-0" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav align-items-center py-2 py-lg-0">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">
                                    {{ __('messages.web_home.home') }}
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('servicos') ? 'active' : '' }}" href="{{ route('our-services') }}">
                                    {{ __('messages.web_home.services') }}
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('medicos') }}"
                                   class="nav-link {{ Request::is('medicos') ? 'active' : '' }}">{{ __('messages.web_home.doctors') }}</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('sobre') }}"
                                   class="nav-link {{ Request::is('sobre') ? 'active' : '' }}">{{ __('messages.web_menu.about') }}</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('contato') }}"
                                   class="nav-link {{ Request::is('contato') ? 'active' : '' }}">{{ __('messages.web_home.contact') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" {{ Request::is('politica-privacidade', 'politica-privacidade') ? 'active' : '' }}>
                                    {{ __('messages.web_menu.our_features') }}
                                    <i class="fa-solid fa-angle-down ms-1"></i>
                                </a>
                                <ul class="nav submenu">
                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::is('agendamento') ? 'active' : '' }}" href="{{ route('agendamento') }}">
                                            {{ __('messages.web_menu.appointment') }}
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link {{ Request::is('jornada-trabalho') ? 'active' : '' }}" href="{{ route('jornada-trabalho') }}">
                                            {{ __('messages.web_menu.working_hours') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::is('testemunhos') ? 'active' : '' }}" href="{{ route('testemunhos') }}">
                                            {{ __('messages.web_home.testimonials') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::is('termos-servicos') ? 'active' : '' }}" href="{{ route('termos-servicos') }}">
                                            {{ __('messages.web_home.terms_of_service') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::is('politica-privacidade') ? 'active' : '' }}" href="{{ route('politica-privacidade') }}">
                                            {{ __('messages.web_home.privacy_policy') }}
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <div class="text-xl-end header-btn-grp ms-xl-3">
                            @if(Auth::user())
                                @role('Admin')
                                    <a href="{{ route('dashboard') }}"
                                       data-turbo="false"
                                       class="btn btn-success me-2 mb-3 mb-xl-0">{{ __('messages.dashboard.dashboard') }}
                                    </a>
                                @endrole
                                @role('Patient')
                                    <a href="{{url('patient/my-cases') }}"
                                       data-turbo="false"
                                       class="btn btn-success me-2 mb-3 mb-xl-0">{{ __('messages.dashboard.dashboard') }}
                                    </a>
                                @endrole
                                @role('Doctor')
                                    <a href="{{ url('employee/doctor') }}"
                                       data-turbo="false"
                                       class="btn btn-success me-2 mb-3 mb-xl-0">{{ __('messages.dashboard.dashboard') }}
                                    </a>
                                @endrole
                                @role('Nurse')
                                    <a href="{{ url('bed-types') }}"
                                       data-turbo="false"
                                       class="btn btn-success me-2 mb-3 mb-xl-0">{{ __('messages.dashboard.dashboard') }}
                                    </a>
                                @endrole
                                @role('Receptionist')
                                    <a href="{{ url('agendamento') }}"
                                       data-turbo="false"
                                       class="btn btn-success me-2 mb-3 mb-xl-0">{{ __('messages.dashboard.dashboard') }}
                                    </a>
                                @endrole
                                @role('Pharmacist')
                                    <a href="{{ url('employee/doctor') }}"
                                       data-turbo="false"
                                       class="btn btn-success me-2 mb-3 mb-xl-0">{{ __('messages.dashboard.dashboard') }}
                                    </a>
                                @endrole
                                @role('Accountant')
                                    <a href="{{ url('accounts') }}"
                                       data-turbo="false"
                                       class="btn btn-success me-2 mb-3 mb-xl-0">{{ __('messages.dashboard.dashboard') }}
                                    </a>
                                @endrole
                                @role('Case Manager')
                                    <a href="{{ url('employee/doctor') }}"
                                       data-turbo="false"
                                       class="btn btn-success me-2 mb-3 mb-xl-0">{{ __('messages.dashboard.dashboard') }}
                                    </a>
                                @endrole
                            @else
                                <a href="{{ route('login') }}"
                                   data-turbo="false"
                                        class="btn btn-success me-2 mb-3 mb-xl-0">
                                    Acessar
                                </a>
                            @endif
                                <a href="{{ route('agendamento') }}" class="btn btn-primary mb-3 mb-xl-0">
                                    {{ __('messages.web_home.book_appointment') }}
                                </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- End Navbar Area -->
