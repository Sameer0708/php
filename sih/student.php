<?php
    echo '
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- start: Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/dist/boxicons.js">
    <!-- start: Icons -->
    <!-- start: CSS -->
    <link rel="icon" href="../assets/Images/Mhsscoe_3.png" type="image/icon type">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- end: CSS -->
    <title>Student\'s Dashboard</title>
</head>

<body>

    <!-- start: Sidebar -->
    <div class="sidebar position-fixed top-0 bottom-0 bg-white border-end">
        <div class="d-flex align-items-center p-3">
            <a href="#" class="sidebar-logo text-uppercase fw-bold text-decoration-none text-indigo fs-4">Dashboard</a>
            <i class="sidebar-toggle ri-arrow-left-circle-line ms-auto fs-5 d-none d-md-block"></i>
        </div>
        <ul class="sidebar-menu p-3 m-0 mb-0">
            <li class="sidebar-menu-item active">
                <a href="#">
                    <i class="ri-dashboard-line sidebar-menu-item-icon"></i>
                    Student\'s Dashboard
                </a>
            </li>
            <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Work</li>
            <li class="sidebar-menu-item has-dropdown">
                <a href="#">
                    <i class="ri-user-fill sidebar-menu-item-icon"></i>
                    Profile
                    <!-- <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i> -->
                </a> <li class="sidebar-menu-item has-dropdown">
                    <a href="#">
                        <!-- <i class="ri-user-line sidebar-menu-item-icon"></i> -->
                        <i class="fa-solid fa-clipboard-user sidebar-menu-item-icon" style="font-size: 25px;"></i>
                        Attendance
                        <!-- <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i> -->
                    </a>
                    <!-- <ul class="sidebar-dropdown-menu">
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Student Registration
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Add Account
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Reset Password
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Deactivate Account
                            </a>
                        </li>
                    </ul>
                </li> -->
    
                <li class="sidebar-menu-item has-dropdown">
                    <a href="#">
                        <!-- <i class="fa-solid fa-memo sidebar-menu-item-icon"></i> -->
                        <i class="fa-solid fa-newspaper sidebar-menu-item-icon"></i>
                        Forms
                        <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                    </a>
                    <ul class="sidebar-dropdown-menu">
                        <li class="sidebar-dropdown-menu-item">
                            <a href="D-form.php" target="_blank">
                                D-form
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="Examform.php" target="_blank">
                                Exam Form
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Revaluation Form
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Re-Exam Form(KT)
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-item has-dropdown">
                    <a href="#">
                        <i class="fa-regular fa-id-card sidebar-menu-item-icon"></i>
                        E-ID Card
                        <!-- <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i> -->
                    </a>
                    <!-- <ul class="sidebar-dropdown-menu">
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Current Present in Class
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Total Number of Students
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Monthly Attendance Report
                            </a>
                        </li>
                    </ul> -->
                </li>
                <li class="sidebar-menu-item has-dropdown">
                    <a href="#">
                        <!-- <i class="fa-solid fa-memo sidebar-menu-item-icon"></i> -->
                        <i class="fa-solid fa-square-poll-vertical sidebar-menu-item-icon" style="font-size: 23px;"></i>
                        Results
                        <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                    </a><ul class="sidebar-dropdown-menu">
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Sem 1
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Sem 2
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Sem3
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Sem 4
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Sem 5
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Sem 6
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Sem 7
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Sem 8
                            </a>
                        </li>
                    </ul> 
                <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Apps</li>
                <li class="sidebar-menu-item has-dropdown">
                    <!-- <a href="#">
                        <i class="ri-shopping-cart-2-line sidebar-menu-item-icon"></i>
                        eCommerce
                        <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                    </a>
                    <ul class="sidebar-dropdown-menu">
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Shop
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Checkout
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Details
                            </a>
                        </li>
                        <li class="sidebar-dropdown-menu-item">
                            <a href="#">
                                Wishlist
                            </a>
                        </li>
                    </ul>
                </li> -->
                <li class="sidebar-menu-item">
                    <a href="#">
                        <i class="ri-global-line sidebar-menu-item-icon"></i>
                        Online Classroom
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="#">
                        <i class="ri-calendar-line sidebar-menu-item-icon"></i>
                        Calendar
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidebar-overlay"></div>
        <!-- end: Sidebar -->
 

    <!-- start: Main -->
    <main class="bg-light">
        <div class="p-2">
            <!-- start: Navbar -->
            <nav class="px-3 py-2 bg-white rounded shadow-sm">
                <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i>
                <h5 class="fw-bold mb-0 me-auto" style="cursor: pointer;">Student\'s Dashboard</h5>
                <section>
                    <nav class="navbar navbar-expand-lg bg-body-tertiary dropdown-toggle">
                        <div class="container-fluid">
                            <button class="navbar-toggler" aria-labelledby="dropdownMenuButton1"
                                data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse dropdown" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page"
                                            href="#"><strong>Home</strong></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#"><strong>Update Profile</strong></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#"><strong>Change Password</strong></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#"><strong>Logout</strong></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </section>
                <div class="dropdown me-3 d-none d-sm-block">
                    <div class="cursor-pointer dropdown-toggle navbar-link" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="ri-notification-line"></i>
                    </div>
                    <div class="dropdown-menu fx-dropdown-menu">
                        <h5 class="p-3 bg-indigo text-light">Notification</h5>
                        <div class="list-group list-group-flush">
                            <a href="#"
                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                                <div class="me-auto">
                                    <div class="fw-semibold">Subheading</div>
                                    <span class="fs-7">Content for list item</span>
                                </div>
                                <span class="badge bg-primary rounded-pill">14</span>
                            </a>
                            <a href="#"
                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                                <div class="me-auto">
                                    <div class="fw-semibold">Subheading</div>
                                    <span class="fs-7">Content for list item</span>
                                </div>
                                <span class="badge bg-primary rounded-pill">14</span>
                            </a>
                            <a href="#"
                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                                <div class="me-auto">
                                    <div class="fw-semibold">Subheading</div>
                                    <span class="fs-7">Content for list item</span>
                                </div>
                                <span class="badge bg-primary rounded-pill">14</span>
                            </a>
                            <a href="#"
                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                                <div class="me-auto">
                                    <div class="fw-semibold">Subheading</div>
                                    <span class="fs-7">Content for list item</span>
                                </div>
                                <span class="badge bg-primary rounded-pill">14</span>
                            </a>
                            <a href="#"
                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                                <div class="me-auto">
                                    <div class="fw-semibold">Subheading</div>
                                    <span class="fs-7">Content for list item</span>
                                </div>
                                <span class="badge bg-primary rounded-pill">14</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="dropdown">
                    <div class="d-flex align-items-center cursor-pointer dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="me-2 d-none d-sm-block">John Doe</span>
                        <img class="navbar-profile-image"
                            src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                            alt="Image">
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </nav>
            <!-- end: Navbar -->

            <!-- start: Content -->
            <div class="py-4">
                <!-- start: Summary -->
            
            <!-- start: Content -->
            <div class="dropdown">
                <h3 class="py-3">Enter your details for Attendance:</h3>
                Enter Your Roll Number : <input type="text" placeholder="Your Roll Number" maxlength="6"><br>

                <form>
                    <b style="font-size: 19px;"> Select Branch of Student : </b>
                    <select id="myList1" onchange="favTutorial1()">
                        <option> -----Branch Name---- </option>
                        <option> Computer Engineering </option>
                        <option> Information technology </option>
                        <option> Mechanical Engineering </option>
                        <option> EXTC </option>
                        <option> Civil Engineering</option>
                        <option>AIML</option>
                        <option>IoT</option>
                    </select>
                    <p> Your selected Branch is:
                        <input type="text" id="favourite1" readonly size="20">
                    </p>
                </form>
                <script> function favTutorial1() {
                        var mylist = document.getElementById("myList1");
                        document.getElementById("favourite1").value = mylist.options[mylist.selectedIndex].text;
                    }</script>

                <form>
                    <b style="font-size: 19px;"> Select Year of Students : </b>
                    <select id="myList2" onchange="favTutorial2()">
                        <option> ---Choose year--- </option>
                        <option> 1st Year </option>
                        <option> 2nd Year </option>
                        <option> 3rd Year </option>
                        <option> 4th Year </option>
                    </select>
                    <p> Your selected Year is:
                        <input type="text" id="favourite2" readonly size="20">
                    </p>
                </form>
                <script> function favTutorial2() {
                        var mylist = document.getElementById("myList2");
                        document.getElementById("favourite2").value = mylist.options[mylist.selectedIndex].text;
                    }</script>

                <form>
                    <b style="font-size: 19px;"> Select Sem of Students : </b>
                    <select id="myList3" onchange="favTutorial3()">
                        <option> ---Choose Semester--- </option>
                        <option> 1st Sem </option>
                        <option> 2nd Sem </option>
                        <option> 3rd Sem </option>
                        <option> 4th Sem </option>
                        <option> 5th Sem </option>
                        <option> 6th Sem </option>
                        <option> 7th Sem </option>
                        <option> 8th Sem </option>
                    </select>
                    <p> Your selected Sem is:
                        <input type="text" id="favourite3" readonly size="20">
                    </p>
                </form>
                <script> function favTutorial3() {
                        var mylist = document.getElementById("myList3");
                        document.getElementById("favourite3").value = mylist.options[mylist.selectedIndex].text;
                    }</script>
                Enter Today\'s date : <input type="date" placeholder="Enter Date"><br><br>
                <b style="font-size: 19px;">Enter System Generated Code</b> : <input type="number" required><br>

                <button type="button" class="btn btn-success my-3">Mark Attendance</button><br>
                
                <!-- start: Summary -->
                <div class="row g-3">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <a href="#"
                            class="text-dark text-decoration-none bg-white p-3 rounded shadow-sm d-flex justify-content-between summary-primary">
                            <div>
                                <i class="fa-solid fa-paperclip summary-icon bg-primary mb-2"></i>
                                <!-- <img src="../assets/Images/lectures.png" alt="lectures" class="bg-primary mb-2 summary-icon"> -->
                                <div>Your overall lecture\'s attendance of these Month</div>
                            </div>
                            <h4>45%</h4>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <a href="#"
                            class="text-dark text-decoration-none bg-white p-3 rounded shadow-sm d-flex justify-content-between summary-indigo">
                            <div>
                                <i class="fa-solid fa-desktop summary-icon bg-indigo mb-2"></i>
                                <div>Your overall Practical\'s attendance of these Month</div>
                            </div>
                            <h4>95%</h4>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <a href="#"
                            class="text-dark text-decoration-none bg-white p-3 rounded shadow-sm d-flex justify-content-between summary-success">
                            <div>
                                <i class="fa-solid fa-check summary-icon bg-success mb-2"></i>
                                <div>Lectures you have sit in these Sem</div>
                            </div>
                            <h4>50 lectures</h4>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <a href="#"
                            class="text-dark text-decoration-none bg-white p-3 rounded shadow-sm d-flex justify-content-between summary-danger">
                            <div>
                                <i class="fa-solid fa-xmark summary-icon bg-danger mb-2"></i>
                                <div>Lectures you have to sit for 75% attendance</div>
                            </div>
                            <h4>30 Lectures</h4>
                        </a>
                    </div>
                </div><br>
                <!-- end: Summary -->
                <!-- Table: start -->
                <!-- <h4>Today\'s Attendance</h4>
                <div class="table-box">
                    <div class="table-row table-head">
                        <div class="table-cell first-cell">
                            <p>Sr.no</p>
                        </div>
                        <div class="table-cell">
                            <p>Roll Number</p>
                        </div>
                        <div class="table-cell">
                            <p>Name</p>
                        </div> 
                        <div class="table-cell last-cell">
                            <p>Action</p>
                        </div> 
                    </div>
            
            
                    <div class="table-row">
                        <div class="table-cell first-cell">
                            <p>1</p>
                        </div>
                        <div class="table-cell">
                            <p></p>
                        </div>
                        <div class="table-cell">
                            <p></p>
                        </div>
                        <div class="table-cell last-cell">
                            <p></p>
                        </div>
                    </div>
            
            
                    <div class="table-row">
                        <div class="table-cell first-cell">
                            <p>2</p>
                        </div>
                        <div class="table-cell">
                            <p></p>
                        </div>
                        <div class="table-cell">
                            <p></p>
                        </div>
                        <div class="table-cell last-cell">
                            <p></p>
                        </div>
                    </div>
            
                    <div class="table-row">
                        <div class="table-cell first-cell">
                            <p>3</p>
                        </div>
                        <div class="table-cell">
                            <p></p>
                        </div>
                        <div class="table-cell">
                            <p></p>
                        </div>
                        <div class="table-cell last-cell">
                            <p></p>
                        </div>
                    </div>
            
                    <div class="table-row">
                        <div class="table-cell first-cell">
                            <p>4</p>
                        </div>
                        <div class="table-cell">
                            <p></p>
                        </div>
                        <div class="table-cell">
                            <p></p>
                        </div>
                        <div class="table-cell last-cell">
                            <p></p>
                        </div>
                    </div>
            
                    <div class="table-row">
                        <div class="table-cell first-cell">
                            <p>5</p>
                        </div>
                        <div class="table-cell">
                            <p></p>
                        </div>
                        <div class="table-cell">
                            <p></p>
                        </div>
                        <div class="table-cell last-cell">
                            <p></p>
                        </div>
                    </div>
            
            
                    <div class="table-row">
                        <div class="table-cell first-cell">
                            <p>6</p>
                        </div>
                        <div class="table-cell">
                            <p></p>
                        </div>
                        <div class="table-cell">
                            <p></p>
                        </div>
                        <div class="table-cell last-cell">
                            <p></p>
                        </div>
                    </div>
            
                    <div class="table-row">
                        <div class="table-cell first-cell">
                            <p>7</p>
                        </div>
                        <div class="table-cell">
                            <p></p>
                        </div>
                        <div class="table-cell">
                            <p></p>
                        </div>
                        <div class="table-cell last-cell">
                            <p></p>
                        </div>
                    </div>
            
                    <div class="table-row">
                        <div class="table-cell first-cell">
                            <p>8</p>
                        </div>
                        <div class="table-cell">
                            <p></p>
                        </div>
                        <div class="table-cell">
                            <p></p>
                        </div>
                        <div class="table-cell last-cell">
                            <p></p>
                        </div>
                    </div>
            </div>   
            </div>
            table: end -->
                <!-- start: Graph -->
                <!-- <div class="row g-3 mt-2">
                    <div class="col-12 col-md-7 col-xl-8">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-header bg-white">
                                Attendance in these week
                            </div>
                            <div class="card-body">
                                <canvas id="sales-chart1"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-xl-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-header bg-white">
                                Number of Boys and Girls(Present Today)
                            </div>
                            <div class="card-body">
                                <canvas id="visitors-chart1"></canvas>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- end: Graph -->
                
            </div>
            <!-- end: Content -->
        </div>
    </main>
    <!-- end: Main -->

    <!-- start: JS -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/script.js"></script>
    
    <!-- end: JS -->
</body>

</html>
    ';
?>