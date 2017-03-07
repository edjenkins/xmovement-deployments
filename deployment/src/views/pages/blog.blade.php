@extends('layouts.app', ['bodyclasses' => 'transparent medium-grey'])

@section('content')
    <div class="container-fluid hero-container shallow" id="terms-hero-container" style="background-image:url('{{ getenv('APP_TERMS_HEADER_IMG') }}')">
        <div class="black-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-container">
                        <h1>Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<div class="container">

		<div class="row floating-page-row">

			<div class="col-md-12">

				<div class="floating-page-tile">
					<h3>
						The Hackathon (Create4Dementia)
					</h3>

					<p>Create4Dementia was an event hosted by Open Lab and sponsored by funds from the EPSRC and NIHR Mental Health Network. In May 2015, we invited teams of designers, coders, hackers, makers and researchers to come to Newcastle-upon-Tyne to Create-4-Dementia. Our aim was to bring people together to share ideas, experiences and concepts as well as build digital prototypes that break-down, problematize and otherwise explore the digital design space around dementia and dementia care.</p>

					<p>Launchspot is inspired by the creative ways in which team members came together in this event to propose exciting solutions to complex social issues in dementia. If you check the inspiration phase, you’ll see where the team has added some of the ideas from Create4Dementia. And check out the original site here, where you’ll get a blow by blow account of how the event ran: <a target="_blank" href="http://create4dementia.com">http://create4dementia.com</a></p>

				</div>

			</div>

		</div>

	</div>
@endsection
