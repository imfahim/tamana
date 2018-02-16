@extends('layouts.main')

@section('page-styles')
<style>
.container-x {
  margin-top:30px;
}

h1, h2, h3, h4, h5, h6 {
  font-family: 'Source Sans Pro';
  font-weight:700;
}

.fancyTab {
	text-align: center;
  padding:15px 0;
  background-color: #eee;
	box-shadow: 0 0 0 1px #ddd;
	top:15px;
  transition: top .2s;
}

.fancyTab.active {
  top:0;
  transition:top .2s;
}

.whiteBlock {
  display:none;
}

.fancyTab.active .whiteBlock {
  display:block;
  height:2px;
  bottom:-2px;
  background-color:#fff;
  width:99%;
  position:absolute;
  z-index:1;
}

.fancyTab a {
	font-family: 'Source Sans Pro';
	font-size:1.65em;
	font-weight:300;
  transition:.2s;
  color:#333;
}

/*.fancyTab .hidden-xs {
  white-space:nowrap;
}*/

.fancyTabs {
	border-bottom:2px solid #ddd;
  margin: 15px 0 0;
}

li.fancyTab a {
  padding-top: 15px;
  top:-15px;
  padding-bottom:0;
}

li.fancyTab.active a {
  padding-top: inherit;
}

.fancyTab .fa {
  font-size: 40px;
	width:100%;
	padding: 15px 0 5px;
  color:#666;
}

.fancyTab.active .fa {
  color: #cfb87c;
}

.fancyTab a:focus {
	outline:none;
}

.fancyTabContent {
  border-color: transparent;
  box-shadow: 0 -2px 0 -1px #fff, 0 0 0 1px #ddd;
  padding: 30px 15px 15px;
  position:relative;
  background-color:#fff;
}

.nav-tabs > li.fancyTab.active > a,
.nav-tabs > li.fancyTab.active > a:focus,
.nav-tabs > li.fancyTab.active > a:hover {
	border-width:0;
}

.nav-tabs > li.fancyTab:hover {
	background-color:#f9f9f9;
	box-shadow: 0 0 0 1px #ddd;
}

.nav-tabs > li.fancyTab.active:hover {
  background-color:#fff;
  box-shadow: 1px 1px 0 1px #fff, 0 0px 0 1px #ddd, -1px 1px 0 0px #ddd inset;
}

.nav-tabs > li.fancyTab:hover a {
	border-color:transparent;
}

.nav.nav-tabs .fancyTab a[data-toggle="tab"] {
  background-color:transparent;
  border-bottom:0;
}

.nav-tabs > li.fancyTab:hover a {
  border-right: 1px solid transparent;
}

.nav-tabs > li.fancyTab > a {
	margin-right:0;
	border-top:0;
  padding-bottom: 30px;
  margin-bottom: -30px;
}

.nav-tabs > li.fancyTab {
	margin-right:0;
	margin-bottom:0;
}

.nav-tabs > li.fancyTab:last-child a {
  border-right: 1px solid transparent;
}

.nav-tabs > li.fancyTab.active:last-child {
  border-right: 0px solid #ddd;
	box-shadow: 0px 2px 0 0px #fff, 0px 0px 0 1px #ddd;
}

.fancyTab:last-child {
  box-shadow: 0 0 0 1px #ddd;
}

.tabs .nav-tabs li.fancyTab.active a {
	box-shadow:none;
  top:0;
}


.fancyTab.active {
  background: #fff;
	box-shadow: 1px 1px 0 1px #fff, 0 0px 0 1px #ddd, -1px 1px 0 0px #ddd inset;
  padding-bottom:30px;
}

.arrow-down {
	display:none;
  width: 0;
  height: 0;
  border-left: 20px solid transparent;
  border-right: 20px solid transparent;
  border-top: 22px solid #ddd;
  position: absolute;
  top: -1px;
  left: calc(50% - 20px);
}

.arrow-down-inner {
  width: 0;
  height: 0;
  border-left: 18px solid transparent;
  border-right: 18px solid transparent;
  border-top: 12px solid #fff;
  position: absolute;
  top: -22px;
  left: -18px;
}

.fancyTab.active .arrow-down {
  display: block;
}

