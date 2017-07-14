@extends('layouts.app', ['bodyclasses' => env('HOME_BODY_CLASSES')])

@section('content')

    <div class="container-fluid hero-container" id="home-hero-container" style="background-image:url('{{ asset(getenv('APP_HOME_HEADER_IMG')) }}')">
        <div class="black-overlay"></div>
        <div class="container text-container text-left">
            <h1>{{ trans('home.tagline', ['idea' => trans_choice('common.idea', 1)]) }}</h1>
      @if (DynamicConfig::fetchConfig('CREATION_MODE_ENABLED', true))
              <a target="_self" href="{{ action('IdeaController@add') }}">
                  <button>{{ trans('home.get_started') }}</button>
              </a>
      @else
        @if (DynamicConfig::fetchConfig('INSPIRATION_MODE_ENABLED', false))
          <a target="_self" href="{{ action('InspirationController@index') }}">
            <button>{{ trans('home.be_inspired') }}</button>
          </a>
        @else
          <a target="_self" href="{{ action('IdeaController@index') }}">
            <button>{{ trans('navbar.explore') }}</button>
          </a>
        @endif
      @endif
        </div>
    </div>

  <div class="container-fluid about-container">

    <div class="container">

      <div class="col-sm-4">
        <div class="about-summary-tile">
          <img src="{{ asset(env('S3_URL') . '/icons/support.svg') }}" />
          <a target="_self" href="{{ action('IdeaController@add') }}">
            <h3>
              {{ trans('about.summary-first-title') }}
            </h3>
          </a>

          <p>
            {{ trans('about.summary-first-description') }}
          </p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="about-summary-tile">
          <img src="{{ asset(env('S3_URL') . '/icons/design.svg') }}" />
          <a target="_self" href="{{ action('IdeaController@index') }}">
            <h3>
              {{ trans('about.summary-second-title') }}
            </h3>
          </a>

          <p>
            {{ trans('about.summary-second-description') }}
          </p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="about-summary-tile">
          <img src="{{ asset(env('S3_URL') . '/icons/propose.svg') }}" />
          <a target="_blank" href="http://venturefestnortheast.com/">
            <h3>
              {{ trans('about.summary-third-title') }}
            </h3>
          </a>

          <p>
            {{ trans('about.summary-third-description') }}
          </p>
        </div>
      </div>

    </div>

  </div>

  <div class="container-fluid info-container" style="background-color:#f2f2f2;padding:20px">

    <div class="container" style="text-align:center">

      <a href="http://venturefestnortheast.com/" target="_blank">
        <img src="https://s3.amazonaws.com/xmovement/assets/vfne/logos/venturefest-colour-logo.png" alt="" style="height: 60px;display:inline-block;margin:20px">
      </a>

      <a href="http://ec.europa.eu/regional_policy/en/funding/erdf/" target="_blank">
        <img src="https://s3.amazonaws.com/xmovement/assets/vfne/logos/erdf-colour-logo.png" alt="" style="height: 40px;display:inline-block;margin:20px">
      </a>

      <div class="clearfix"></div>

    </div>

  </div>

  <div class="container-fluid info-container" style="margin-top: 0">

    <div class="container">

      <p>VentureFest North East is the region’s innovation conference, taking place on 14th November 2017. The event is designed by businesses for businesses. We've always worked closely with organisations that represent the needs of the business community to shape the entire event programme. Now we are going one step further by asking you to help to directly design a new People's Choice element of the event.</p>

      <a href="/about">Help us shape VentureFest North East 2017!</a>

    </div>

  </div>

  @if(count($ideas) > 0)
      <div class="container-fluid featured-ideas-container">
          <div class="container">
              <div class="panel-heading text-center">
                  <h2>{{ trans('home.featured_ideas', ['idea' => trans_choice('common.idea', count($ideas))]) }}</h2>
              </div>

              <div class="row-fluid">
                  @foreach ($ideas as $idea)
                      <div class="col-xs-12 col-sm-6 col-md-4">
                          @include('ideas.tile')
                      </div>
                  @endforeach
              </div>
          </div>
      </div>
  @endif

@endsection
