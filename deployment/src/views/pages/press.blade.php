@extends('layouts.app', ['bodyclasses' => 'medium-grey'])

@section('content')

	<div class="page-header">

		<h2 class="main-title">Press Pack</h2>

	</div>

	<div class="container">

		<div class="row">

			<div class="col-md-8">

				<br>

				<div class="floating-page-tile">
					<h3>
						Web Assets
					</h3>

					<p>Feel free to use the following images to share the website on Twitter, Facebook, blogs and other websites.</p>

					<div class="row">
						<div class="col-sm-6 col-md-4">
							<?php for ($i=1; $i <= 4; $i++) { ?>
								<img style="height:auto;width:100%;" src="https://xmovement.s3.amazonaws.com/assets/c4d/press/images/press_<?php echo $i; ?>.png" alt="">
							<?php } ?>
						</div>

						<div class="col-sm-6 col-md-4">
							<?php for ($i=5; $i <= 8; $i++) { ?>
								<img style="height:auto;width:100%;" src="https://xmovement.s3.amazonaws.com/assets/c4d/press/images/press_<?php echo $i; ?>.png" alt="">
							<?php } ?>
						</div>

						<div class="col-sm-6 col-md-4">
							<?php
								// for ($i=1; $i <= 4; $i++) {
								for ($i=9; $i <= 10; $i++) {
							?>
								<img style="height:auto;width:100%;" src="https://xmovement.s3.amazonaws.com/assets/c4d/press/images/press_<?php echo $i; ?>.png" alt="">
							<?php } ?>
						</div>
					</div>

					<a class="btn btn-text" href="https://xmovement.s3.amazonaws.com/assets/c4d/press/images/press_png.zip" target="_blank">Download all (.png)</a>
					<a class="btn btn-text" href="https://xmovement.s3.amazonaws.com/assets/c4d/press/images/press_svg.zip" target="_blank">Download all (.svg)</a>

					<div class="clearfloat"></div>

					<br>

					<hr>

					<h3>
						Brand Identity
					</h3>

					<p>These are the official brand assets for Create4Dementia by LaunchSpot</p>

					<img style="height:auto;width:100%;" src="https://xmovement.s3.amazonaws.com/assets/c4d/press/images/create4dementia_launchspot_black.png" alt="">

					<img style="background:#333;height:auto;width:100%;" src="https://xmovement.s3.amazonaws.com/assets/c4d/press/images/create4dementia_launchspot_white.png" alt="">

					<a class="btn btn-text" href="https://xmovement.s3.amazonaws.com/assets/c4d/press/images/logo_png.zip" target="_blank">Download all (.png)</a>
					<a class="btn btn-text" href="https://xmovement.s3.amazonaws.com/assets/c4d/press/images/logo_svg.zip" target="_blank">Download all (.svg)</a>

				</div>

			</div>

			<div class="col-md-4">

				<br>

				<div class="floating-page-tile">

					<h3>
						Press Release
					</h3>

					<p>If you would like to blog about Create4Dementia by LaunchSpot please use our press release. Just click the button below to download.</p>

					<a href="https://xmovement.s3.amazonaws.com/assets/c4d/press/launchspot_create4dementia_press_release.pdf" target="_blank" type="button" name="button" class="btn btn-success">Download Press Release</a>

					<div class="clearfloat"></div>

				</div>

				<div style="background-color: transparent">

					<br>
					<blockquote class="twitter-tweet" data-cards="hidden" data-lang="en"><p lang="en" dir="ltr">Out of the Way—Daily Life, second prize stories. By Russian photographer Elena Anosova <a href="https://t.co/PqkD2f3zDc">https://t.co/PqkD2f3zDc</a> <a href="https://twitter.com/hashtag/WPPh2017?src=hash">#WPPh2017</a> <a href="https://t.co/pqHxITcha4">pic.twitter.com/pqHxITcha4</a></p>&mdash; World Press Photo (@WorldPressPhoto) <a href="https://twitter.com/WorldPressPhoto/status/838267967385264129">March 5, 2017</a></blockquote> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

					<div class="clearfloat"></div>

				</div>

			</div>

		</div>

	</div>
@endsection
