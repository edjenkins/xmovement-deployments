@extends('layouts.app', ['bodyclasses' => 'colorful'])

@section('content')

	<div class="about-page">

		<!-- About -->

		<div class="page-header about-page-header">

			<div class="quote-wrapper">
				<h5 class="quote">{{ trans('create4dementia_about.quote') }}</h5>

				<p class="quote-author">- {{ trans('create4dementia_about.quote_author') }}</p>
			</div>

			<!-- How it works -->

			<div class="vertical-timeline-header">
				{{ trans('create4dementia_about.how_it_works') }}
			</div>

		</div>

		<div class="custom-about-page">

			<!-- Padding -->

			<div class="timeline-row">

				<div class="timeline-col timeline-col-left"></div>

				<div class="timeline-bar"></div>

				<div class="hidden-xs hidden-sm timeline-col timeline-col-right"></div>

			</div>

			<!-- Inspire -->

			<div class="timeline-row">

				<div class="timeline-col timeline-col-left">

					<div class="about-phase-row-content text-content">

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
							<span class="read-more-text">{{ trans('common.read_more') }}</span>
							<span class="read-less-text">{{ trans('common.read_less') }}</span>
						</p>
					</div>

				</div>

				<div class="timeline-bar">

					<div class="calendar-tile">
						<h5>March</h5>
						<h3>14</h3>
					</div>

				</div>

				<div class="timeline-col-illustration hidden-xs hidden-sm timeline-col timeline-col-right" style="background-image: url('{{ asset(env('S3_URL') . '/images/about/inspiration.svg') }}')"></div>

			</div>

			<!-- Design -->

			<div class="timeline-row">

				<div class="timeline-col-illustration hidden-xs hidden-sm timeline-col timeline-col-left" style="background-image: url('{{ asset(env('S3_URL') . '/images/about/design.svg') }}')"></div>

				<div class="visible-xs visible-sm timeline-col timeline-col-left">

					<div class="about-phase-row-content text-content">

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

				<div class="timeline-bar">

					<div class="calendar-tile">
						<h5>March</h5>
						<h3>27</h3>
					</div>

				</div>

				<div class="hidden-xs hidden-sm timeline-col timeline-col-right">

					<div class="about-phase-row-content text-content">

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

			</div>

			<!-- Build -->

			<div class="timeline-row">

				<div class="timeline-col timeline-col-left">

					<div class="about-phase-row-content text-content">

						<h3 class="phase-title">
							{{ trans('about.tender-phase-title') }}
						</h3>

						<p class="phase-description">
							{{ trans('about.tender-phase-description') }}
						</p>

						<div class="clearfloat"></div>

						<p class="phase-detail">
							{{ trans('about.tender-phase-detail') }}
						</p>

						<p class="phase-read-more" onClick="$(this).parent().toggleClass('detail-visible')">
							<span class="read-more-text">Read more</span>
							<span class="read-less-text">Read less</span>
						</p>
					</div>

				</div>

				<div class="timeline-bar">

					<div class="calendar-tile">
						<h5>April</h5>
						<h3>17</h3>
					</div>

				</div>

				<div class="timeline-col-illustration hidden-xs hidden-sm timeline-col timeline-col-right" style="background-image: url('{{ asset(env('S3_URL') . '/images/about/tender.svg') }}')"></div>

			</div>

			<!-- Winner -->

			<div class="timeline-row">

				<div class="timeline-col-illustration hidden-xs hidden-sm timeline-col timeline-col-left" style="background-image: url('{{ asset(env('S3_URL') . '/images/about/winner.svg') }}')"></div>

				<div class="visible-xs visible-sm timeline-col timeline-col-left">

					<div class="about-phase-row-content text-content">

						<h3 class="phase-title">
							{{ trans('about.winner-phase-title') }}
						</h3>

						<p class="phase-description">
							{{ trans('about.winner-phase-description') }}
						</p>

						<div class="clearfloat"></div>

						<p class="phase-detail">
							{{ trans('about.winner-phase-detail') }}
						</p>

						<p class="phase-read-more" onClick="$(this).parent().toggleClass('detail-visible')">
							<span class="read-more-text">Read more</span>
							<span class="read-less-text">Read less</span>
						</p>
					</div>

				</div>

				<div class="timeline-bar">

					<div class="calendar-tile">
						<h5>May</h5>
						<h3>6</h3>
					</div>

				</div>

				<div class="hidden-xs hidden-sm timeline-col timeline-col-right">

					<div class="about-phase-row-content text-content">

						<h3 class="phase-title">
							{{ trans('about.winner-phase-title') }}
						</h3>

						<p class="phase-description">
							{{ trans('about.winner-phase-description') }}
						</p>

						<div class="clearfloat"></div>

						<p class="phase-detail">
							{{ trans('about.winner-phase-detail') }}
						</p>

						<p class="phase-read-more" onClick="$(this).parent().toggleClass('detail-visible')">
							<span class="read-more-text">Read more</span>
							<span class="read-less-text">Read less</span>
						</p>
					</div>

				</div>

			</div>

			<!-- Padding -->

			<div class="timeline-row">

				<div class="timeline-col timeline-col-left"></div>

				<div class="timeline-bar"></div>

				<div class="hidden-xs hidden-sm timeline-col timeline-col-right"></div>

			</div>

		</div>

		<!-- Launch icon -->
		<div class="about-launch-icon">
			<img src="{{ asset(env('S3_URL') . '/icons/propose.svg') }}" />
		</div>

		<!-- Partners -->
		@include('deployment.components.partners')

</div>

@endsection
