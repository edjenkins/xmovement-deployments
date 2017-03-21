<div class="container coming-soon-container">

	<img src="https://xmovement.s3.amazonaws.com/assets/c4d/images/headers/c4d-mini-robot.svg" alt="Mini Robot">
	<h5>{{ trans('create4dementia_comingsoon.message') }}</h5>

	@if (Auth::guest())
		<a target="_self" href="{{ action('Auth\AuthController@showRegistrationForm') }}">
			<button style="background-color:white;border-radius:6px;border:none;margin:20px auto;padding:10px 25px;" type="button" name="button">Notify Me</button>
		</a>
	@endif

</div>
