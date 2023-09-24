<?php
    echo '
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/Images/Mhsscoe_3.png" type="image/icon type">+
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Hod Dashboard</title>
    <style>
        #main {
    height: 100vh;
    background-color: #EDF2F4;
}

#pfp {
    height: 100px;
    border-radius: 70px;
}

.container-fluid.bg-black a {
    display: block;
    text-decoration: none;
    color: white;
    padding: 10px;
}

#side:hover {
    background-color: #EAFFFD;
    border-radius: 10px;
    color: black;
    transition: background-color 0.3s ease, color 0.3s ease;
    text-decoration: underline;
}

#side{
    padding: 2%;
    margin-bottom: 1vh;
}
/* Style for unhovered links */
#side a {
    text-align: center;
    text-decoration: none;
    color: black;
}

/* Active link styles */
#side.active {
    border-radius: 10px;
    background-color: #EAFFFD;
    color: black;
}

#mainnav{
    padding: 1%;
    text-align: center;
}

#navmain{
    margin-top: 1vh;
}

#mainnav:hover {
    background-color: #EAFFFD;
    border-radius: 10px;
    color: black;
    transition: background-color 0.3s ease, color 0.3s ease;
}

#navbarNav{
    font-size: small;
}

#collectheading{
    text-align: center;
    color: black;
}

.nav-item{
    margin-left: 3vw;
    margin-right: 7vw;
}

.nav-item:hover{
    text-decoration: underline;
}

.navbar-expand-lg .navbar-nav .nav-link {
    width: max-content;
}

#sendtoexamcell{
    padding: 2%;
    font-size: x-large;
    font-weight: bold;
    
    border-radius: 10px;
}

#mainnavitem{
    text-align: center;
    font-weight: bold;
    padding: 1%;
}
#mainnavitem:hover{
    text-align: center;
    background-color: #EAFFFD;
    border-radius: 50px;
    color: black;
    transition: background-color 0.3s ease, color 0.3s ease;
}

#attbtn{
    border-radius: 50px;
    font-style: italic;
}
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 full-height text-center" id="sidebar">
                <!-- Sidebar -->
                <!-- Your sidebar content here -->
                <br><h2>Dashboard</h2>
                <br><br>
                <img class="img-thumbnail" id="pfp" src="../assets/Images/pfp.jpg" alt="mainimg">
                <h5><b>John Doe</b></h5>
                <h6>HOD</h6> <br>
                <div class="container-fluid active" id="side"><a href=""><h5>Profile</h5></a></div>
                <div class="container-fluid" id="side"><a href=""><h5>Add Teachers</h5></a></div>
                <div class="container-fluid" id="side"><a href=""><h5>Student\'s List</h5></a></div>
                <div class="container-fluid" id="side"><a href=""><h5>Attendance</h5></a></div>
            </div>
            <div class="col-lg rounded-5" id="main">
                <!-- Main content -->
                <nav class="navbar navbar-expand-lg rounded-5 p-0" style="background-color: #CDDBDF;" id="navmain">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active container-fluid" id="mainnavitem">
                                    <a class="nav-link" href="#">Home</a>
                                </li>
                                <li class="nav-item w-100" id="mainnavitem">
                                    <a class="nav-link" href="#">Update Profile</a>
                                </li>
                                <li class="nav-item w-100" id="mainnavitem">
                                    <a class="nav-link" href="#">Change Password</a>
                                </li>
                                <li class="nav-item w-50" id="mainnavitem">
                                    <a class="nav-link" href="#">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav><br>
                <h3 id="collectheading">Collect attendance from every year</h3><br>
                <div class="col d-flex justify-content-center align-items-center">
                    <div id="carouselExample" class="carousel slide w-50">
                        <div class="carousel-inner rounded-5">
                            <!-- Carousel items here -->
                            <div class="carousel-item active">
                                <img src="../assets/Images/Year-1.png" class="img-fluid d-block" alt="Slide 1">
                                <div class="carousel-caption">
                                    <button id="attbtn" class="btn btn-secondary btn-carousel">View Attendance</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/Images/Year-2.png" class="img-fluid d-block" alt="Slide 2">
                                <div class="carousel-caption">
                                    <button id="attbtn" class="btn btn-secondary btn-carousel">View Attendance</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/Images/Year-3.png" class="img-fluid d-block" alt="Slide 3">
                                <div class="carousel-caption">
                                    <button id="attbtn" class="btn btn-secondary btn-carousel">View Attendance</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/Images/Year-4.png" class="img-fluid d-block" alt="Slide 4">
                                <div class="carousel-caption">
                                    <button id="attbtn" class="btn btn-secondary btn-carousel">View Attendance</button>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <br><br>
                <center>
                    <div class="d-grid gap-3 w-75">
                        <button id="sendtoexamcell" class="btn btn-primary" type="button">Send to Exam Cell</button>
                    </div>
                </center>
            </div>
        </div>
    </div>
</body>
</html>
    ';
?>