<!DOCTYPE HTML>  
<html>
<head>
<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 20%;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

h1{
        background-color:#0076B6;
        text-align: center;
        color:#000000
        font-family: 'Notable', sans-serif;
        font-size:40px;
        border-style: solid;
    }
h2{
        background-color:#0076B6;
        text-align: center;
        color:#FFFFFF;
        font-family: 'Notable', sans-serif;
        font-size:35px;
        border-style: solid;
    }
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
		body {
  margin: 0 auto;
  padding: 0;
  background: #222;
}
body {
  background: #ffffff;
  background: -moz-linear-gradient(-45deg, #ffffff 0%, #ffffff 50%, #F2F2F2 50%, #F2F2F2 50%, #F2F2F2 100%);
  background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#ffffff), color-stop(50%,#ffffff), color-stop(50%,#F2F2F2), color-stop(50%,#F2F2F2), color-stop(100%,#F2F2F2));
  background: -webkit-linear-gradient(-45deg, #ffffff 0%,#ffffff 50%,#F2F2F2 50%,#F2F2F2 50%,#F2F2F2 100%);
  background: -o-linear-gradient(-45deg, #ffffff 0%,#ffffff 50%,#F2F2F2 50%,#F2F2F2 50%,#F2F2F2 100%);
  background: -ms-linear-gradient(-45deg, #ffffff 0%,#ffffff 50%,#F2F2F2 50%,#F2F2F2 50%,#F2F2F2 100%);
  background: linear-gradient(135deg, #ffffff 0%,#ffffff 50%,#F2F2F2 50%,#F2F2F2 50%,#F2F2F2 100%);
}
.left {
  left: 25px;
}

.right {
  right: 25px;
}

.center {
  text-align: center;
}

.bottom {
  position: absolute;
  bottom: 25px;
}

#gradient {
  background: #999955;
  background-image: linear-gradient(#b8d6f9 20%, #7bb2f2 20%, #3689eb 40%, #1774e3 40%, #135fbb 60%, #104d96 60%, #0c3e79 80%, #092e59 80%);
  margin: 0 auto;
  margin-top: 100px;
  width: 100%;
  height: 150px;
}

#gradient:after {
  content: "";
  position: absolute;
  background: #E9E2D0;
  left: 50%;
  margin-top: -67.5px;
  margin-left: -320px;
  padding-left: 20px;
  border-radius: 5px;
  width: 620px;
  height: 275px;
  z-index: -1;
}

#card {
  position: static;
  width: 450px;
  height: 241px;
  padding: 25px;
  padding-top: 0;
  padding-bottom: 0;
  left: 25px;
  top: 67.5px;
  margin-left: 700px;
  background: #E9E2D0;
  box-shadow: -20px 0 35px -25px black, 20px 0 35px -25px black;
  z-index: 5;
}

#card img {
  width: 150px;
  height: 240px;
  float: left;
  border-radius: 5px;
  margin-right: 20px;
 
}

#card h2 {
  font-family: courier;
  color: #333;
  margin: 0 auto;
  padding: 0;
  font-size: 15pt;
}

#card p {
  font-family: courier;
  color: #555;
  font-size: 13px;
}

#card span {
  font-family: courier;
}
</style>
</head>
<body> 
<h1>Midwest Basketball Recruiting</h1>
<h2>About</h2>

<ul>
  <li><a href="form2021.php">Home</a></li>
  <li><a href="rankings.php">AAU Circuit News</a></li>
  <li><a href="coach.php">Coaches +</a></li>
  <li><a href="news.php">Recent Commitments</a></li>
  <li><a href="about.php">About</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">States</a>
    <div class="dropdown-content">
      <a href="view.php">Indiana</a>
      <a href="#">Illinois</a>
      <a href="#">Missouri</a>
      <a href="#">Ohio</a>
      <a href="#">Michigan</a>
      <a href="#">Wisconsin</a>
      <a href="#">Iowa</a>
      <a href="#">Minnesota</a>
  </li>
</ul>
<img src="midwest.jpg" alt="mw"class="center" style="border:5px solid black"> 



<h2>About Midwest Recruiting</h2>
<h1>Midwest Recruiting was formed to shine a light on basketball players that normally wouldn't get the recognition. States like Florida, California, and Texas have a bigger advantge for players because coaches don't mind traveling there to see players. Now with this web application the underdog recruits can get some shine. </h1>



</body>
</html>