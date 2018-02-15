<!-- Theme Main Menu ____________________________ -->
<div class="theme-main-menu theme-main-menu-v-two">
  <div class="container-fluid">
    <div class="main-menu menu-skew-div clear-fix menu-skew-v-two">
      <!-- Menu -->
      <nav class="navbar">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed tran3s" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
            <span class="sr-only tran3s">Toggle navigation</span>
            <span class="icon-bar tran3s"></span>
            <span class="icon-bar tran3s"></span>
            <span class="icon-bar tran3s"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active current-page-item Active-manu"><a href="/">Home</a></li>

            <li class="dropdown-holder"><a href="#sec-centres">Centres</a>
              <ul class="sub-menu">
                <li><a href="{{route('Autism.centre')}}" class="tran3s">Autism Center</a></li>
                <li><a href="{{route('SpecialEducation.centre')}}" class="tran3s">Special Education Center</a></li>
                <li><a href="{{route('SkillDevelopment.centre')}}" class="tran3s">Skill Development Center</a></li>
                <li><a href="{{route('Kindergarten.centre')}}" class="tran3s">Tamana Kindergarten</a></li>
              </ul>
            </li>

            <li><a href="{{route('training.index')}}">Training</a></li>

            <li class="dropdown-holder"><a href="#">Research</a></li>

            <li class="dropdown-holder"><a href="#sec-services">Services</a>
              <ul class="sub-menu">
                <li><a href="#sec-eic" class="tran3s">Early Intervention Centre</a></li>
                <li><a href="#sec-dc" class="tran3s">Diagnostic Centre</a></li>
                <li><a href="{{route('Kindergarten.centre')}}" class="tran3s">NIOS</a></li>
                <li><a href="{{route('Kindergarten.centre')}}" class="tran3s">Boys' Hostel</a></li>
              </ul>
            </li>

            <li class="dropdown-holder"><a href="#">Achievements</a>
              <ul class="sub-menu">
                <li><a href="{{route('Organization.achievements')}}" class="tran3s">Organization</a></li>
                <li><a href="{{route('Organization.students-alumni')}}" class="tran3s">Students-Alumni</a></li>
                <li><a href="{{route('Organization.media_coverage')}}" class="tran3s">Media Coverage</a></li>
              </ul>
            </li>

            <li class="dropdown-holder"><a href="#sec-events">Events</a>
              <ul class="sub-menu">
                <li><a href="#" class="tran3s">Events</a></li>
                <li><a href="#" class="tran3s">Recognition</a></li>
              </ul>
            </li>

            <li class="dropdown-holder"><a href="#">About Us</a>
              <ul class="sub-menu">
                <li><a href="{{ route('About.Board_Members') }}" class="tran3s">Board Members</a></li>
                <li><a href="#" class="tran3s">Objectives</a></li>
                <li><a href="#" class="tran3s">Curriculum</a></li>
                <li><a href="#" class="tran3s">Specialised Activities</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div class="float-right">
        <div class="search-button-content clear-fix">
          <a href="{{route('Shop.Index')}}" class="cart tran3s" style="font-size:20px">Shop</a>

          <button class="cart tran3s"><i class="flaticon-shopping-bag"></i> <span>0</span></button>
            <button class="search tran3s" id="search-button"><i class="flaticon-search"></i></button>
            <div class="search-box tran5s" id="searchWrapper">
              <button id="close-button" class="p-color"><i class="fa fa-times" aria-hidden="true"></i></button>
              <div class="container">
                  <img src="{{ asset('images/logo/theme-main-logo-1.png')}}" alt="Logo">
                <form action="#">
                  <input type="text" placeholder="Search....">
                  <button class="p-bg-color"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
              </div>
            </div> <!-- /.search-box -->
            <a href="{{ route('donate.page') }}" class="a-comon main-menu-button">Donate <i class="flaticon-hand"></i></a>
          </div> <!-- /.right-content -->
      </div> <!-- /.float-right -->
    </div> <!-- / menu-skew-div -->
  </div> <!-- /.container main-menu -->
</div> <!-- /.main-menu -->
</section>