@media (max-width: 1200px) {

  .fancyTab .fa {
  	font-size: 36px;
  }

  .fancyTab .hidden-xs {
    font-size:22px;
	}

}


@media (max-width: 992px) {

  .fancyTab .fa {
  	font-size: 33px;
  }

  .fancyTab .hidden-xs {
  	font-size:18px;
    font-weight:normal;
  }

}


@media (max-width: 768px) {

  .fancyTab > a {
    font-size:18px;
  }

  .nav > li.fancyTab > a {
    padding:15px 0;
    margin-bottom:inherit;
  }

  .fancyTab .fa {
    font-size:30px;
  }

  .nav-tabs > li.fancyTab > a {
    border-right:1px solid transparent;
    padding-bottom:0;
  }

  .fancyTab.active .fa {
    color: #333;
	}

}

.file-upload{display:block;text-align:center;font-family: Helvetica, Arial, sans-serif;font-size: 12px;}
.file-upload .file-select{display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
.file-upload .file-select .file-select-button{background:#dce4ec;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
.file-upload .file-select .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
.file-upload .file-select:hover{border-color:#34495e;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload .file-select:hover .file-select-button{background:#34495e;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload.active .file-select{border-color:#3fa46a;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload.active .file-select .file-select-button{background:#3fa46a;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload .file-select input[type=file]{z-index:100;cursor:pointer;position:absolute;height:100%;width:100%;top:0;left:0;opacity:0;filter:alpha(opacity=0);}
.file-upload .file-select.file-select-disabled{opacity:0.65;}
.file-upload .file-select.file-select-disabled:hover{cursor:default;display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;margin-top:5px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
.file-upload .file-select.file-select-disabled:hover .file-select-button{background:#dce4ec;color:#666666;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
.file-upload .file-select.file-select-disabled:hover .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
</style>
@endsection

@section('content')
<!-- Theme Inner Banner ____________________________ -->
			<section>
				<div class="Theme-Inner-Banner inner-banner-bg-img-one" style="background: url('http://tamana.org/PhotoGallery/Diwali%20Mela%202015/FullSizeRender.jpg') no-repeat center center;background-size: cover;background-attachment: fixed;">
					<div class="banner-opacity">
						<div class="container">
							<div class="banner-content">
								<h1>Donations</h1>
                <p>Donate or Sponser by <br>TAMANA</p>
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
            <h4 style="color: #7F1F21;">Choose how you want to help : </h4>
            <p><br></p>
						<div class="col-md-12">
							<div class="container-x">
								<section id="fancyTabWidget" class="tabs t-tabs">
								        <ul class="nav nav-tabs fancyTabs" role="tablist">

								                    <li class="tab fancyTab active">
								                    <div class="arrow-down"><div class="arrow-down-inner"></div></div>
								                        <a id="tab0" href="#tabBody0" role="tab" aria-controls="tabBody0" aria-selected="true" data-toggle="tab" tabindex="0"><i class="flaticon-donation-1"></i><br><span class="hidden-xs">Donate</span></a>
								                    	<div class="whiteBlock"></div>
								                    </li>

								                    <li class="tab fancyTab">
								                    <div class="arrow-down"><div class="arrow-down-inner"></div></div>
								                        <a id="tab1" href="#tabBody1" role="tab" aria-controls="tabBody1" aria-selected="true" data-toggle="tab" tabindex="0"><i class="flaticon-handshake"></i><br><span class="hidden-xs">Sponser A Child</span></a>
								                        <div class="whiteBlock"></div>
								                    </li>

								        </ul>
								        <div id="myTabContent" class="tab-content fancyTabContent" aria-live="polite">
								                    <div class="tab-pane  fade active in" id="tabBody0" role="tabpanel" aria-labelledby="tab0" aria-hidden="false" tabindex="0">
								                        <div>
								                        	<div class="row">

								                                <div class="col-md-12">
								                        						<h2>Donate to <span style="color: #7F1F21;">Tamana</span> Today</h2>
								                                    <p>
																											Since its inception Tamana has touched the lives of thousands of special needs individuals. Tamana's rehabilitative services have been availed by special needs children from all over India and all socio-economic backgrounds. Children from economically deprived sections of society are provided services free of cost. To enable Tamana to continue to expand its programmes of special education, therapeutic interventions and vocational training for the special needs whose number is still large in and around the city and much larger in the villages and other parts of the country, it is humbly requested to kindly donate generously for the noble cause.

																											Donations are exempted under section 80-G of the income tax act 1961 vide LR.NO.DIT(E)/2007-2008/T-149/1907 dated 19/09/2007 from 01.04.2007 to 31.03.2010. This exemption does not apply to foreign contributions. Donations are accepted in cash, cheque or NEFT/ wire transfer. We accept foreign donations too.
																											For further information contact Accounts Manager at tamanarajee@gmail.com or call at 01126151587/26148269
																										</p>
																										<br>
																										<h5 style="color: #7F1F21;">DETAILS OF DONATIONS RECEIVED IN FCRA A/C FOR THE PERIOD 1/04/2017 to 30/09/2017</h5>
																					          <hr>
																										<table align="center" border="1" cellpadding="10" cellspacing="10" width="80%">
																										<tbody><tr>
																										<th> Date</th>
																										<th> Name</th>
																										<th> Address</th>
																										<th> Amount</th>
																										</tr>
																										<tr>
																										<td valign="middle">20/04/2017</td>
																										<td valign="middle"> AUSTRALIAN HIGH COMMISSION </td>
																										<td valign="middle"> 1/50, G, Shantipath, Chanakyapuri, New Delh i-110021</td>
																										<td valign="middle">Rs 11,21,750/-</td>
																										</tr>
																										<tr>
																										<td valign="middle">04/08/2017</td>
																										<td valign="middle"> COCA-COLA INDIA PVT.LTD. </td>
																										<td valign="middle"> One Horizon Center, 16-17th Floor, DLF Golf Course Rd, DLF Phase 5, Sector 43, Gurgaon, Haryana -122003, India </td>
																										<td valign="middle">Rs 2,00,000/-</td>
																										</tr>
																										<tr>
																										<td valign="middle">09/08/2017</td>
																										<td valign="middle"> NOT AVAILABLE – Net banking </td>
																										<td valign="middle"> NOT AVAILABLE </td>
																										<td valign="middle">Rs 2,100/-</td>
																										</tr>
																										<tr>
																										<td valign="middle">09/08/2017</td>
																										<td valign="middle"> NOT AVAILABLE – Net banking </td>
																										<td valign="middle"> NOT AVAILABLE </td>
																										<td valign="middle">Rs 1,100/-</td>
																										</tr>

																										</tbody></table>
																										<br>
																										<h5 style="color: #7F1F21;">DETAILS OF DONATIONS RECEIVED IN FCRA A/C FOR THE PERIOD 1/10/16 to 31/12/16</h5>
																					          <hr>
																										<table align="center" border="1" cellpadding="10" cellspacing="10" width="80%">
																										<tbody><tr>
																										<th> Date</th>
																										<th> Name</th>
																										<th> Address</th>
																										<th> Amount</th>
																										</tr>
																										<tr>
																										<td valign="middle">03/10/2016</td>
																										<td valign="middle">Not available, amount received through mobile banking</td>
																										<td valign="middle"> </td>
																										<td valign="middle">Rs 2,100/-</td>
																										</tr>
																										<tr>
																										<td valign="middle">16/12/2016</td>
																										<td valign="middle">CAF, India </td>
																										<td valign="middle">Plot/ Site No.2, First Floor, Sector.C (OFC  Pocket), Nelson Mandela Marg, Vasant Kunj, New Delhi -70</td>
																										<td valign="middle">Rs 18,400/-</td>
																										</tr>
																										<tr>
																										<td valign="middle">19/12/2016</td>
																										<td valign="middle">Give Foundation</td>
																										<td valign="middle">GiveIndia-B-703, Pramukh Plaza,  Andheri Kurla Road, Chakala, Andheri(E), Mumbai  - 400093</td>
																										<td valign="middle">Rs 7852.87/-</td>
																										</tr>
																										</tbody></table>
								                                </div>

								                            </div>
								                        </div>
								                    </div>
								                    <div class="tab-pane  fade" id="tabBody1" role="tabpanel" aria-labelledby="tab1" aria-hidden="true" tabindex="0">
								                        <div class="row">

								                                <div class="col-md-12">
								                        						<h2>Sponser A Child with <span style="color: #7F1F21;">Tamana</span></h2>
								                                    <p>
																											Could you have ever imagined that the aspirations of special individual would be so simple and so unique? We never expect our normal children to have aspirations like being able to tie a shoe lace on their own, being able to feed them selves or dress them selves. These things, which we take for granted in our normal children, a special child has to practice laboriously to achieve under professional supervision.

																											We at Tamana look upon every special individual as someone who can realize their full potential and become happy, useful members of society. Under the one big cherished dream of seeing each child become an independent adult, one of the many goals of Tamana is providing holistic developmental education to children with special needs. Tamana tries to give wings to their dreams and help them become self reliant.

																											You can also extend your hand and sponsor the education and vocational training of a child and help fulfill his/ her aspiration. We can assure you of the warmth reaching your heart as the hand of a special child curls into yours.

																											All Donations are exempt under section 80G of Income Tax Act. Tamana accepts donations in foreign currency from patrons/ supporter abroad Cheques in favour of TAMANA can be mailed to Tamana, C-10/8, Vasant Vihar, New Delhi-110057.
																										</p>
																										<!-- Join Volunteer ____________________________ -->
																										<section class="Join-Volunteer-Pages">
																												<div class="Theme-title text-center">
																													<h2>Please Fill Up The Form</h2>
																													<h6>Sponser A Child Form</h6>
																												</div>
																												<form action="#">
																													<div class="row">
																														<div class="col-xs-12">
																															<p>
																																Cost per year - One child is $1613 / INR 71000
																																I would like sponsor a child for-
																															</p>
																															<div class="single-input">
																																<select class="selectpicker">
																																	<option>Full Amount (One Year)</option>
																																	<option>Full Amount (Two Year)</option>
																																	<option>Full Amount (More)</option>
																																	<option>Part Amount (One Year)</option>
																																	<option>Part Amount (Two Year)</option>
																																	<option>Part Amount (More)</option>
																																</select>
																															</div> <!-- /.single-input -->
																														</div> <!-- /.col -->
																														<div class="col-xs-12">
																															<p>
																																I would like to Continue to sponsor the same child for -
																															</p>
																															<div class="single-input">
																																<select class="selectpicker">
																																	<option>Full Amount (One Year)</option>
																																	<option>Full Amount (Two Year)</option>
																																	<option>Full Amount (More)</option>
																																	<option>Part Amount (One Year)</option>
																																	<option>Part Amount (Two Year)</option>
																																	<option>Part Amount (More)</option>
																																</select>
																															</div> <!-- /.single-input -->
																														</div> <!-- /.col -->
																														<div class="col-md-4 col-sm-6 col-xs-12">
																															<div class="single-input">
																																<input type="text" placeholder="Sponsership Amount *">
																															</div> <!-- /.single-input -->
																														</div> <!-- /.col -->
																														<div class="col-md-4 col-sm-6 col-xs-12">
																															<div class="single-input">
																																<input type="text" placeholder="Name *">
																															</div> <!-- /.single-input -->
																														</div> <!-- /.col -->
																														<div class="col-md-4 col-sm-6 col-xs-12">
																															<div class="single-input">
																																<input type="email" placeholder="Email *">
																															</div> <!-- /.single-input -->
																														</div> <!-- /.col -->
																														<div class="col-xs-12">
																															<div class="single-textarea">
																																<textarea placeholder="Address *"></textarea>
																															</div> <!-- /.single-textarea -->
																														</div> <!-- /.col -->
																														<div class="col-md-6 col-sm-8 col-xs-12">
																															<div class="single-input">
																																<input type="text" placeholder="Tel No.">
																															</div> <!-- /.single-input -->
																														</div> <!-- /.col -->
																														<div class="col-md-6 col-sm-8 col-xs-12">
																															<div class="single-input">
																																<input type="text" placeholder="Fax No.">
																															</div> <!-- /.single-input -->
																														</div> <!-- /.col -->
																														<div class="col-md-12 col-sm-12 col-xs-12">
																															<div class="single-input">
																																<input type="text" placeholder="Cheque No.">
																															</div> <!-- /.single-input -->
																														</div> <!-- /.col -->
																														<div class="col-md-6 col-sm-8 col-xs-12">
																															<div class="single-input">
																																<input type="text" placeholder="Drawn On">
																															</div> <!-- /.single-input -->
																														</div> <!-- /.col -->
																														<div class="col-md-6 col-sm-8 col-xs-12">
																															<div class="single-input">
																																<input type="text" placeholder="Dated">
																															</div> <!-- /.single-input -->
																														</div> <!-- /.col -->
																														<div class="col-md-12 col-sm-12 col-xs-12">
																															<div class="single-input">
																																<input type="text" placeholder="Cash (in figures)">
																															</div> <!-- /.single-input -->
																														</div> <!-- /.col -->
																														<div class="col-md-12 col-sm-12 col-xs-12">
																															<div class="single-input">
																																<input type="text" placeholder="In Words">
																															</div> <!-- /.single-input -->
																														</div> <!-- /.col -->
																														<div class="col-md-12 col-sm-12 col-xs-12">
																															<div class="single-input">
																																<h6 style="color: #7F1F21;">
																																	Signature *
																																</h6>
																																<div class="file-upload">
																																  <div class="file-select">
																																    <div class="file-select-button" id="fileName">Choose File</div>
																																    <div class="file-select-name" id="noFile">No file chosen...</div>
																																    <input type="file" name="chooseFile" id="chooseFile">
																																  </div>
																																</div>
																															</div> <!-- /.single-input -->
																														</div> <!-- /.col -->
																														<div class="col-md-12 col-sm-12 col-xs-12">
																															<p>
																																Please make your cheque/ draft payable to TAMANA
																																(Donors exempted under section 80-G of I.T Act vide Commissioner Delhi Letter no. DIT (E) 2004-2005/ T-I49/83/1441 A-Y 1/4/04 to 31/3/2007)
																															</p>
																														</div> <!-- /.col -->
																													</div> <!-- /.row -->
																													<button class="hvr-float-shadow">Send</button>
																												</form> <!-- /Form -->
																										</section> <!-- /.Join-Volunteer-Pages -->
								                                </div>
								                            </div>
								                    </div>
								        </div>

								    </section>
								</div>
						</div>





        </div>

      </div>
		</div>




@endsection

@section('page-scripts')
<script>

$(document).ready(function() {



    var numItems = $('li.fancyTab').length;


			  if (numItems == 12){
					$("li.fancyTab").width('8.3%');
				}
			  if (numItems == 11){
					$("li.fancyTab").width('9%');
				}
			  if (numItems == 10){
					$("li.fancyTab").width('10%');
				}
			  if (numItems == 9){
					$("li.fancyTab").width('11.1%');
				}
			  if (numItems == 8){
					$("li.fancyTab").width('12.5%');
				}
			  if (numItems == 7){
					$("li.fancyTab").width('14.2%');
				}
			  if (numItems == 6){
					$("li.fancyTab").width('16.666666666666667%');
				}
			  if (numItems == 5){
					$("li.fancyTab").width('20%');
				}
			  if (numItems == 4){
					$("li.fancyTab").width('25%');
				}
			  if (numItems == 3){
					$("li.fancyTab").width('33.3%');
				}
			  if (numItems == 2){
					$("li.fancyTab").width('50%');
				}




		});

$(window).load(function() {

  $('.fancyTabs').each(function() {

    var highestBox = 0;
    $('.fancyTab a', this).each(function() {

      if ($(this).height() > highestBox)
        highestBox = $(this).height();
    });

    $('.fancyTab a', this).height(highestBox);

  });
});

$('#chooseFile').bind('change', function () {
  var filename = $("#chooseFile").val();
  if (/^\s*$/.test(filename)) {
    $(".file-upload").removeClass('active');
    $("#noFile").text("No file chosen...");
  }
  else {
    $(".file-upload").addClass('active');
    $("#noFile").text(filename.replace("C:\\fakepath\\", ""));
  }
});

</script>
@endsection
