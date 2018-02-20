@extends('layouts.main')

@section('content')
			<section>
				<div class="Theme-Inner-Banner inner-banner-bg-img-one">
					<div class="banner-opacity">
						<div class="container">
							<div class="banner-content">
								<h1>Media Coverage</h1>
								<ul>
									<li><a href="{{ route('index') }}">Home</a></li>
									<li><span>-</span></li>
									<li><a href="{{ route('media_coverage.achievements') }}">Media Coverage</a></li>
								</ul>
								<a href="#" class="hvr-bounce-to-right">Need Our Help</a>
							</div> <!-- /.banner-content -->
						</div> <!-- /.container -->
					</div> <!-- /.banner-opacity -->
				</div> <!-- /.Theme-Inner-Banner -->
			</section>
			<br>

			<!-- Blog Details ____________________________ -->
			<section class="">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-xs-12 margin-top">
              <div class="panel panel-default" style="padding: 15px;">

							<div class="Blog-Details-Wrapper">
								<div class="panel-heading" style="background-color:#7F1F21;color:white"><center><strong>Paper Clippings</strong></center></div>
								<br>

								<h5 style="color: #7F1F21;">Tamana Autism Centre -School of Hope retained its No.1 rank in the annual Education World (EW)</h5>
		              <p>Congratulations to Tamana Autism Centre -School of Hope, for retaining its No.1 rank as the most Respected Special Needs School in the country in the annual Education World (EW) India School Rankings 2016. The centre was awarded top ratings on 5 parameters -teacher welfare and development, competence of faculty, quality of programme, leadership/management quality, infrastructure provision. Comments Dr Shayama Chona, Founder and President Tamana, <strong>"A National League table recognising the dedicated work done by the country's best special needs schools will serve as an inspiration to individuals and organisations aspiring to promote similar institutions. For Tamana's teachers, students and parents the #1 ranking is a morale booster . It motivates us to continue in our mission of providing the most enabling environment for special needs children. Our excellent reputation has been built by our team of highly qualified educators, who use the latest pedagogy and technology to harness the full potential of the student with disabilities. Students from SAARC countries and even the US are studying with us in Tamana, while several special educators from Asian countries come here for training "<strong> </p>
	                        <center> <table style="width: 70%">
 	                           <tbody>
                               <tr>
                                 <td><img src="{{asset('images/media1.jpg')}}" border="0" style="width:304px;"></td>
                                 <td><img src="{{asset('images/media2.jpg')}}" border="0" style="width:304px;"></td>
                              </tr>
                            </tbody>
                          </table></center>
                          <br>
													<h5 style="color: #7F1F21;">Inclusion Beyond Boundries (Tamana Fashion Show - 2016) at Hyatt Regency Delhi</h5>
													<br>
													<center> <table style="width: 100%">
 	                           <tbody>
                               <tr>
                                 <td><img src="{{asset('images/media3.jpg')}}" border="0" style="width:304px;"></td>
                                 <td><img src="{{asset('images/media4.jpg')}}" border="0" style="width:304px;"></td>
																 <td><img src="{{asset('images/media5.jpg')}}" border="0" style="width:304px;"></td>

                              </tr>
                            </tbody>
                          </table></center>
													<br>
													<h5 style="color: #7F1F21;">Celebration of 70 years of UN by Tamana gets covered in UNews, the newsletter published by UNIC for India and Bhutan</h5>
													<br>
													<center><img src="{{asset('images/media3.jpg')}}" border="0" style="width:304px;"></center>
													<br>
													<h5 style="color: #7F1F21;">Tamana NGO won the Prestgious AmeriCares India Spirit of Humanity Awards 2015</h5>
													<p>Tamana NGO won the Prestgious AmeriCares India Spirit of Humanity Awards 2015 in the category disability. This award was for excellence in the work carried out in the area of disability. The criteria for selection were vision, purpose, geography of work, uniqueness of the programme, sustainability, scalabilty. 28 finalists were selected from 400 applications for the award. The winners were selected in 8 different categories from the finalists after the final presentation in front of a grand jury on 9th September in Mumbai.</p>
													<br>
													<center> <table style="width: 100%">
 	                           <tbody>
                               <tr>
                                 <td><img src="{{asset('images/media6.jpg')}}" border="0" style="width:304px;"></td>
                                 <td><img src="{{asset('images/media7.jpg')}}" border="0" style="width:304px;"></td>
																 <td><img src="{{asset('images/media8.jpg')}}" border="0" style="width:304px;"></td>

                              </tr>
                            </tbody>
                          </table></center>




</div>
</div>
</div>
</div>
</div>
</section>
@endsection
