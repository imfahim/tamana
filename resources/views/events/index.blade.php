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
  color: #BB8889;
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
						<div class="col-md-12">
							<div class="container-x">
								<section id="fancyTabWidget" class="tabs t-tabs">
								        <ul class="nav nav-tabs fancyTabs" role="tablist">

								                    <li class="tab fancyTab active">
								                    <div class="arrow-down"><div class="arrow-down-inner"></div></div>
								                        <a id="tab0" href="#tabBody0" role="tab" aria-controls="tabBody0" aria-selected="true" data-toggle="tab" tabindex="0"><i class="fa fa-calendar-check-o"></i><br><span class="hidden-xs">Upcoming Events</span></a>
								                    	<div class="whiteBlock"></div>
								                    </li>

								                    <li class="tab fancyTab">
								                    <div class="arrow-down"><div class="arrow-down-inner"></div></div>
								                        <a id="tab1" href="#tabBody1" role="tab" aria-controls="tabBody1" aria-selected="true" data-toggle="tab" tabindex="0"><i class="fa fa-calendar-times-o"></i><br><span class="hidden-xs">Past Events</span></a>
								                        <div class="whiteBlock"></div>
								                    </li>

								        </ul>
								        <div id="myTabContent" class="tab-content fancyTabContent" aria-live="polite">
								                    <div class="tab-pane  fade active in" id="tabBody0" role="tabpanel" aria-labelledby="tab0" aria-hidden="false" tabindex="0">
								                        <div>
								                        	<div class="row">

								                                <div class="col-md-12">
                                                    <ul class="Events-Item-Wrapper">
                                          						<li class="clear-fix">
                                          							<div class="events-img"><img src="{{ asset('images/home/img-4.jpg')}}" alt="image"></div><!-- /.events-img -->
                                          							<div class="day">
                                          								<h2>23</h2>
                                          								<h6>NOVEMBER <br> Monday</h6>
                                          							</div> <!-- /.day -->
                                          							<div class="events-text">
                                          								<h4>Sharing seeds, sparking connection</h4>
                                          								<p><i>24 December 2017, 08:00 - 27 December 2017, 00:00</i> Brooklyn, NY 10036 New York, NY 10036 New York, United States</p>
                                          							</div> <!-- /.events-text -->
                                          						</li> <!-- /.clear-fix -->
                                          					</ul>

                                                    <ul class="Events-Item-Wrapper">
                                          						<li class="clear-fix">
                                          							<div class="events-img"><img src="{{ asset('images/home/img-4.jpg')}}" alt="image"></div><!-- /.events-img -->
                                          							<div class="day">
                                          								<h2>23</h2>
                                          								<h6>NOVEMBER <br> Monday</h6>
                                          							</div> <!-- /.day -->
                                          							<div class="events-text">
                                          								<h4>Sharing seeds, sparking connection</h4>
                                          								<p><i>24 December 2017, 08:00 - 27 December 2017, 00:00</i> Brooklyn, NY 10036 New York, NY 10036 New York, United States</p>
                                          							</div> <!-- /.events-text -->
                                          						</li> <!-- /.clear-fix -->
                                          					</ul>

								                                </div>

								                            </div>
								                        </div>
								                    </div>
								                    <div class="tab-pane  fade" id="tabBody1" role="tabpanel" aria-labelledby="tab1" aria-hidden="true" tabindex="0">
                                      <div>
                                        <div class="row">

                                              <div class="col-md-12">
                                                  <ul class="Events-Item-Wrapper">
                                                    <li class="clear-fix">
                                                      <div class="events-img"><img src="{{ asset('images/home/img-4.jpg')}}" alt="image"></div><!-- /.events-img -->
                                                      <div class="day">
                                                        <h2>23</h2>
                                                        <h6>NOVEMBER <br> Monday</h6>
                                                      </div> <!-- /.day -->
                                                      <div class="events-text">
                                                        <h4>Sharing seeds, sparking connection</h4>
                                                        <p><i>24 December 2017, 08:00 - 27 December 2017, 00:00</i> Brooklyn, NY 10036 New York, NY 10036 New York, United States</p>
                                                      </div> <!-- /.events-text -->
                                                    </li> <!-- /.clear-fix -->
                                                  </ul>

                                                  <ul class="Events-Item-Wrapper">
                                                    <li class="clear-fix">
                                                      <div class="events-img"><img src="{{ asset('images/home/img-4.jpg')}}" alt="image"></div><!-- /.events-img -->
                                                      <div class="day">
                                                        <h2>23</h2>
                                                        <h6>NOVEMBER <br> Monday</h6>
                                                      </div> <!-- /.day -->
                                                      <div class="events-text">
                                                        <h4>Sharing seeds, sparking connection</h4>
                                                        <p><i>24 December 2017, 08:00 - 27 December 2017, 00:00</i> Brooklyn, NY 10036 New York, NY 10036 New York, United States</p>
                                                      </div> <!-- /.events-text -->
                                                    </li> <!-- /.clear-fix -->
                                                  </ul>

                                              </div>

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
