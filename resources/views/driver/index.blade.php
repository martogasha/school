@include('driverPartial.nav')
    <div class="navbar two-action no-hairline">
        <div class="navbar-inner d-flex align-items-center">
            <div class="left">
                <a href="#" class="link icon-only">
                    <i class="custom-hamburger">
                        <span><b></b></span>
                    </i>
                </a>
            </div>
            <div class="sliding custom-title">Doctor Dashboard</div>
            <div class="right d-flex">
                <a href="notifications.html" class="link icon-only"><i class="material-icons">notifications</i></a>
                <a href="#" data-toggle="dropdown" aria-expanded="true" class="link"><i class="material-icons">more_vert</i></a>
                <div class="dropdown-menu dropdown-menu-right header_drop_icon">
                    <a href="doctor-profile.html" class="dropdown-item">My Profile</a>
                    <a href="profile-settings.html" class="dropdown-item">Settings</a>
                    <a href="login.html" class="dropdown-item">Log Out</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content header-bg pt-0">
        <div class="container">
            <div class="doctor-widget doctor-dashboard">
                <div class="doc-info-left">
                    <div class="doctor-img">
                        <a class="doctor-img-profile" href="doctor-dashboard.html">
                            <img src="assets/img/doctors/doctor-02.jpg" class="img-fluid img-circle" alt="User Image">
                        </a>
                    </div>
                    <div class="doc-info-cont">
                        <div class="toggle-icon-doctor">
                            <div class="inner-toggle-icon">
                                <i class="fas fa-ellipsis-v"></i>
                            </div>
                        </div>
                        <h4 class="doc-name"><a href="doctor-profile.html">Dr. Darren Elder</a></h4>
                        <p class="doc-speciality">BDS, MDS - Oral & Maxillofacial Surgery</p>
                        <h5 class="doc-department">
                            <span class="speciality-img"><img src="assets/img/specialities/specialities-05.png" class="img-fluid" alt="Speciality"></span> Dentist
                        </h5>
                        <div class="doc-info">
                            <div class="rating">
                                <span class="doc-experince">15+ Exp</span>
                            </div>
                            <div class="doc-location">
                                <p>(<i class="fas fa-map-marker-alt"></i> Florida, USA)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="patient-details">
                <div class="inner-patient-detaials">
                    <div class="patient-col">
                        <div class="inner-patient-col">
                            <div class="progress-col">
                                <div class="c100 p80 small">
                                    <span class="pat-img"><img src="assets/img/dentist-1.svg" alt="dentist"></span>
                                    <div class="slice">
                                        <div class="bar"></div>
                                        <div class="fill"></div>
                                    </div>
                                </div>
                            </div>
                            <h6>Total Patients</h6>
                            <h4>1300+</h4>
                            <span class="date">March 16, 2020</span>
                        </div>
                    </div>
                    <div class="patient-col">
                        <div class="inner-patient-col">
                            <div class="progress-col">
                                <div class="c100 p40 small">
                                    <span class="pat-img"><img src="assets/img/patient.svg" alt="patient"></span>
                                    <div class="slice">
                                        <div class="bar"></div>
                                        <div class="fill"></div>
                                    </div>
                                </div>
                            </div>
                            <h6>Today Patients</h6>
                            <h4>160</h4>
                            <span class="date">March 16, 2020</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="appointments-details">
                <div class="inner-appointment">
                    <div class="appointment-col">
                        <a href="#" class="btn">Today <br>Appointments</a>
                    </div>
                    <div class="appointment-col">
                        <a href="#" class="btn">Upcoming <br>Appointments</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/plugins/swiper/js/swiper.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from doccureframework7.dreamguystech.com/bootstrap4/template/doctor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Sep 2021 03:29:04 GMT -->
</html>
