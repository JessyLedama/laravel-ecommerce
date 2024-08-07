@extends('layouts.app')
<!-- Carousel Styles -->
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

@section('content')

  @include('admin.sidebar')

  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      
      <h1 class="h2 theme-primary-color">
        Settings
      </h1>
    </div>

    <!-- breadcrumbs -->
    <div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
          <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}" class="theme-primary-color">
              Dashboard
            </a>
          </li>
          
          <li class="breadcrumb-item active theme-secondary-color" aria-current="page">
            Settings
          </li>
        </ol>
      </nav>
    </div>
    
    <div class="container">
      <div class="row  row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <a href="{{ route('admin.company.index') }}">
                  <h5 class="card-title theme-primary-color">
                      Companies

                      <span class="float-right">
                          {{ $counts->companies_count }}
                      </span>
                  </h5>
              </a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <div class="card-body">
              <a href="{{ route('admin.user.index') }}">
                  <h5 class="card-title theme-primary-color">
                      Users

                      <span class="float-right">
                          {{ $counts->users_count }}
                      </span>
                  </h5>
              </a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <div class="card-body">
              <a href="{{ route('admin.theme.index') }}">
                  <h5 class="card-title theme-primary-color">
                      Themes

                      <span class="float-right">
                          {{ $counts->themes_count }}
                      </span>
                  </h5>
              </a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <div class="card-body">
              <a href="{{ route('admin.slide.index') }}">
                <h5 class="card-title theme-primary-color">
                    Slideshows

                    <span class="float-right">
                        {{ $counts->slideshows_count }}
                    </span>
                </h5>
              </a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <div class="card-body">
              <a href="{{ route('admin.status.index') }}">
                <h5 class="card-title theme-primary-color">
                    Status

                    <span class="float-right">
                        {{ $counts->statuses_count }}
                    </span>
                </h5>
              </a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title theme-primary-color">
                  Roles & Permissions

                  <span class="float-right">
                      {{ $counts->roles_count }}
                  </span>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
