<?php
    echo '
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Form</title>
    <link rel="icon" href="../assets/Images/Mhsscoe_3.png" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <style>
        .body {
            background: url(../assets/Images/Mhsscoe_3.png) no-repeat;
            /* background-position: center; */
            /* background-size: contain; */
            /* min-height: 100vh;
            width: 100%;   */
            /* overflow-x: hidden;  */
        }

        .head {
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .form {
            position: relative;
            width: 900px;
            height: 2000px;
            border: 2px solid black;
            border-radius: 20px;
            backdrop-filter: blur(6px);
            display: flex;
            justify-content: center;
            /* align-items: center; */
        }

        .letter {
            font-weight: bolder;
        }

        .First {
            padding: 15px;
            border: 1px dotted black;
        }

        .start {
            border-bottom: 1px dotted black;
        }
    </style>
</head>

<body class="body">
    <div class="text-center head mt-4">
        <h5>Anjuman-i-Islam\'s</h5>
        <h2>M.H. Saboo Siddik College of Engineering</h2>
        <h4>(Affiliated to University of Mumbai)<h4><br>
    </div>
    <section class="container">
        <div class="form row col-md-6 col-md-offset-3">
            <form action="formHandler.php">
                <div class="text-center pm-2">
                    <h1>Exam Form</h1>
                </div>
                <label class="letter">C-PRN Number</label>
                <input name="prn" type="Number" class="form-control" placeholder="C-PRN Number" required>
                <label class="letter">U-PRN Number</label>
                <input name="uprn" type="Number" class="form-control" placeholder="16-digit U-PRN Number" required>
                <div class="mb-3">
                    <label for="formFile" class="form-label letter">Please put your Image</label>
                    <input name="image" class="form-control" type="file" id="formFile" required>
                </div>
                <div class="py-3">
                    <label class="letter">Branch Name</label>
                    <input name="branch" type="text" class="form-control" placeholder="Branch Name" required>
                    <label class="letter">Year</label>
                    <input name="year" type="number" class="form-control" placeholder="1st,2nd,3rd,4th Year" required>
                    <label class="letter" required>Exam Section</label>
                    <div>
                        <label class="radio-inline" required><input type="radio">1</label><br>
                        <label class="radio-inline" required><input type="radio">2</label><br>
                    </div>
                    <label class="letter" required>Gender</label>
                    <div>
                        <label for="male" class="radio-inline"><input type="radio" name="gender"
                                id="male">Male</label><br>
                        <label for="female" class="radio-inline"><input type="radio" name="gender"
                                id="female">Female</label><br>
                        <label for="Other" class="radio-inline"><input type="radio" name="gender"
                                id="Others">Others</label>
                    </div>
                </div>
                <div class="First my-3">
                    <h5 class="text-center start">To be verified by candidate</h5>
                    <label class="letter">Surname</label>
                    <input name="lastName" type="text" class="form-control" placeholder="Your Surname" required>
                    <label name="firstName" class="letter">First Name/Own Name</label>
                    <input type="text" class="form-control" placeholder="Your First Name" required>
                    <label name="middleName" class="letter">Father\'s/Husband\'s First Name</label>
                    <input type="text" class="form-control" placeholder="Your Father\'s/Husband\'s First Name" required>
                    <label class="letter">Mother\'s First Name</label>
                    <input type="text" class="form-control" placeholder="Your Mother\'s First Name" required>
                </div>
                <div class="First my-3">
                    <h5 class="text-center start">COMPLETE POSTAL ADDRESS</h5>
                    <label class="letter">Address</label>
                    <input name="address" type="text" class="form-control" placeholder="Your Complete Address" required>
                    <label class="letter">Pincode</label>
                    <input name="pinCode" type="number" class="form-control" placeholder="6 digit area code(Pincode)"
                        required>
                    <label class="letter">Mobile Number</label>
                    <input name="mobileNumber" type="number" class="form-control" placeholder="10 Digit Mobile Number"
                        required>
                    <label class="letter">E-mail ID</label>
                    <input name="email" type="email" class="form-control" placeholder="Your E-mail Address" required>
                </div>
                <!-- <div class="First my-3">
                    <h5 class="text-center start">DETAILS OF LOWER EXAMINATION</h5>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Semester</th>
                            <th scope="col">Month & Year of Passing</th>
                            <th scope="col">Seat Number</th>
                            <th scope="col">CR</th>
                            <th scope="col">CG</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                </div> -->
                <div class="First my-3">
                    <h5 class="text-center start">Please fill below details</h5>
                    <h6>To</h6>
                    <h6>The Principle</h6>
                    <h6>My year of registration of FE Sem 1/ SE Sem 2 is <input type="number" name="years"
                            placeholder="Enter FE Sem 1 year"> /<input type="number" name="years"
                            placeholder="Enter SE Sem 2 year"></h6>
                    <h6>I request permission to present my self for the ensuring examination. I have remitted the
                        prescribed fee for the same accordingly and the information furnished above is correct.</h6>
                    <label class="letter">Place</label>
                    <input name="place" type="text" class="form-control" placeholder="Place of College" required>
                    <label class="letter">Date</label>
                    <input name="date" type="date" class="form-control" required>
                    <div class="mb-3">
                        <label for="formFile" class="form-label letter">Please put your Signature</label>
                        <input name="sign" class="form-control" type="file" id="formFile" required>
                    </div>
                </div>
                <div class="First my-3">
                    <h5 class="text-center start">COURSES OFFERED</h5>
                    <label class="letter">All Subjects of your Course</label>
                    <input name="lastName" type="text" class="form-control" value="All Subjects" readonly>
                    <label name="firstName" class="letter">Optional courses(For 3rd/4th Year)</label>
                    <input type="text" class="form-control" placeholder="Elective course">
                </div>
                <button type="button" class="btn btn-success d-flex justify-content-center" href="thank.html">Submit Form</biutton>
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
    ';
?>