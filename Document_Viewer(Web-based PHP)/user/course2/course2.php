<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Course 2</title>
  <link rel="shortcut icon" type="img/png" href="/softeng/user/user_page/DYCI_logo.png">
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap");

    * {
      font-family: "Poppins", sans-serif;
    }

    body {
      margin: 0;
      padding: 0;
    }

    .topnav {
      overflow: hidden;
      background-color: #011b50;
    }

    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .active {
      background-color: darkblue;
      color: white;
    }

    .topnav .icon {
      display: none;
    }

    .dropdown {
      float: left;
      overflow: hidden;
    }

    .dropdown .dropbtn {
      font-size: 17px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      margin: 0;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .topnav a:hover,
    .dropdown:hover .dropbtn {
      background-color: darkblue;
      color: white;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
      color: black;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    @media screen and (max-width: 600px) {

      .topnav a:not(:first-child),
      .dropdown .dropbtn {
        display: none;
      }

      .topnav a.icon {
        float: right;
        display: block;
      }
    }

    @media screen and (max-width: 600px) {
      .topnav.responsive {
        position: relative;
      }

      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }

      .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
      }

      .topnav.responsive .dropdown {
        float: none;
      }

      .topnav.responsive .dropdown-content {
        position: relative;
      }

      .topnav.responsive .dropdown .dropbtn {
        display: block;
        width: 100%;
        text-align: left;
      }
    }

    /* home section styling */
    .home {
      display: flex;
      background: url("/softeng/user/user_page/dyci.jpg") no-repeat center;
      height: 90vh;
      color: #fff;
      min-height: 500px;
      background-size: cover;
      background-attachment: fixed;
      font-family: "Ubuntu", sans-serif;
    }

    .home .max-width {
      margin: auto 0 auto 30px;
    }
  </style>
</head>

<body>

  <div class="topnav" id="myTopnav">
    <a href="#" class="active">Home</a>
    <div class="dropdown">
      <button class="dropbtn">COG313
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="/softeng/Course 2/Modules/COG313/COG313 Module 1.pdf"><i class="fa fa-download"></i> Cognate / Track Course1 (Technopreneurship) Module 1</a>
        <a href="/softeng/Course 2/Modules/COG313/COG313 Module 2.pdf"><i class="fa fa-download"></i> Cognate / Track Course1 (Technopreneurship) Module 2</a>
        <a href="/softeng/Course 2/Modules/COG313/COG313 Module 3.pdf"><i class="fa fa-download"></i> Cognate / Track Course1 (Technopreneurship) Module 3</a>
        <a href="/softeng/Course 2/Modules/COG313/COG313 Module 4.pdf"><i class="fa fa-download"></i> Cognate / Track Course1 (Technopreneurship) Module 4</a>
        <a href="/softeng/Course 2/Modules/COG313/COG313 Module 5.pdf"><i class="fa fa-download"></i> Cognate / Track Course1 (Technopreneurship) Module 5</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">DDC313
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="/softeng/Course 2/Modules/DDC313/DDC313 Module 1.pdf"><i class="fa fa-download"></i> Data & Digital Communication Module 1</a>
        <a href="/softeng/Course 2/Modules/DDC313/DDC313 Module 2.pdf"><i class="fa fa-download"></i> Data & Digital Communication Module 2</a>
        <a href="/softeng/Course 2/Modules/DDC313/DDC313 Module 3.pdf"><i class="fa fa-download"></i> Data & Digital Communication Module 3</a>
        <a href="/softeng/Course 2/Modules/DDC313/DDC313 Module 4.pdf"><i class="fa fa-download"></i> Data & Digital Communication Module 4</a>
        <a href="/softeng/Course 2/Modules/DDC313/DDC313 Module 5.pdf"><i class="fa fa-download"></i> Data & Digital Communication Module 5</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">MMS313
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="/softeng/Course 2/Modules/MMS313/MMS313 Module 1.pdf"><i class="fa fa-download"></i> Fundamentals of Mixed Signal & Sensors Module 1</a>
        <a href="/softeng/Course 2/Modules/MMS313/MMS313 Module 2.pdf"><i class="fa fa-download"></i> Fundamentals of Mixed Signal & Sensors Module 2</a>
        <a href="/softeng/Course 2/Modules/MMS313/MMS313 Module 3.pdf"><i class="fa fa-download"></i> Fundamentals of Mixed Signal & Sensors Module 3</a>
        <a href="/softeng/Course 2/Modules/MMS313/MMS313 Module 4.pdf"><i class="fa fa-download"></i> Fundamentals of Mixed Signal & Sensors Module 4</a>
        <a href="/softeng/Course 2/Modules/MMS313/MMS313 Module 5.pdf"><i class="fa fa-download"></i> Fundamentals of Mixed Signal & Sensors Module 5</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">FCS313
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="/softeng/Course 2/Modules/FCS313/FCS313 Module 1.pdf"><i class="fa fa-download"></i> Feedback & Control Systems Module 1</a>
        <a href="/softeng/Course 2/Modules/FCS313/FCS313 Module 2.pdf"><i class="fa fa-download"></i> Feedback & Control Systems Module 2</a>
        <a href="/softeng/Course 2/Modules/FCS313/FCS313 Module 3.pdf"><i class="fa fa-download"></i> Feedback & Control Systems Module 3</a>
        <a href="/softeng/Course 2/Modules/FCS313/FCS313 Module 4.pdf"><i class="fa fa-download"></i> Feedback & Control Systems Module 4</a>
        <a href="/softeng/Course 2/Modules/FCS313/FCS313 Module 5.pdf"><i class="fa fa-download"></i> Feedback & Control Systems Module 5</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">ICC313
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="/softeng/Course 2/Modules/ICC313/ICC313 Module 1.pdf"><i class="fa fa-download"></i> Logic Circuits & Design Module 1</a>
        <a href="/softeng/Course 2/Modules/ICC313/ICC313 Module 2.pdf"><i class="fa fa-download"></i> Logic Circuits & Design Module 2</a>
        <a href="/softeng/Course 2/Modules/ICC313/ICC313 Module 3.pdf"><i class="fa fa-download"></i> Logic Circuits & Design Module 3</a>
        <a href="/softeng/Course 2/Modules/ICC313/ICC313 Module 4.pdf"><i class="fa fa-download"></i> Logic Circuits & Design Module 4</a>
        <a href="/softeng/Course 2/Modules/ICC313/ICC313 Module 5.pdf"><i class="fa fa-download"></i> Logic Circuits & Design Module 5</a>
      </div>
    </div>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
  </div>
  <section class="home" id="home">
    <div class="max-width">
      <div class="home-content">
      </div>
    </div>
  </section>
  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>

</body>

</html>