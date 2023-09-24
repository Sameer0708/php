<?php
echo '

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>D-Form</title>
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
      height: 2470px;
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

    .inner-container {
      padding: 1cm;
    }

    .photo {
      width: 4cm;
      height: 4cm;
      border: 1px solid black;
      display: flex;
      justify-content: end;
      align-items: end;

      /* position: absolute;
            margin-left: 17cm;
            margin-bottom: 15cm; */

    }

    th,
    td {
      border: 1px solid black;
    }

    th {
      text-align: center;
    }

    .bracs {
      text-align: center;
    }

    .name {
      width: 15cm;
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
    <div class="form row col-md-6 col-md-offset-3" style="  border: 2px solid black;">
      <div class="inner-container">
        <form action="formHandler.php">
          <div class="text-center pm-2">
            <h3>D-Form</h3>
          </div>
          <div class="text-left">
            <h5> SR.NO.:<input type="number" style="width: 1cm; margin:0;border:0"></h5>
          </div>
          <div class="text-center" style=" border:3px solid black; width:6cm; margin-left: 8cm;">
            <h3>YEAR 2023-2024</h3>
          </div><br>

          <div class="text-left" style="font-size:large; width:8cm;">
            To,<br>
            <b>THE PRINCIPAL,</b><br>
            <i>ANJUMAN-I-ISLAM\'S</i><br>
            <b>M.H.SABOO SIDDIK<br>
              COLLEGE OF ENGINEERING</b>

          </div>


          <div class="photo"><div class="mb-3">
            <label for="formFile" class="form-label letter">Please put your Photo</label>
            <input name="image" class="form-control" type="file" id="formFile" required>
        </div>

          </div><br>
          <div class="d-flex justify-content-evenly">
            <b>CPRN:<input type="text" name="" id="" maxlength="7" required style="width: 5cm;border: 1px solid black;"></b>
            <b>UPRN:<input type="text" name="" id="" maxlength="16" required style="width: 10cm;border:1px solid black"></b>
          </div>
          <div class="letter">
            Sir,<br>
            &nbsp; &nbsp; &nbsp; &nbsp; I am derirous of continuing my studies in <input type="text"
              style="border:none ;border-bottom: 1px solid black;">sem, of
            year 2023-2024. I agree to abide by the rules and regulations, and shall respect the general discipline of
            the institution <br>
            in force and as may be modified from time to time.
            <br><br>
            1. Name: &nbsp; <input type="text" class="name" id="validationDefault01"
              style="border: 0; border-bottom: 1px solid black;" required>
            <div class="bracs">(As on lower semester Mark Sheet)</div>
            <br>
            2. Aadhar Card No:<input type="text" class="name" id="validationDefault01"
              style="border: 0; border-bottom: 1px solid black; " required>
            <br>&nbsp; &nbsp;&nbsp;E-mail:<input type="text" class="" id="validationDefault01"
              style="border: 0; border-bottom: 1px solid black; width:4cm;" required> Mobile:<input type="text" class=""
              id="validationDefault01" style="border: 0; border-bottom: 1px solid black;width:4cm;" required>
            <br> <br>3. (A)Month & Year of registration of Semester I for candidate admitted in First Year(FE): <input
              type="text" class="" id="validationDefault01"
              style="border: 0; border-bottom: 1px solid black; width:4cm;"><br>
            &nbsp;&nbsp;&nbsp;&nbsp;(B)Month & Year of registration of Semester III for candidate admitted to Direct
            Second Year(SE):<input type="text" class="" id="validationDefault01"
              style="border: 0; border-bottom: 1px solid black; width:4cm;">
            <br><br>
            4. &nbsp;Religion:<input class="name" type="text" style="border: none; border-bottom: 1px solid black;">
            <br><br>
            5. <br><br>
            <table class="table" style="width: 8cm;border: 1px solid black;">

              <tbody>
                <tr class="custom-control custom-radio">

                  <td>1</td>
                  <td><input class="custom-control-input" type="radio" style="border: none; "></td>
                  <td>MALE</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td><input class="custom-control" type="radio" style="border: none; "></td>
                  <td>FEMALE</td>

                </tr>

              </tbody>
            </table>

            <table class="table" style="width: 8cm;border: 1px solid black;">

              <tbody>
                <tr class="custom-control custom-radio">

                  <td>1</td>
                  <td><input class="custom-control-input" type="radio"
                      style="border: none; border-bottom: 1px solid black;"></td>
                  <td>OPEN</td>
                </tr>
                <tr class="custom-control custom-radio">
                  <th scope="row">2</th>
                  <td><input class="custom-control-input" type="radio"
                      style="border: none; border-bottom: 1px solid black;"></td>
                  <td>OBC/EBC</td>
                </tr>
                <th scope="row">3</th>
                <td><input class="custom-control-input" type="radio"
                    style="border: none; border-bottom: 1px solid black;"></td>
                <td>SC/ST/NT/SBC</td>
                </tr>

              </tbody>
            </table>

            <table class="table" style="width: 8cm;border: 1px solid black;">

              <tbody>
                <tr class="custom-control custom-radio">

                  <td>4</td>
                  <td><input class="custom-control-input" type="radio"
                      style="border: none; border-bottom: 1px solid black;"></td>
                  <td>LEARNING DISABILITY</td>
                </tr>
                <tr class="custom-control custom-radio"></tr>
                <th scope="row">5</th>
                <td><input class="custom-control-input" type="radio"
                    style="border: none; border-bottom: 1px solid black;"></td>
                <td>PWD</td>

                </tr>

              </tbody>
            </table>
            <div>Tick in appropriate box.(attach relevant documents if any)</div>
            <br>
            6.&nbsp;Father\'s/ Guardian\'s Name:
            <input class="name" type="text" style="border: none; border-bottom: 1px solid black;">
            <br>7.&nbsp;Father\'s/ Guardian\'s Profession:
            <input class="" type="text" style="border: none; border-bottom: 1px solid black;">
            <br>8.&nbsp;Relationship with the Guardian:
            <input class="" type="text" style="border: none; border-bottom: 1px solid black;">
            <br>9.&nbsp;Local Address for communication:
            <input class="" type="text" style="border: none; border-bottom: 1px solid black; width: 22cm;">
            <input class="name" type="text" style="border: none; border-bottom: 1px solid black; width:22cm;"><br>
            <br>10.&nbsp;Permanent Home address: <input class="name" type="text"
              style="border: none; border-bottom: 1px solid black;">
            &nbsp;Telephone No.(if any) Office: <input class="" type="text"
              style="border: none; border-bottom: 1px solid black;">
            Residence: <input class="" type="text" style="border: none; border-bottom: 1px solid black;"><br>
            &nbsp;&nbsp; Email: <input class="" type="text" style="border: none; border-bottom: 1px solid black;">
            Mobile: <input class="" type="text" style="border: none; border-bottom: 1px solid black;">

          </div><br><br>
          <div style="text-transform: capitalize; text-align: center;">
            <b>DETAIL OF EXAMINATIONS</b>
          </div><br>

          <table>
            <thead>
              <tr>
                <th scope="col">Semester</th>
                <th scope="col">Month/Year appearance of examination</th>
                <th scope="col">Seat No.</th>
                <th scope="col" colspan="=3">No. of Heads Failed
                </th>
                <th scope="col">Eligible for Admission to IInd/IIIrd/IVth Yr.

                </th>
                <th scope="col">Verified by</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3"><input type="text" class="form-control"
                      aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Sizing example input"
                      aria-describedby="inputGroup-sizing-default">
                  </div>
                </td>
                <td></td>
              </tr>

            </tbody>
          </table>


      </div>
      <label class="letter">Date</label>
                    <input name="date" type="date" class="form-control" required>
                    <div class="mb-3">
      <div class="mb-3">
        <label for="formFile" class="form-label letter">Please put your Signature</label>
        <input name="image" class="form-control" type="file" id="formFile" required>
    </div>



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>







</html>

    ';
?>