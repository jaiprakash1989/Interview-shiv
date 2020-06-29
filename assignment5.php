<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.navbar {
  overflow: hidden;
  background-color: #333; 
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: red;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: red;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="#home">Home</a>
  <a href="#whyus">Why Us</a>
  <div class="subnav">
    <button class="subnavbtn">Pricing <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#bring">NEET</a>
      <a href="#deliver">JEEMAIN/BITSAT</a>
      <a href="#package">JEE ADVANCED</a>
      <a href="#express">MHCET</a>
	  <a href="#express">JEE MAIN 2020</a>
	  <a href="#express">JEE MAIN 2019</a>
    </div>
  </div> 
  <a href="#login">Login</a>
  <a href="#contact">Register</a>
</div>

<div style="padding:0 16px">
  <p>Online test plateform for		</p>
  <h3>AIIMS / NEED / JEE MAIN & ADVANCED / BITSAT / MHCET</h3>
</div>

</body>
</html>
