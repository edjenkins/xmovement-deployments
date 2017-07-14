@extends('layouts.app', ['bodyclasses' => 'transparent medium-grey'])

@section('content')

  <div class="about-page">

      <div class="container-fluid hero-container" id="about-hero-container" style="background-image: url('{{ getenv('APP_ABOUT_HEADER_IMG') }}')">
          <div class="black-overlay"></div>
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="text-container">
                          <h1>{{ trans('about.tagline') }}</h1>
                      </div>
                  </div>
              </div>
          </div>
      </div>

    <div class="container">

      <div class="row about-phase-row">

        <div class="col-md-12">

          <div class="about-phase-tile info-tile animated fadeIn">

            <p>Based on feedback at previous events, we know emerging technologies is a topic of interest to many of you and it's a subject that affects us all. But what exactly would you like to know more about? What piques your interest? What about immersive technologies such as artificial intelligence and virtual reality? How about printable electronics or med-tech? Or what about 5G or the Internet of Things? Don't be limited by these suggestions - we're open to all ideas.</p>

            <br>

            <p>This web platform, designed by Newcastle University's Open Lab, will allow you have your say.</p>

          </div>

          <div class="about-phase-tile animated fadeIn">

            <a target="_self" href="{{ action('IdeaController@add') }}" class="phase-step-indicator">
              <img src="{{ asset(env('S3_URL') . '/icons/support.svg') }}" />
            </a>

            <h3>
              {{ trans('about.phase-first-title') }}
            </h3>

            <p>
              {{ trans('about.phase-first-description') }}
            </p>

            <br />

            <p hidden>
              {{ trans('about.phase-first-detail') }}
            </p>

            <a target="_self" href="{{ action('IdeaController@add') }}" class="btn">
              Suggest a Topic
            </a>

          </div>

          <div class="about-phase-tile animated fadeIn">

            <a target="_self" href="{{ action('IdeaController@index') }}" class="phase-step-indicator">
              <img src="{{ asset(env('S3_URL') . '/icons/design.svg') }}" />
            </a>

            <h3>
              {{ trans('about.phase-second-title') }}
            </h3>

            <p>
              {{ trans('about.phase-second-description') }}
            </p>

            <br />

            <p hidden>
              {{ trans('about.phase-second-detail') }}
            </p>

            <a target="_self" href="{{ action('IdeaController@index') }}" class="btn">
              Explore Suggested Topics
            </a>

          </div>

          <div class="about-phase-tile animated fadeIn">

            <a target="_blank" href="http://venturefestnortheast.com/" class="phase-step-indicator">
              <img src="{{ asset(env('S3_URL') . '/icons/propose.svg') }}" />
            </a>

            <h3>
              {{ trans('about.phase-third-title') }}
            </h3>

            <p>
              {{ trans('about.phase-third-description') }}
            </p>

            <br />

            <p hidden>
              {{ trans('about.phase-third-detail') }}
            </p>

            <a target="_blank" href="http://venturefestnortheast.com/" class="btn">
              Register for VentureFest
            </a>

          </div>

        </div>
      </div>

    </div>

  </div>

@endsection
