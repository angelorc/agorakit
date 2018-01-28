<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="{{ route('index') }}">
        <i class="fa fa-child"></i> <span class="hidden-xs hidden-sm hidden-md">{{Config::get('agorakit.name')}}</span>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#agorakit_navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="agorakit_navbar">

        <div class="navbar-nav mr-auto">


            <div class="nav-item">
                <a class="nav-link" href="{{ action('DashboardController@groups') }}">
                    <i class="fa fa-cubes"></i> {{trans('messages.groups')}}
                </a>
            </div>

            <div class="nav-item">
                <a class="nav-link" href="{{ action('DashboardController@discussions') }}">
                    <i class="fa fa-comments-o"></i> {{trans('messages.discussions')}}
                </a>
            </div>

            <div class="nav-item">
                <a class="nav-link" href="{{ action('DashboardController@agenda') }}">
                    <i class="fa fa-calendar"></i> {{trans('messages.agenda')}}
                </a>
            </div>

            <div class="nav-item">
                <a class="nav-link" href="{{ action('DashboardController@map') }}">
                    <i class="fa fa-map-marker"></i> {{trans('messages.map')}}
                </a>
            </div>




        </div>



        <div class="navbar-nav ml-auto">




            @if(\Config::has('app.locales'))
                <div class="dropdown nav-item">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-language"></i> {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <div class="dropdown-menu">
                        @foreach(\Config::get('app.locales') as $locale)
                            @if($locale !== app()->getLocale())
                                <a class="dropdown-item" href="{{Request::url()}}?force_locale={{$locale}}">
                                    {{ strtoupper($locale) }}
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif


            <div class="nav-item">
                <div class="btn-group">
                    <a class="btn btn-outline-primary" href="{{ url('login') }}">{{ trans('messages.login') }}</a>
                    <a class="btn btn-outline-secondary" href="{{ url('register') }}">{{ trans('messages.register') }}</a>
                </div>
            </div>
            
        </div>


    </nav>
