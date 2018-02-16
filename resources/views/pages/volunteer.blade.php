@extends('layouts.main')

@section('content')
<!-- Theme Inner Banner ____________________________ -->
			<section>
				<div class="Theme-Inner-Banner inner-banner-bg-img-one">
					<div class="banner-opacity">
						<div class="container">
							<div class="banner-content">
								<h1>Join Program</h1>
								<ul>
									<li><a href="/">Home</a></li>
									<li><span>-</span></li>
									<li><a href="{{route('pages.volunteer')}}">Volunteer</a></li>
								</ul>
								<a href="#" class="hvr-bounce-to-right">Button</a>
							</div> <!-- /.banner-content -->
						</div> <!-- /.container -->
					</div> <!-- /.banner-opacity -->
				</div> <!-- /.Theme-Inner-Banner -->
			</section>
      <br>
      <div class="container">
        <div class="panel panel-default">
          <div class="panel-body">
            <p>Volunteer Supporters from the community are a vital resource for any voluntary organization. Supporters breathe life and vitality into an organization. A beautiful thing about volunteering is that it has no age limit, no educational constraint and certainly no work experience All it requires is dedication to a cause, sincerity about the work one is doing and sustained effort. Volunteering opens up a world of possibilities and volunteers can and do almost anything.</p><br>
            <p> We invite caring and compassionate persons to knock at our door and volunteer their services. There are endless range of activities for their involvement at Tamana and the prospects exciting. Volunteers can assist our professional staff with their routine duties and can help improve the effectiveness of the staff. They can teach specialized skills to staff or students. They can help us in marketing products made by students or help in fundraise. Volunteer advisers can provide expert direction in administration, management, accountancy, research, curriculum, development, programme improvement. Opportunities are endless, only the right attitude, a heart of gold and enthusiasm are required .Or it can be as simple as spending time with a special needs child and becoming his/ her friend and confident. </p><br>
            <h6 style="color:#7F1F21">Flexibility of Timings</h6>
            <p> Volunteers can provide their services on days and time convenient them; however these have to be within the working hours of Tamana. A fixed schedule for the volunteer's involvement has to be worked out. Tamana will provide training for how to relate to, help and support individual's with special needs.</p>

          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" style="background-color:#7F1F21;color:white"><center>JOIN AS VOLUNTEER</center></div>
          <div class="panel-body">
            <section class="Join-Volunteer-Pages">

					<div class="Theme-title text-center">
						<h2>Never Hesitate to Reach Out</h2>
					</div>
					<form action="#">
							<div class="col-md-4">
								<div class="single-input">
									<input type="text" placeholder="You name *">
								</div> <!-- /.single-input -->
							</div> <!-- /.col -->
							<div class="col-md-4">
								<div class="single-input">
									<input type="email" placeholder="Email *">
								</div> <!-- /.single-input -->
							</div> <!-- /.col -->
							<div class="col-md-4">
								<div class="single-input">
									<input type="text" placeholder="Phone *">
								</div> <!-- /.single-input -->
							</div> <!-- /.col -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="single-input">
									<input type="text" placeholder="Nationality *">
								</div> <!-- /.single-input -->
							</div> <!-- /.col -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="single-input">
									<input type="text" placeholder="Postcode">
								</div> <!-- /.single-input -->
							</div> <!-- /.col -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="single-input">
									<input type="text" placeholder="Address">
								</div> <!-- /.single-input -->
							</div> <!-- /.col -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="single-input">
									<select class="selectpicker">
										<option>Gender *</option>
										<option>Male</option>
										<option>Female</option>
										<option>Custom</option>
									</select>
								</div> <!-- /.single-input -->
							</div> <!-- /.col -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="single-input">
									<select class="selectpicker">
										<option>Age *</option>
										<option>18</option>
										<option>19</option>
										<option>20</option>
									</select>
								</div> <!-- /.single-input -->
							</div> <!-- /.col -->
							<div class="col-md-4 col-xs-12">
								<div class="single-input">
									<input type="text" placeholder="Country *">
								</div> <!-- /.single-input -->
							</div> <!-- /.col -->
							<div class="col-xs-12">
								<div class="single-input">
									<select class="selectpicker">
										<option>What would you like to do</option>
										<option>Demo one</option>
										<option>Demo two</option>
										<option>Demo three</option>
									</select>
								</div> <!-- /.single-input -->
							</div> <!-- /.col -->
							<div class="col-xs-12">
								<div class="single-textarea">
									<textarea placeholder="Write something about your experience ...."></textarea>
								</div> <!-- /.single-textarea -->
							</div> <!-- /.col -->
						<button class="hvr-float-shadow">Send Request</button>
					</form> <!-- /Form -->
        </section> <!-- /.Join-Volunteer-Pages -->





          </div>
        </div>

      </div>




@endsection
