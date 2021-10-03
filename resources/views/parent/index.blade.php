<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doccureframework7.dreamguystech.com/bootstrap4/template/schedule-timings.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Sep 2021 03:27:54 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#3a57c4">
    <title>Doccure - HTML Mobile Template</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/swiper/css/swiper.min.css">

    <link rel="stylesheet" href="assets/css/circle.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="main-wrapper">
    <div class="side-menu" id="sidebar-menu">
        <div class="close-btn"><span class="material-icons">close</span></div>
        <ul>
            <li>
                <a class="" href="index.html">
                    <span class="material-icons">dashboard</span>
                    Dashboard
                </a>
            </li>
            <li>
                <a class="" href="appointments.html">
                    <span class="material-icons">date_range</span>
                    Appointments
                </a>
            </li>
            <li>
                <a class="" href="patients-list.html">
                    <span class="material-icons">person</span>
                    My Patients
                </a>
            </li>
            <li>
                <a class="" href="schedule-timings.html">
                    <span class="material-icons">access_time</span>
                    Schedule Timings
                </a>
            </li>
            <li>
                <a class="" href="invoices.html">
                    <span class="material-icons">insert_drive_file</span>
                    Invoices
                </a>
            </li>
            <li>
                <a class="" href="pages.html">
                    <span class="material-icons">pages</span>
                    Pages
                </a>
            </li>
            <li>
                <a class="" href="chat.html">
                    <span class="material-icons">message</span>
                    Message
                </a>
            </li>
            <li>
                <a class="" href="profile-settings.html">
                    <span class="material-icons">settings</span>
                    Profile Settings
                </a>
            </li>
            <li>
                <a class="" href="social-media.html">
                    <span class="material-icons">share</span>
                    Social Media
                </a>
            </li>
            <li>
                <a class="" href="change-password.html">
                    <span class="material-icons">lock_open</span>
                    Change Password
                </a>
            </li>
        </ul>
        <a class="sidebar-logout" href="login.html"><span><img src="assets/img/open-account-logout.svg" alt=""></span>Logout</a>
    </div>
    <div class="navbar two-action no-hairline">
        <div class="navbar-inner d-flex align-items-center">
            <div class="left">
                <a href="#" class="link icon-only">
                    <i class="custom-hamburger">
                        <span><b></b></span>
                    </i>
                </a>
            </div>
            <div class="sliding custom-title">Doctor Schedule Timings</div>
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
    <div class="page-content pt-0">
        <div class="container">

            <div class="search-tag">
                <div class="top-title">
                    <div class="left">
                        <div class="icon-col">
                            <img src="assets/img/calender-icon.svg" alt="">
                        </div>
                        <div class="text-col">
                            <h5>Schedule Timings</h5>
                            <span>Timing Slot Duration</span>
                        </div>
                    </div>
                    <div class="right">
                        <div class="progress-col">
                            <div class="c100 p35 very-small">
                                <div class="progress-text">
                                    <div>
                                        <b>30</b>
                                        <sub>Mints</sub>
                                    </div>
                                </div>
                                <div class="slice">
                                    <div class="bar"></div>
                                    <div class="fill"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="schedule-timings">
                <div class="container">
                    <div class="block-title">Select day</div>
                    <div class="swiper-container schedule-timings-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <label class="item-content">
                                    <div>
                                        <input type="checkbox" name="checkbox" value="Sun" />
                                        <div class="item-title">Sun</div>
                                        <i class="icon icon-checkbox"></i>
                                    </div>
                                </label>
                            </div>
                            <div class="swiper-slide">
                                <label class="item-content">
                                    <div>
                                        <input type="checkbox" name="checkbox" value="Mon" />
                                        <div class="item-title">Mon</div>
                                        <i class="icon icon-checkbox"></i>
                                    </div>
                                </label>
                            </div>
                            <div class="swiper-slide">
                                <label class="item-content">
                                    <div>
                                        <input type="checkbox" name="checkbox" value="Tue" />
                                        <div class="item-title">Tue</div>
                                        <i class="icon icon-checkbox"></i>
                                    </div>
                                </label>
                            </div>
                            <div class="swiper-slide">
                                <label class="item-content">
                                    <div>
                                        <input type="checkbox" name="checkbox" value="Wed" />
                                        <div class="item-title">Wed</div>
                                        <i class="icon icon-checkbox"></i>
                                    </div>
                                </label>
                            </div>
                            <div class="swiper-slide">
                                <label class="item-content">
                                    <div>
                                        <input type="checkbox" name="checkbox" value="Thu" />
                                        <div class="item-title">Thu</div>
                                        <i class="icon icon-checkbox"></i>
                                    </div>
                                </label>
                            </div>
                            <div class="swiper-slide">
                                <label class="item-content">
                                    <div>
                                        <input type="checkbox" name="checkbox" value="Fri" />
                                        <div class="item-title">Fri</div>
                                        <i class="icon icon-checkbox"></i>
                                    </div>
                                </label>
                            </div>
                            <div class="swiper-slide">
                                <label class="item-content">
                                    <div>
                                        <input type="checkbox" name="checkbox" value="Sat" />
                                        <div class="item-title">Sat</div>
                                        <i class="icon icon-checkbox"></i>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="schedule-list">
                        <div class="title-block">
                            <div class="block-title">Time - Thursday</div>
                            <div class="edit-col">
                                <a data-toggle="modal" href="#edit_time_slot">
                                    <i class="fas fa-pencil-alt"></i> Edit
                                </a>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <div class="inner-list">
                                    8:30 AM - 9:30 AM
                                    <span class="clear-icon"><i class="far fa-times-circle"></i></span>
                                </div>
                            </li>
                            <li>
                                <div class="inner-list">
                                    11:30 AM - 12:30 PM
                                    <span class="clear-icon"><i class="far fa-times-circle"></i></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="focused segments">
                        <div class="container">
                            <div class="focused-content">
                                <div class="section-title">
                                    <h3>
                                        My Rides
                                        <a href="search-doctor.html" class="see-all-link">View All</a>
                                    </h3>
                                </div>
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="doctor-widget">
                                                <div class="doc-info-left">
                                                    <div class="doctor-img">
                                                        <a href="doctor-profile.html">
                                                            <img src="assets/img/doctors/doctor-thumb-01.jpg" class="img-fluid" alt="User Image">
                                                        </a>
                                                    </div>
                                                    <div class="doc-info-cont">
                                                        <h4 class="doc-name"><a href="doctor-profile.html">Dr. Ruby Perrin</a></h4>
                                                        <p class="doc-speciality">MDS - Periodontology, BDS</p>
                                                        <h5 class="doc-department">
                                                            <span class="speciality-img"><img src="assets/img/specialities/specialities-05.png" class="img-fluid" alt="Speciality"></span> Dentist
                                                            <span class="doc-experince">9+ Exp</span>
                                                        </h5>
                                                        <div class="doc-info">
                                                            <div class="rating">
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star"></i>
                                                                <span class="d-inline-block average-rating">(47)</span>
                                                            </div>
                                                            <div class="doc-location">
                                                                <p><i class="fas fa-map-marker-alt"></i> Florida, USA</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="doc-info-right">
                                                    <div class="clini-infos">
                                                        <ul>
                                                            <li><i class="far fa-thumbs-up"></i> 98%</li>
                                                            <li><i class="far fa-money-bill-alt"></i> $300 - $1000</li>
                                                        </ul>
                                                    </div>
                                                    <div class="clinic-booking">
                                                        <div class="clinic-btn">
                                                            <a class="apt-btn" href="patient-date-time.html">Book Appointment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade custom-modal" id="edit_time_slot">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Time Slots</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="hours-info">
                        <div class="row form-row hours-cont">
                            <div class="col-12 col-md-10">
                                <div class="row form-row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Start Time</label>
                                            <select class="form-control">
                                                <option>-</option>
                                                <option selected>12.00 am</option>
                                                <option>12.30 am</option>
                                                <option>1.00 am</option>
                                                <option>1.30 am</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>End Time</label>
                                            <select class="form-control">
                                                <option>-</option>
                                                <option>12.00 am</option>
                                                <option selected>12.30 am</option>
                                                <option>1.00 am</option>
                                                <option>1.30 am</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-row hours-cont">
                            <div class="col-12 col-md-10">
                                <div class="row form-row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Start Time</label>
                                            <select class="form-control">
                                                <option>-</option>
                                                <option>12.00 am</option>
                                                <option selected>12.30 am</option>
                                                <option>1.00 am</option>
                                                <option>1.30 am</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>End Time</label>
                                            <select class="form-control">
                                                <option>-</option>
                                                <option>12.00 am</option>
                                                <option>12.30 am</option>
                                                <option selected>1.00 am</option>
                                                <option>1.30 am</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-2"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash w-100"><i class="far fa-trash-alt"></i></a></div>
                        </div>
                    </div>
                    <div class="add-more mb-3 pt-1 pb-1">
                        <a href="javascript:void(0);" class="add-hours"><i class="fa fa-plus-circle"></i> Add More</a>
                    </div>
                    <div class="submit-section text-center">
                        <button type="submit" class="btn btn-primary submit-btn" data-dismiss="modal" aria-label="Close">Save Changes</button>
                    </div>
                </form>
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

<!-- Mirrored from doccureframework7.dreamguystech.com/bootstrap4/template/schedule-timings.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Sep 2021 03:27:55 GMT -->
</html>
