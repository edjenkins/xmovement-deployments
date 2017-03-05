@extends('layouts.app', ['bodyclasses' => 'transparent medium-grey'])

@section('content')
    <div class="container-fluid hero-container shallow" id="terms-hero-container" style="background-image:url('{{ getenv('APP_TERMS_HEADER_IMG') }}')">
        <div class="black-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-container">
                        <h1>Guidelines</h1>
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
						Competition Guidelines
					</h3>

					<p>Anyone can participate in this competition – however, prize money will be awarded only to successful tenders, which we anticipate will originate with small businesses or lone developers. Tender criteria is available below.</p>

					<p>The start date of this competition is Monday, October 31st, and the closing date will be Friday, December 9th.</p>

					<p>Participants entering the tender stage will be bidding for an overall pot of £40,000. There is no set number of possible winners, but there will be at least two – one each in the dementia strand and the self-harm strand.</p>

					<p>Winning tenders will be awarded an amount commensurate to the amount of effort, work and time that the technology’s production and deployment will require, within a range of £5000-20000. This will be decided by independent experts in software development, as advised by experts within the domains of self-harm and dementia.</p>

					<p>There are no geographical or personal restrictions (eg location, age); however, participants will have to have access to the internet in order to participate.</p>

					<p>The competition will be jointly run by the School of Computing Science at Northumbria University (PI: Prof. Shaun Lawson) and Open Lab at Newcastle University (PI: Prof. Patrick Olivier).</p>

					<p>There is no restriction on number of entries – however, entries will be closely monitored to avoid spam, and a shortlisting process will be in place (carried out by independent experts in the area of dementia and self-harm) to ensure quality of possible winners at later stages of the competition.</p>

					<p>The names of all judges at each stage will be publicly available on the website.</p>

					<p>Winner(s) will be notified at the end of the process (week beginning 5th December), and participants will receive payment once the product has been completed, tested, and deployed.</p>

					<p>The results will be announced on the platform, but also via email sign-up lists; winners' names will be published or available on request, as well as their winning tenders. The platform will also periodically be updated during the process of design and deployment to ensure participants are kept up to date with the process.</p>

					<p>Criteria for judging entries is available below, and is also built-in to the community suggestion stage as well as the tender process.</p>

					<p>Who will own the copyright in the competition entries (if relevant);</p>

					<p>Any technology or platform developed as a part of this competition must be open-source.</p>

					<p>Output from the competition – whether it be participants during the early stages or winning contributions - may be used in post promotion publicity.</p>

				</div>

				<br>

				<div class="floating-page-tile">

					<h3>
						Idea Submission
					</h3>

					<p>Who will your audience or userbase be? Who will your idea help?</p>
					<p>In what way have you engaged with the inspiration material?</p>
					<p>What benefits do you see of those who will engage or use your idea?</p>
					<p>What research backs up the need for your idea? Feel free to submit links to news stories.</p>
					<p>What personal experience do you have or know of that speaks to the need for this idea?</p>
					<p>How specific is your idea? I.e., will it help anyone with an anxiety disorder – or has it solely been designed with people who self-harm in mind? Will it help any ageing person, or solely people who have received a diagnosis of dementia?</p>
					<p>Have you thought about how your platform/app/other technology might look?</p>
					<p>How easy will it be for people to access your platform? Will any special skills be needed to use it?</p>
					<p>Will the users of your idea need support from others in the community in order to use the technology to its fullest? If so, who?</p>
					<p>Are there any risks inherent to using this technology? Do you think anyone might be made to feel bad by using the technology, or being a part of its use?</p>
					<p>Do you have any ideas about how we might spread the word about the technology, and increase its use?</p>


				</div>

				<br>

				<div class="floating-page-tile">

					<h3>
						Tender Criteria
					</h3>

					<p>Describe yourself, your skills, experience, and team.</p>
					<p>Please attach or link to a portfolio of previous work you have carried out that is relevant to this project.</p>
					<p>In what way have you engaged with the output from the community during the early design processes? Evidence this with use of quotes, screenshots and links to content.</p>
					<p>What are the costs inherent to you carrying out this project to completion?</p>
					<p>What is the timescale you anticipate for this work to be carried out? Please attach a brief work plan.</p>
					<p>What difficulties can you anticipate in carrying out this work?</p>
					<p>In what ways do you anticipate you will need to test the technology before it is deployed into the community?</p>

				</div>

			</div>

		</div>

	</div>
@endsection
