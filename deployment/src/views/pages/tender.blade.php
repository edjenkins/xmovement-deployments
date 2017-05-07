@extends('layouts.app', ['bodyclasses' => 'transparent medium-grey'])

@section('content')
    <div class="container-fluid hero-container shallow" id="terms-hero-container" style="background-image:url('{{ getenv('APP_TERMS_HEADER_IMG') }}')">
        <div class="black-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-container">
                        <h1>Tender</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<div class="container">

		<div class="row floating-page-row">

			<div class="col-md-12">

				<div class="floating-page-tile">

          <p>The winning idea has been selected and we are now accepting tenders for a contract worth upto £20,000 to develop the winning idea.</p>

          <h3>
						What is the tender for?
					</h3>

          <p>The tender is for a work contract worth up to £20,000 to develop an open-source solution to the winning idea proposed by our community to help those living with dementia.</p>

          <p>The link below is to the winning idea:</p>

          <a href="/explore" target="_self">Winning Idea</a>

          <hr>

          <h3>
						Who can submit a tender?
					</h3>

          <p>Anyone who has experience developing mobile and/or web applications can submit a tender. You may be a freelance developer, a computing science graduate or a software development company, whatever your background we welcome you to submit a tender.</p>

          <hr>

          <h3>
            What should I include in my tender?
          </h3>

          <p>When you submit your tender you will be asked to answer a set of questions. Your responses to these questions will be visible to the community on the site.</p>

          <p>You will also need to provide two documents in PDF format. One of which is a public tender document, which will be made visible on the site. The other is a private tender document which only we will see.</p>

          <p>The <strong>public</strong> document should include the following:</p>

          <ul>
            <li>Details of your experience</li>
            <li>A timeline for the development of the idea</li>
            <li>How you plan to tackle the challenges presented in the design phase</li>
            <li>What tools/technologies you will utilise to develop the idea</li>
          </ul>

          <p>The <strong>private</strong> document should include the following:</p>

          <ul>
            <li>Your costings</li>
            <li>Your address</li>
            <li>Contact details (email, phone, website etc.)</li>
            <li>How you understand the requirements of the project</li>
          </ul>

          <hr>

          <h3>
            How long do I have?
          </h3>

          <p>A panel of experts will be reviewing the tenders and selecting a winner on 18th May 2017, therefore it is crucial that you submit your tender on or before 17th May 2017 in order to be considered.</p>

          <p>We recommend that you submit your tender as early as possible and engage with the community here on the site to be in with the best chance of success.</p>

          <p>In order to submit a tender you will need to register on the site, then visit the winning idea's page <a href="/explore" target="_self">here</a> and click the 'Submit Tender' button on the right.</p>

          <p>If you have any questions please feel free to <a href="/contact" target="_self">contact us</a>.</p>

				</div>

			</div>

		</div>

	</div>
@endsection
