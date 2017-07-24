<aside>
          <div id="sidebar" class="nav-collapse " tabindex="5000" style="overflow: hidden; outline: none;">
              <!-- sidebar menu start-->

              <ul class="sidebar-menu">

                  <li class="">
                      <a class="" href="/hospital/public/">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  @if(\Illuminate\Support\Facades\Auth::user()->user_type == 'Nurse' || 'Administrator' || 'Doctor' || 'Receptionist')
                  <li class="sub-menu">
                      <a href="javascript:" class="">
                          <i class="fa fa-wheelchair"></i>
                          <span>Infant Mgt</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="/hospital/public/infantdetails">Add New Infant</a></li>
                          <li><a class="" href="/hospital/public/infantmaster">Infant Masterlist</a></li>
                      </ul>
                  </li>
                  @endif

                  @if(\Illuminate\Support\Facades\Auth::user()->user_type == 'Receptionist'||'Administrator')
                  <li class="sub-menu">
                      <a href="javascript:" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Receptionist</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="/hospital/public/appointments">Appointments</a></li>
                          <li><a class="" href="/hospital/public/viewappointments">List Appointments</a></li>

                      </ul>
                  </li>
                  @endif

                  @if(\Illuminate\Support\Facades\Auth::user()->user_type == 'Nurse'||'Administrator')
                      <li class="sub-menu">
                          <a href="javascript:" class="">
                              <i class="fa fa-plus-square"></i>
                              <span>Nurse Module</span>
                              <span class="menu-arrow arrow_carrot-right"></span>
                          </a>
                          <ul class="sub">
                              <li><a class="" href="/hospital/public/immunize">Immunization</a></li>
                              <!--<li><a class="" href="#">checkup</a></li>-->

                          </ul>
                      </li>
                  @endif

                  @if(\Illuminate\Support\Facades\Auth::user()->user_type == 'Doctor'||'Administrator')
                  <li class="sub-menu">
                      <a href="javascript:" class="">
                          <i class="fa fa-user-md"></i>
                          <span>Doctors module</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="{{url("/special_needs_infants")}}">infant treatment</a></li>
                          <!--<li><a class="" href="#">Referrals</a></li>-->

                      </ul>
                  </li>
                  @endif
                  @if(\Illuminate\Support\Facades\Auth::user()->user_type == 'admin')
                      <li class="sub-menu">
                          <a href="javascript:" class="">
                              <i class="fa fa-group"></i>
                              <span>User Mgt</span>
                              <span class="menu-arrow arrow_carrot-right"></span>
                          </a>
                          <ul class="sub">
                              <li><a class="" href="/hospital/public/addusers">Add new</a></li>
                              <li><a class="" href="/hospital/public/usersmaster">View users</a></li>


                          </ul>
                      </li>
                  @endif

                  @if(\Illuminate\Support\Facades\Auth::user()->user_type == 'Nurse' || 'Administrator' || 'Doctor' || 'Receptionist')
                  <li class="sub-menu">
                      <a href="javascript:" class="">
                          <i class="icon_profile"></i>
                          <span>User Profile</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="/hospital/public/edit_user">Edit Profile</a></li>
                          <!--<li><a class="" href="">Change Password</a></li>-->

                      </ul>
                  </li>
                  @endif


                      @if(\Illuminate\Support\Facades\Auth::user()->user_type == 'Nurse' || 'Administrator' || 'Doctor' || 'Receptionist')
                              <li class="sub-menu">
                                  <a href="javascript:" class="">
                                      <i class="fa fa-print"></i>
                                      <span>GenerateReport</span>
                                      <span class="menu-arrow arrow_carrot-right"></span>
                                  </a>
                                  <ul class="sub">
                                      <li><a class="" href="/hospital/public/infantmasterreport">Infant Master list</a></li>
                                      <li><a class="" href="/hospital/public/referred">Referred infant</a></li>
                                      <li><a class="" href="/hospital/public/femaleinfants">Female Infants</a></li>
                                      <li><a class="" href="/hospital/public/maleinfants">Male Infants</a></li>

                                  </ul>
                              </li>
                          @endif






              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>