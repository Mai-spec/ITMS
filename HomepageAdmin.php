<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->

  

  <link rel="stylesheet" href="css/main.css">

  <script src="js/scriptscript.js"></script>
  <script src="js/weather.js"></script>


<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>ADMIN</title>
    <link rel="stylesheet" href="main.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" type="image/png" href="../../assets/images/logo-no-bg.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://kit.fontawesome.com/41c41605d4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
    <style type="text/css">
      body {
  background-color: #e4eaec;
}
.dropbtn {
  background-color: #DABE44;
  color: black;
  padding: 16px;
  border: none;
  cursor: pointer;
  outline: none;
  width: auto;
  font-weight: 400;
}

.dropbtn i{
  float: right;
}

.dropbtn:focus {
  background-color: #DABE44;
}

.dropdown {
  float: right;
  position: relative;
  display: inline-block;

}

.dropdown-content {
  display: none;
  position: fixed;
  background-color: #f1f1f1;
  min-width: 200px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  right: 5px;
  top: 60px;
  z-index: 1;
  border-radius: 12px;

}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  font-weight: 400;
  
}

.dropdown a:hover {
  background-color: #DABE44; 
  color: black
}

.show {
  display: block;
}


  </style>
  </head>

<body>
<!--========== Navbar (sit on top) ==========-->
<nav class="nav-logo-title">
  <div class="home-button w3-bar" id="myNavbar" style="background-color: #DABE44">
    <!-- Right-sided navbar links -->
    <div class="nav-button w3-right w3-hide-small">
      <div class="dropdown">
        <img src="../ITMS/images/passport.png" height="30" width="30" style="border-radius: 50%; margin-right: 20px;">
        <button class="dropbtn" onclick="myFunction()">NURUL MAISYARAH BINTI MOHD LATIF
        <i class="fa fa-caret-down" style="margin-left: 5px"></i>
        </button>
        <div class="dropdown-content" id="myDropdown">
          <a href="#"><i class='bx bx-user' ></i>
            <span class="links_name">My Account</span>
          </a>
          <a href="#"><i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
          <hr>
          <a href="index.php"><i class='bx bx-log-out-circle'></i>
            <span class="links_name">Log Out</span>
          </a>
        </div>
        </div>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="menu-icon w3-bar-item w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</nav>

<!--========== Side Bar ==========-->
  <div class="sidebar">
    <div class="logo-details">
      <i class='icon'><img src="../assets/images/logo-no-bg.png"></i>
        <div class="logo_name">ITMS</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="HomepageAdmin.php">
          <i class='bx bx-home'></i>
          <span class="links_name">ITMS Dashboard</span>
        </a>
         <span class="tooltip">ITMS Dashboard</span>
      </li>
      <li>
       <a href="renterlist.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">Manage Renter</span>
       </a>
       <span class="tooltip">Manage Renter</span>
     </li>
  
     <li>
       <a href="bookinglist.php">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Manage Booking</span>
       </a>
       <span class="tooltip">Manage Booking</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
    </ul>
  </div>

  <div class="content">
    <div class="text">ITMS Dashboard</div>
    <hr>
    <!-- Time, Date, Weather -->
    <div class="row-1">
      <div class="clock">
        <div class="display"></div> 
      </div>

      <div class="date-content">
        <span class="date"></span>
      </div>

      <div class="weather">
        <!-- Start WX Widget Code --><script src="https://www.weatherwx.com/weather-conditions-w/my/penang.js"></script><!-- End WX Widget Code -->
      </div>
    </div>

    <div class="row-2 row">
        <div class="col-lg-3 col-sm-6">
                <div class="row-2-card card-box bg-card-1">
                    <div class="inner">
                        <h3> 13 436 </h3>
                        <p> Number of Visitors </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="row-2-card card-box bg-card-2">
                    <div class="inner">
                        <h3> 36 </h3>
                        <p>Renter List</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                    <a href="renterlist.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class=" col-lg-3 col-sm-6">
                <div class="row-2-card card-box bg-card-3">
                    <div class="inner">
                        <h3> 100 </h3>
                        <p>Booking List</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-question" aria-hidden="true"></i>
                    </div>
                    <a href="bookinglist.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            
    </div>

    <div class="row-3">
      
    </div>


  </div>
  <footer>2022 ITMS. All Right Reserved</footer>
  <script src="script.js"></script>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<!-- Currrent Time Updating-->
<script>
      setInterval(function(){
        const clock = document.querySelector(".display");
        let time = new Date();
        let sec = time.getSeconds();
        let min = time.getMinutes();
        let hr = time.getHours();
        let day = 'AM';
        if(hr > 12){
          day = 'PM';
          hr = hr - 12;
        }
        if(hr == 0){
          hr = 12;
        }
        if(sec < 10){
          sec = '0' + sec;
        }
        if(min < 10){
          min = '0' + min;
        }
        if(hr < 10){
          hr = '0' + hr;
        }
        clock.textContent = hr + ':' + min + ':' + sec + " " + day;
      });
    </script>

<!--Current Day and Dates -->
    <script>
    function updateTime() {
  var dateInfo = new Date();
  /* date */
  var dow = [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday"
    ],
    month = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December"
    ],
    day = dateInfo.getDate();

  // store date
  var currentDate = dow[dateInfo.getDay()] + ", " + month[dateInfo.getMonth()] + " " + day;

  document.getElementsByClassName("date")[0].innerHTML = currentDate;
};

// print time and date once, then update them every second
updateTime();
setInterval(function() {
  updateTime()
}, 1000);
</script>

</body>
</html>
