@extends('layouts.app')

@section('content')

	<div class="custom-about-page">

		<div class="vertical-timeline-header">
			How it Works
		</div>

		<div class="vertical-timeline-bar"></div>

		<div class="container">

			<!-- First Row -->

			<div class="about-phase-row animated fadeIn">

				<div class="calendar-tile">
					<h5>March</h5>
					<h3>27</h3>
				</div>

				<div class="col-md-6">

					<div class="about-phase-row-content text-content left-hand-side">

						<h3 class="phase-title">
							{{ trans('about.inspire-phase-title') }}
						</h3>

						<p class="phase-description">
							{{ trans('about.inspire-phase-description') }}
						</p>

						<div class="clearfloat"></div>

						<p class="phase-detail">
							{{ trans('about.inspire-phase-detail') }}
						</p>

						<p class="phase-read-more" onClick="$(this).parent().toggleClass('detail-visible')">
							<span class="read-more-text">Read more</span>
							<span class="read-less-text">Read less</span>
						</p>

					</div>

				</div>

				<div class="col-md-6">

					<div class="about-phase-row-content right-hand-side">

						<img src="{{ asset(env('S3_URL') . '/images/about/inspiration.svg') }}" class="illustration">

					</div>

				</div>

				<div class="clearfloat"></div>

			</div>


			<!-- Second Row -->

			<div class="about-phase-row animated fadeIn">

				<div class="calendar-tile">
					<h5>April</h5>
					<h3>10</h3>
				</div>

				<div class="col-sm-12 col-md-6 col-md-push-6">

					<div class="about-phase-row-content text-content right-hand-side text-left">

						<h3 class="phase-title">
							{{ trans('about.design-phase-title') }}
						</h3>

						<p class="phase-description">
							{{ trans('about.design-phase-description') }}
						</p>

						<div class="clearfloat"></div>

						<p class="phase-detail">
							{{ trans('about.design-phase-detail') }}
						</p>

						<p class="phase-read-more" onClick="$(this).parent().toggleClass('detail-visible')">
							<span class="read-more-text">Read more</span>
							<span class="read-less-text">Read less</span>
						</p>

					</div>

				</div>

				<div class="col-sm-12 col-md-6 col-md-pull-6">

					<div class="about-phase-row-content left-hand-side">

						<img src="{{ asset(env('S3_URL') . '/images/about/design.svg') }}" class="illustration">

					</div>

				</div>

				<div class="clearfloat"></div>

			</div>

			<!-- Third Row -->

			<div class="about-phase-row animated fadeIn">

				<div class="calendar-tile">
					<h5>April</h5>
					<h3>17</h3>
				</div>

				<div class="col-md-6">

					<div class="about-phase-row-content text-content left-hand-side">

						<h3 class="phase-title">
							{{ trans('about.build-phase-title') }}
						</h3>

						<p class="phase-description">
							{{ trans('about.build-phase-description') }}
						</p>

						<div class="clearfloat"></div>

						<p class="phase-detail">
							{{ trans('about.build-phase-detail') }}
						</p>

						<p class="phase-read-more" onClick="$(this).parent().toggleClass('detail-visible')">
							<span class="read-more-text">Read more</span>
							<span class="read-less-text">Read less</span>
						</p>

					</div>

				</div>

				<div class="col-md-6">

					<div class="about-phase-row-content right-hand-side">

						<img src="{{ asset(env('S3_URL') . '/images/headers/c4d-home.svg') }}" class="illustration">

					</div>

				</div>

				<div class="clearfloat"></div>

			</div>

			<div class="about-phase-row">

				<div class="col-md-12">

					<div class="about-phase-row-content text-center">

						<div class="about-launch-icon">
							<img src="{{ asset(env('S3_URL') . '/icons/propose.svg') }}" />
						</div>

					</div>

				</div>

				<div class="clearfloat"></div>

			</div>

		</div>

	</div>

@endsection
