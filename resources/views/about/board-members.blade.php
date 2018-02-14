@extends('layouts.main')

@section('page-styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">

<style>
  .swiper-container {
    width: 100%;
    height: 100%;
  }
  .swiper-slide {
    background: #fff;
    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
  }
</style>

@endsection

@section('content')
<!-- Theme Inner Banner ____________________________ -->
			<section>
				<div class="Theme-Inner-Banner inner-banner-bg-img-one" style="background: url('http://tamana.org/PhotoGallery/Diwali%20Mela%202015/FullSizeRender.jpg') no-repeat center center;background-size: cover;background-attachment: fixed;">
					<div class="banner-opacity">
						<div class="container">
							<div class="banner-content">
								<h1>Board Members</h1>
                <p>MEMBERS OF THE GOVERNING COUNCIL OF <br>TAMANA</p>
								<ul>
									<li><a href="/">Home</a></li>
									<li><span>-</span></li>
									<li><a href="{{route('About.Board_Members')}}">Board Members</a></li>
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
            <h4 style="color: #7F1F21;">THE WINDS BENEATH OUR WINGS:</h4>
            <p><br></p>
            <p>
            Tamana is fortunate to have people of high calibre, repute and exceptional capabilities to grace its Governing Body. These are multi-faceted personalities who are at the peak in their individual professions but who have a deep-rooted love and concern for children with disabilities. They have all been instrumental in the growth of the association and have made significant contribution to the society in more than one way. The achievements of Tamana would not have been possible without the active involvement and support from the concerned and motivated members of the body. <br><br>
          </p>

          <h5 style="color: #7F1F21;">Patrons</h5>
          <hr>

          <!-- Swiper -->
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="Admin-Text">
                  <img src="{{ asset('images/causes/5.jpg') }}" alt="image">
                  <div class="Text">
                    <div class="clearfix">
                      <div class="float-left">
                        <h6>Dr. Randhir Sud</h6>
                      </div>
                    </div> <!-- /.clearfix -->
                    <p>Padma Shri Awardee</p>
                    <p>Doctor (Gastroenterologist)</p>
                  </div> <!-- /.Text -->
                </div> <!-- /.Admin-Text -->
              </div>
              <div class="swiper-slide">
                <div class="Admin-Text">
                  <img src="{{ asset('images/causes/5.jpg') }}" alt="image">
                  <div class="Text">
                    <div class="clearfix">
                      <div class="float-left">
                        <h6>Dr. Geraldine Dawson</h6>
                      </div>
                    </div> <!-- /.clearfix -->
                    <p>Professor, Dept. of Psychiatry and Behavior Science</p>
                    <p>Duke University, USA</p>
                  </div> <!-- /.Text -->
                </div> <!-- /.Admin-Text -->
              </div>
              <div class="swiper-slide">
                <div class="Admin-Text">
                  <img src="{{ asset('images/causes/5.jpg') }}" alt="image">
                  <div class="Text">
                    <div class="clearfix">
                      <div class="float-left">
                        <h6>Sir David Goodall</h6>
                      </div>
                    </div> <!-- /.clearfix -->
                    <p>Former British High Commissioner</p>
                  </div> <!-- /.Text -->
                </div> <!-- /.Admin-Text -->
              </div>
              <div class="swiper-slide">
                <div class="Comments-Item">
                  <img src="{{ asset('images/causes/6.jpg') }}" alt="image">
                  <h6>Simran Jastic</h6>
                  <span>3 months ago</span>
                  <p>My birthday is on the 15th February. My favourite game is playing with dolls. In Koh Krolor life is hard for children like me.</p>
                  <a href="#" class="hvr-float-shadow">Reply</a>
                </div> <!-- /.Comments-Item -->
              </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>


          <h5 style="color: #7F1F21;">Chairman</h5>
          <hr>

          <div class="Admin-Text">
            <img src="{{ asset('images/causes/5.jpg') }}" alt="image">
            <div class="Text">
              <div class="clearfix">
                <div class="float-left">
                  <h6>Dr. Harsh Mahajan</h6>
                </div>
              </div> <!-- /.clearfix -->
              <p>Padma Shri Awardee</p>
              <p>Doctor ( Radiologist)</p>
            </div> <!-- /.Text -->
          </div> <!-- /.Admin-Text -->


          <h5 style="color: #7F1F21;">Founder and President</h5>
          <hr>

          <div class="Admin-Text">
            <img src="{{ asset('images/causes/5.jpg') }}" alt="image">
            <div class="Text">
              <div class="clearfix">
                <div class="float-left">
                  <h6>Dr. (Mrs.) Shayama Chona</h6>
                </div>
              </div> <!-- /.clearfix -->
              <p>Padma Bhushan and Padma Shri Awardee</p>
              <p>Educationist and Social Activist</p>
            </div> <!-- /.Text -->
          </div> <!-- /.Admin-Text -->

          <h5>Vice President<h5>
          <hr>
          <p>
            &emsp;&emsp;&#9673;&nbsp;Mr. Vikram Chona<span> <strong><i>( Corporate Executive )</i></strong></span><br>
            &emsp;&emsp;&#9673;&nbsp;Mrs. Urmila Aggarwal<span> <strong><i>( Entrepreneur )</i></strong></span><br>
          </p>
          <br><br>

          <h5>General Secretary<h5>
          <hr>
          <p>
            &emsp;&emsp;&#9673;&nbsp;Annie Howard<span> <strong><i>( Social Activist )</i></strong></span><br>
          </p>
          <br><br>

          <h5>Treasurer<h5>
          <hr>
          <p>
            &emsp;&emsp;&#9673;&nbsp;Mr. Harish Mahajan<span> <strong><i>( Business )</i></strong></span><br>
          </p>
          <br><br>

          <h5>Jt. Secretary<h5>
          <hr>
          <p>
            &emsp;&emsp;&#9673;&nbsp;Mrs. Sangeeta Gupta<span> <strong><i>( Special educator )</i></strong></span><br>
          </p>
          <br><br>

          <h5>Members<h5>
          <hr>
          <p>
            &emsp;&emsp;&#9673;&nbsp;Mrs Anuradha Kumar<br>
            &emsp;&emsp;&#9673;&nbsp;Mr. Amit Sundra<br>
            &emsp;&emsp;&#9673;&nbsp;Ms. Abha Chona<br>
            &emsp;&emsp;&#9673;&nbsp;Ms. Vinita Krishna<br>
            &emsp;&emsp;&#9673;&nbsp;Ms. Sarita Goswami<br>
            &emsp;&emsp;&#9673;&nbsp;Ms. Pushpa Aggarwal<br>
            &emsp;&emsp;&#9673;&nbsp;Ms. Nandini Singh<br>
            &emsp;&emsp;&#9673;&nbsp;Mr. Swapnil Jain<br>
          </p>

          <div class="Admin-Text">
            <img src="http://tamana.org/images/Dr_Randhir_Sud.jpg" alt="image">
            <div class="Text">
              <div class="clearfix">
                <div class="float-left">
                  <h6>Dr Randhir Sud:</h6>
                </div>
              </div> <!-- /.clearfix -->
              <p>
                The Chairman of the Institute of Digestive & Hepatobiliary Sciences, at Medanta The Medcity, Gurgaon, Dr. Randhir Sud is a novice of Gastroenterology. He has been working to establish the therapeutic GI Endoscopy in India. He started the GI Oncology program in India. In 2008, he bagged the Padmashri Award for his contribution in Gastroenterology. His expertise lies in Gastro Intestinal Endoscopy, Gastro Intestinal Cancers and Hepatic diseases. He started his career at the position of Junior Residency in January 1979 at AIIMS, New Delhi. He also held the position of Senior Residency between 1982 and 1984 at AIIMS. He moved on as a consultant in GE at Sir Ganga Ram Hospital in New Delhi in 1985. He has a six-year experience in teaching undergraduate and postgraduate students at AIIMS. He is an approved teaching faculty and examiner for the Diplomate National Board Examination in Gastroenterology conducted by the National Board of Examinations. Dr. Randhir Sud has also taught at the Harvard Medical Scho	in Boston as a visiting professor in 1999. In 2005, he was also called as a visiting professor at the University of Texas Medical Branch (UTMB) in Galveston, Texas and the University of Alabama, Birmingham, Alabama (U.S.A). As a medical student, Dr. Sud pursued the M.B.B.S degree from the Government Medical College in Amritsar in 1977. He further studied and became M.D. (Medicine) in 1981 at AIIMS, New Delhi, where he also attained the D.M. (Gastroenterology) degree in 1983. During his academic years, he won several gold and other medals for his performance in medical examinations.
              </p>
            </div> <!-- /.Text -->
          </div> <!-- /.Admin-Text -->

          <br><br>

          <h5>Principal Advisor<h5>
          <hr>
          <p>
            &emsp;&emsp;&#9673;&nbsp;Ambience Public School, New Delhi<br>
            &emsp;&emsp;&#9673;&nbsp;Lotus Valley International School, Gurgaon<br>
            &emsp;&emsp;&#9673;&nbsp;SCJ World Academy, Gurgaon,<br>
            &emsp;&emsp;&#9673;&nbsp;Greater Valley School, Greater Noida<br>
            &emsp;&emsp;&#9673;&nbsp;Royal Global School, Guwahati, Assam.<br>
            &emsp;&emsp;&#9673;&nbsp;Vedant Education Trust<br>
            &emsp;&emsp;&#9673;&nbsp;Sparsh Group<br>
          </p>
          <br>

          <p>
            A proud recipient of 54 awards including the Padma Bhushan, Padma Shri, two National Awards and one State Award, Dr. Chona has served society and humanity with distinction and timeless dedication. Her name finds place in the Limca Book of World Records 2007 for getting the maximum number of awards. It is her mission to educate and empower the abled and differently abled that helps her to stand apart. She believes that a child is God’s gift to man and needs to be nurtured in an atmosphere of discovery, enquiry, learning, expression and communication.
          </p>

          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" style="background-color:#7F1F21;color:white">Address:</div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-4">
                <p>CPWD Complex<br>
                Near Chinmaya Vidyalaya<br>
                Vasant Vihar, New Delhi.<br>
                Tel: 26143843/26153474<br>
                Principal - Ms Usha Varma<br>
                Meeting time with the Principal -10am--12pm (Mon-Fri)<br>
                Email - <a href="info@tamana.org">info@tamana.org</a><p>
              </div>
              <div class="col-md-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.45246877306!2d77.15601201508088!3d28.556172782448048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1dba8b5b30f5%3A0x412ebeae9593273f!2sChinmaya+Vidyalaya!5e0!3m2!1sen!2sin!4v1517810189672" width="750" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>

            </div>
          </div>
        </div>

      </div>




@endsection

@section('page-scripts')
<!-- Swiper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
@endsection
