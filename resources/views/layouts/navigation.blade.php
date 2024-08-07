<!-- navigation styles -->
<link rel="stylesheet" href="{{ asset('css/navigation.css') }}">

<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
    </symbol>

    <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
    </symbol>

    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
    </symbol>

    <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
    </symbol>
</svg>

<div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
            id="bd-theme"
            type="button"
            aria-expanded="false"
            data-bs-toggle="dropdown"
            aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
            <use href="#circle-half"></use>
        </svg>
    
        <span class="visually-hidden" id="bd-theme-text">
            Toggle theme
        </span>
    </button>

    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                <svg class="bi me-2 opacity-50" width="1em" height="1em">
                    <use href="#sun-fill"></use>
                </svg>
                Light
                <svg class="bi ms-auto d-none" width="1em" height="1em">
                    <use href="#check2"></use>
                </svg>
            </button>
        </li>

        <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                <svg class="bi me-2 opacity-50" width="1em" height="1em">
                    <use href="#moon-stars-fill"></use>
                </svg>
                Dark
                <svg class="bi ms-auto d-none" width="1em" height="1em">
                    <use href="#check2"></use>
                </svg>
            </button>
        </li>

        <li>
            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                <svg class="bi me-2 opacity-50" width="1em" height="1em">
                    <use href="#circle-half"></use>
                </svg>
                Auto
                <svg class="bi ms-auto d-none" width="1em" height="1em">
                    <use href="#check2"></use>
                </svg>
            </button>
        </li>
    </ul>
</div>

    
<nav class="navbar navbar-expand-md navbar-dark bg-primary theme-navigation-bg">
    <div class="container-fluid">
        @if(Auth::check())
            <div class="dropdown app-menu">
                <button class="btn btn-secondary theme-primary-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="fa fa-list"></span>
                </button>

                <ul class="dropdown-menu">
                    <!-- <li><h6 class="dropdown-header">Dropdown header</h6></li> -->
                    <li>
                        <a class="dropdown-item theme-primary-color {{ Route::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                            Dashboard
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item theme-primary-color {{ Route::is('admin.order.index') ? 'active' : '' }}" href="{{ route('admin.order.index') }}">
                            Sales
                        </a>
                    </li>
                    
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item theme-primary-color {{ Route::is('admin.settings') ? 'active' : '' }}" href="{{ route('admin.settings') }}">
                            <svg class="bi">
                                <use xlink:href="#gear-wide-connected"/>
                            </svg>
                            Settings
                        </a>
                    </li>
                </ul>
                   </div>
        @endif
        
        <!-- the company name is taken from DB. To change the name displayed, change the company name from the Settings. -->
        @if(isset($company))
            @if(isset($theme))
                @if($theme->navigation_brand == 'name')
                    <a class="navbar-brand" href="{{ route('home') }}">
                        {{ ucwords($company->name) }}
                    </a>
                @elseif($theme->navigation_brand == 'logo')
                    <img class="theme-navigation-logo" src="{{ asset('storage/'.$company->logo) }}" alt="">
                @else
                    <a class="navbar-brand" href="{{ route('home') }}">
                        {{ ucwords($company->name) }}
                    </a>
                @endif
            @else
                <a class="navbar-brand" href="{{ route('home') }}">
                    {{ ucwords($company->name) }}
                </a>
            @endif
        @else
            <a class="navbar-brand" href="{{ route('home') }}">
                Company Name
            </a>
        @endif
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Categories
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">
                        Disabled
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart') }}">
                        <i class="fa fa-cart-plus"></i>
                        <livewire:cart-count>
                    </a>
                </li>
            </ul>

            <form method="post" action="{{ route('search') }}" class="d-flex search" role="search">
                @csrf
                <input name="name" class="form-control me-2" type="search" placeholder="Search for a product" aria-label="Search" required>

                <button class="btn btn-primary theme-primary-btn" type="submit">
                    Search
                </button>
            </form>

            <ul class="navbar-nav mb-2 mb-md-0">
                
                @if(Auth::check())
                    <li class="nav-item float-right">
                        <a class="nav-link" aria-current="page" href="{{ route('profile') }}">
                            <span class="fa fa-user"></span>
                            Hi  {{ Auth::user()->name }}
                        </a>
                    </li>


                    <li class="nav-item float-right theme-secondary-btn">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="nav-link d-flex align-items-center gap-2">
                            <svg class="bi"><use xlink:href="#door-closed"/></svg>
                                Sign out
                            </button>
                        </form>
                    </li>
                @else
                    <li class="nav-item float-right">
                        <a class="nav-link" aria-current="page" href="{{ route('login') }}">
                            <span class="fa fa-sign-in"></span>
                            Login
                        </a>
                    </li>

                    <li class="nav-item float-right">
                        <a class="nav-link" aria-current="page" href="{{ route('register') }}">
                            <span class="fa fa-user-plus"></span>
                            Sign Up
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<!-- navigation ends -->

<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('cartUpdated', function () {
            Livewire.emit('refreshCartCount');
        });
    });
</script>