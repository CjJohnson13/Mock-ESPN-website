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
/*
 <a href="index.php">&#8592;</a>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: #f3f3f3;
}

li {
  float: left;
}

li a {
  display: block;
  color: #666;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #ddd;
}

li a.active {
  color: white;
  background-color: black;
}
*/
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
<h2>Recent Commitments</h2>

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


<h2>2021 men's college basketball recruiting class rankings: Chet Holmgren boosts Gonzaga to No. 2</h2>
<img src="chet.jpg" alt="cccc"class="center" width="500" height="333" style="border:5px solid white"> 
<h1>Chet Holmgren's commitment to Gonzaga on Monday meant one of the strangest recruiting cycles in college basketball history is one step closer to finishing. There hasn't been in-person recruiting, campus visits, in-home meetings or coaches scouting players in gyms in more than a year. The 2021 class has survived, however, and for the most part, the recruiting class rankings don't look too different from previous years.</h1>


</body>
</html>