@extends('layouts.main')

@section('content')
			<section>
				<div class="Theme-Inner-Banner inner-banner-bg-img-one">
					<div class="banner-opacity">
						<div class="container">
							<div class="banner-content">
								<h1>Students-Alumni ACHIEVEMENTS</h1>
								<ul>
									<li><a href="{{ route('index') }}">Home</a></li>
									<li><span>-</span></li>
									<li><a href="{{ route('students-alumni.achievements') }}">Students-Alumni Achievements</a></li>
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
								<div class="panel-heading" style="background-color:#7F1F21;color:white"><center><strong>Students</strong></center></div>
								<br>

								<h4 style="color: #7F1F21;">August 2015</h4>
		              <p><strong><u>Tamana Students placed at Lemon Tree Hotels </u></strong><br>
				                Tamana is proud to inform that three students are placed at Lemon Tree Hotels. One student has got appointment letter for job and rest 2 will continue as intern for some time.</p>
	                         <table style="width:100%">
 	                           <tbody>
                               <tr>
                                 <td><img src="{{asset('images/students-2.jpg')}}" border="0" style="width:304px;"></td>
                                 <td><img src="{{asset('images/students-1.jpg')}}" border="0" style="width:304px;"></td>
                                 <td><img src="{{asset('images/students-3.jpg')}}" border="0" style="width:304px;"> </td>
                              </tr>
                            </tbody>
                          </table>
                          <br>
                          <h4 style="color: #7F1F21;">April 2011</h4>
								<p> In a step towards economic rehabilitation, nine students of Nai Disha and one student of Tamana Special School have been selected as interns for different vocations being taught at Tamana schools. In the second half of their day at school they will be placed in different vocational departments as interns and will earn a stipend of Rs. 1000 per month.<br>
                The selected trainees are :-
                <ol style="margin-left:20px;">
                    <li>Sonu - Bakery Assistant</li>
                    <li>Anjali - Asst. Canteen In-charge</li>
                    <li>Sharad Dang - Cleanliness in-charge at Nai Disha</li>
                    <li>Kustubh - Asst. File making Unit</li>
                    <li>Saumya Gupta - Asst. to teacher at Tamana Special School</li>
                    <li>Arti Laul - Asst. to Bakery Instructor</li>
                    <li>Ruhi Ansari - Asst. in Stitching Unit</li>
                    <li>Tej Kiran- Assistant in stitching unit</li>
                    <li>Arsh Khanna- Sales person - Bakery</li>
                    <li>Ms Tanya Soni - Assistant to teacher at Tamana Special School</li>
                </ol></p>
                <h4 style="color: #7F1F21;">10<sup>th</sup> February 2011 </h4>
                <p>5 students of Tamana Special School - Farha Khan, Poornima Doomra, Tanya Soni, Meenal Pathania, Tushar Bhatia - participated in the Yoga competition at SAHAN School (New Delhi) and won bronze medals. </p>
								<div class="panel-heading" style="background-color:#7F1F21;color:white"><center><strong>ALumni</strong></center></div>
								<br>
							  <h4 style="color: #7F1F21;">Students who have been successfully Integrated</h4>
                <p style="padding-top: 15px;"><strong>Deepak Tolany </strong> was placed as a sales assistant in a shop named- Namkeen Bhandar, Shop No. 9, D-2 Market, Vasant Kunj, New Delhi. <br><br>
                <strong>Nitin Suri </strong> started paper-bag making business and supplies to Khadi Gramodyog. <br><br>
                <strong>Ekta Jain </strong> placed as assistant in a Beauty parlour "Face and Figure "in Uttam Nagar, New Delhi.<br><br>
                <strong>Pushpak Kar </strong> was placed at Cross Cultural Solutions, Y-70, Hauz Khas, New Delhi. Relocated to his home town Bhubaneswar, Orissa where he runs a photocopy shop with his father.<br><br>
                <strong>Atul Mathur </strong><strong>was </strong> placed at Cross Cultural Solutions, Y-70, Hauz Khas, New Delhi. <br><br>
                <strong>Pranob Dasgupta </strong> was placed as Assistant to the Librarian at University of Petroleum Studies. <br><br>
                <strong>Joginder Bendi </strong> is placed as Office Assistant at Special Olympics , Bharat, New Delhi.<br><br>
                <strong>Simrat Pal Singh </strong> assists his father in the family's Dry-clean shop. He was specially trained to tag the customers clothings.<br><br>
                <strong>Nikhil Krishna </strong> is working as Office assistant in Shriram Rayons, Barakhamba Road, Connaught Place New Delhi.<br><br>
                <strong>Nikhil Kumar </strong> is working as Office assistant in Shriram Rayons, Barakhamba Road, Connaught Place New Delhi.<br><br>
                <strong>Devesh Kumar</strong> was mainstreamed at D.P. S, R.K Puram in class 7 in 2008.<br><br>
                <strong>Ekas Kataria</strong>  is working as Teacher Assistant at Tagore International School, Vasant Vihar, New Delhi.<br><br>
                <strong>Niyati Salpekar</strong> is working as Teacher Assistant at Tagore International School, Vasant Vihar, New Delhi.<br><br>
                <strong>Anirudh Kapur</strong> is placed in the packaging department at "Mura Collectives" , an export house, in Neb Sarai, New Delhi.<br><br>
                <strong>Raghav Bhandari </strong>is placed in the packaging department at "Mura Collectives," an export house, in Neb Sarai, New Delhi.<br></p>
            </td>

</div>
</div>
</div>
</div>
</div>
</section>
@endsection
