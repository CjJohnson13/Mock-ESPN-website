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

.dropdown-content a:hover {
  background-color: #f1f1f1;
}

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




@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300);

/*Ignore me, I'm just page styling*/

body {
  background: #ffffff;
  background: -moz-linear-gradient(-45deg, #ffffff 0%, #ffffff 50%, #F2F2F2 50%, #F2F2F2 50%, #F2F2F2 100%);
  background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#ffffff), color-stop(50%,#ffffff), color-stop(50%,#F2F2F2), color-stop(50%,#F2F2F2), color-stop(100%,#F2F2F2));
  background: -webkit-linear-gradient(-45deg, #ffffff 0%,#ffffff 50%,#F2F2F2 50%,#F2F2F2 50%,#F2F2F2 100%);
  background: -o-linear-gradient(-45deg, #ffffff 0%,#ffffff 50%,#F2F2F2 50%,#F2F2F2 50%,#F2F2F2 100%);
  background: -ms-linear-gradient(-45deg, #ffffff 0%,#ffffff 50%,#F2F2F2 50%,#F2F2F2 50%,#F2F2F2 100%);
  background: linear-gradient(135deg, #ffffff 0%,#ffffff 50%,#F2F2F2 50%,#F2F2F2 50%,#F2F2F2 100%);
}



#social-platforms {
  position:relative;
  top:100px;
  top:25vh;
  font-size:1rem;
  text-align:center;
  height:250px;
  overflow:hidden;
}

/*Pen code from this point on*/
.btn {
  clear:both;
  white-space:nowrap;
  font-size:.8em;
  display:inline-block;
  border-radius:5px;
  box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.35);
  margin:2px;
  -webkit-transition:all .5s;
  -moz-transition:all .5s;
  transition:all .5s;
  overflow:hidden
}

.btn:hover {
  box-shadow: 0 5px 15px 0 rgba(0, 0, 0, 0.45);
}

.btn:focus {
  box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.4);
}

.btn > span,.btn-icon > i {
  float:left;
  padding:13px;
  -webkit-transition:all .5s;
  -moz-transition:all .5s;
  transition:all .5s;
  line-height:1em
}

.btn > span {
  padding:14px 18px 16px;
  white-space:nowrap;
  color:#FFF;
  background:#b8b8b8
}

.btn:focus > span {
  background:#9a9a9a
}

.btn-icon > i {
  border-radius:5px 0 0 5px;
  position:relative;
  width:13px;
  text-align:center;
  font-size:1.25em;
  color:#fff;
  background:#212121
}

.btn-icon > i:after {
  content:"";
  border:8px solid;
  border-color:transparent transparent transparent #222;
  position:absolute;
  top:13px;
  right:-15px
}

.btn-icon:hover > i,.btn-icon:focus > i {
  color:#FFF
}

.btn-icon > span {
  border-radius:0 5px 5px 0
}

/*Facebook*/
.btn-facebook:hover > i,.btn-facebook:focus > i {
  color:#3b5998
}

.btn-facebook > span {
  background:#3b5998
}

/*Twitter*/
.btn-twitter:hover > i,.btn-twitter:focus > i {
  color:#55acee
}

.btn-twitter > span {
  background:#55acee
}

/*Instagram*/
.btn-googleplus:hover > i,.btn-googleplus:focus > i {
  color:#dd4b39
}

.btn-googleplus > span {
  background:#dd4b39
}

/*Youtube*/
.btn-pinterest:hover > i,.btn-pinterest:focus > i {
  color:#cb2028
}

.btn-pinterest > span {
  background:#cb2028
}

/*LinkedIn*/
.btn-linkedin:hover > i,.btn-linkedin:focus > i {
  color:#007bb6
}

.btn-linkedin > span {
  background:#007bb6
}
.myDiv {
  border: 5px outset black;
  background-color: lightblue;
  text-align: center;
}
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 350px;
  margin-left: 200px;
  background: white;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
 
}

div.desc {
  padding: 15px;
  text-align: center;
}
h4{
        background-color:#0076B6;
        text-align: center;
        color:#FFFFFF;
        font-family: 'Notable', sans-serif;
        font-size:15px;
        border-style: solid;
    }
</style>
</head>
<body> 
<h1>Midwest Basketball Recruiting</h1>
<h2>Home Page</h2>

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

<img src="midwest.jpg" alt="mw"class="center"width="42" height="250" style="border:5px solid black"> 


<h1>Social Media Links</h1>


<div class="myDiv">
<a class="btn btn-icon btn-facebook" href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
<a class="btn btn-icon btn-twitter" href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
<a class="btn btn-icon btn-googleplus" href="#"><i class="fa fa-instagram"></i><span>Instagram</span></a>
<a class="btn btn-icon btn-pinterest" href="#"><i class="fa fa-youtube"></i><span>YouTube</span></a>
<a class="btn btn-icon btn-linkedin" href="#"><i class="fa fa-tiktok"></i><span>TikTok</span></a>
</div>
<h2>Media Gallery</h2>
<div class="gallery">
  <a target="_blank" href="#">
    <img src="boowill.jpg" alt="boo" width="600" height="300">
  </a>
  <h4>Trey Phillips (Kansas) dunks over a Boo Williams defender</h4>
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="boo.jpg" alt="bw" width="600" height="300">
  </a>
  <h4>Cam Thomas (Michigan) passing to a teammate</h4>
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="mikep.jpg" alt="mike" width="600" height="300">
  </a>
  <h4>Michael Porter Jr. (Missouri) drives on Kevin Knox (Wisconsin) in Nike EYBL game</h4>
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="bris.jpg" alt="briscoe" width="600" height="300">
  </a>
  <h4>Isiah Briscoe (Illinos) sinks the free throw</h4>
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="ind1.jpg" alt="ind1" width="600" height="300">
  </a>
<h4>Indiana Elite 2024 - Green team members</h4>
  </div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="trent.jpg" alt="gt" width="600" height="300">
  </a>
<h4>Gary Trent (Ohio) sizes up defender</h4>
</div>

</body>
</html>