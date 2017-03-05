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

					<p>Anyone can participate in this competition – however, prize money will be awarded only to successful tenders.</p>

					<p>There is no restriction on number of entries – however, entries will be closely monitored to avoid spam, and a shortlisting process will be in place (carried out by independent experts in the area of dementia) to ensure quality of possible winners at later stages of the competition.</p>

					<p>Any winning idea from this competition will be developed in line with Newcastle University’s open source technology process – therefore, no-one will commercialise or make any money (barring the work contract) out of the idea or the technology. Please don’t submit your ideas unless you are happy for this to happen! If you have any qualms about the process, then give us a shout <a target="_self" href="{{ action('PageController@contact') }}">here</a> to chat.</p>


					<p>By using this site and posting comments and other contributions, you are indicating your consent for your anonymous contributions to be included in a larger programme of research at Newcastle University surrounding dementia and the design of new technology. Most notably, this will take place as part of team member Nataly’s PhD project and may be analysed and written up into research papers. We do not collect any sensitive data about you and are mostly interested in your opinions and ideas, but please <a target="_self" href="{{ action('PageController@contact') }}">contact us</a> if you have any concerns about this.</p>


					<p>Participants entering the tender stage will be bidding for an overall pot of £20,000. We anticipate that only one tender will win the bulk of this prize pot, however, this is dependent on the technologies suggested by the community design phase – and so, it’s possible that we will award more than one prize from this pot. Keep an eye on how the competition progresses to check how this works out.</p>


					<p>Winning tenders will be awarded an amount from the prize pot that is commensurate to the amount of effort, work and time that the technology’s production and testing will require. This will be decided by independent experts in software development, as advised by experts within the domains of dementia.</p>


					<p>Winner(s) will be notified at the end of the process, and participants will receive payment once the product has been completed, tested, and deployed.</p>


					<p>The results will be announced on the platform, but also via email sign-up lists; winners' names will be published or available on request, as well as their winning tenders. The platform will also periodically be updated during the process of design and deployment to ensure participants are kept up to date with the process.</p>


					<p>The open tender asks development teams to submit both a public tender document and a private tender document. This is to ensure developers’ comfort with the process – so you don’t have to reveal your costings (for example) in the public document if you don’t want to.</p>


					<p>These open tenders will be open for the community to comment upon during the tendering process – this is to ensure that the community who shape the technological idea get a say in the way it is eventually realised.</p>


					<p>The tender process will be monitored as it progresses over a period of two weeks to ensure only high quality tenders which have taken careful consideration of the community’s ideas are presented to the judges.</p>


					<p>Any technology or platform developed as a part of this competition must be open-source. This is in line with Open Lab at Newcastle University’s long-standing open source policy. Please <a target="_self" href="{{ action('PageController@contact') }}">contact us</a> if you have any more questions about this.</p>


					<p>Once the technology is developed, there will be a handover process whereby the technology will be submitted to the SAgE (at Newcastle University)’s Enterprise Team, will be submitted to ethical approval boards, and then will be made available to the community via the usual channels. This is, of course, highly dependent on the nature of the winning technology.</p>


					<p>This project forms part of the PhD project of team member Nataly Birbeck. As part of her project, Nataly will follow the winning technology out into the community, promoting it to local dementia care resources, and carrying out an evaluation of its initial use. Please contact Nataly if you want to hear more about how this is planned to happen <a href="mailto:nataly@launchspot.co.uk">nataly@launchspot.co.uk</a>.</p>


					<p>If extra paid work arises that pertains to the winning technology’s deployment, use and maintenance, the original tendering team will be contacted for their consideration in the first instance.</p>


					<p>Where the winning idea is a mobile application or piece of software, the developed technology must be compatible with both iOS and Android – this is for reasons of health equality (e.g., not everyone has an iPhone – and this is even more important to pay attention to in challenging contexts such as dementia care).</p>


					<p>Output from the competition – whether it be participants’ comments during the early stages or winning contributions - may be used in post-promotion publicity.</p>

				</div>

			</div>

		</div>

	</div>
@endsection
