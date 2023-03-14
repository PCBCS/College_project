<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

*,
*::after,
*::before {
box-sizing: border-box;
padding: 0;
margin: 0;
}

.html {
font-size: 62.5%;
}

body {
font-family: "Poppins", sans-serif;
}

.container {
max-width: 1200px;
width: 90%;
margin: auto;
}

.btn {
display: inline-block;
padding: 0.5em 1.5em;
text-decoration: none;
border-radius: 50px;
cursor: pointer;
outline: none;
margin-top: 1em;
text-transform: uppercase;
font-weight: small;
}

.btn-primary {
color: #fff;
background: #16a083;
}

.btn-primary:hover {
background: #117964;
transition: background 0.3s ease-in-out;
}
        .navbar input[type="checkbox"],
.navbar .hamburger-lines {
display: none;
}

.navbar {
box-shadow: 0px 5px 10px 0px #aaa;
position: fixed;
width: 100%;
background: #fff;
color: #000;
opacity: 0.85;
height: 50px;
z-index: 12;
}

.navbar-container {
display: flex;
justify-content: space-between;
height: 64px;
align-items: center;
}

.menu-items {
order: 2;
display: flex;
}

.menu-items li {
list-style: none;
margin-left: 1.5rem;
margin-bottom: 0.5rem;
font-size: 1.2rem;
}

.menu-items a {
text-decoration: none;
color: #444;
font-weight: 500;
transition: color 0.3s ease-in-out;
}

.menu-items a:hover {
color: #117964;
transition: color 0.3s ease-in-out;
}

.logo {
order: 1;
font-size: 2.3rem;
margin-bottom: 0.5rem;
}
@media (max-width: 768px) {
.navbar {
opacity: 0.95;
}

.navbar-container input[type="checkbox"],
.navbar-container .hamburger-lines {
display: block;
}

.navbar-container {
display: block;
position: relative;
height: 64px;
}

.navbar-container input[type="checkbox"] {
position: absolute;
display: block;
height: 32px;
width: 30px;
top: 20px;
left: 20px;
z-index: 5;
opacity: 0;
}

.navbar-container .hamburger-lines {
display: block;
height: 23px;
width: 35px;
position: absolute;
top: 17px;
left: 20px;
z-index: 2;
display: flex;
flex-direction: column;
justify-content: space-between;
}

.navbar-container .hamburger-lines .line {
display: block;
height: 4px;
width: 100%;
border-radius: 10px;
background: #333;
}

.navbar-container .hamburger-lines .line1 {
transform-origin: 0% 0%;
transition: transform 0.4s ease-in-out;
}

.navbar-container .hamburger-lines .line2 {
transition: transform 0.2s ease-in-out;
}

.navbar-container .hamburger-lines .line3 {
transform-origin: 0% 100%;
transition: transform 0.4s ease-in-out;
}

.navbar .menu-items {
padding-top: 100px;
background: #fff;
height: 100vh;
max-width: 300px;
transform: translate(-150%);
display: flex;
flex-direction: column;
margin-left: -40px;
padding-left: 50px;
transition: transform 0.5s ease-in-out;
box-shadow: 5px 0px 10px 0px #aaa;
}

.navbar .menu-items li {
margin-bottom: 1.5rem;
font-size: 1.3rem;
font-weight: 500;
}

.logo {
position: absolute;
top: 5px;
right: 15px;
font-size: 2rem;
}

.navbar-container input[type="checkbox"]:checked ~ .menu-items {
transform: translateX(0);
}

.navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line1 {
transform: rotate(35deg);
}

.navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line2 {
transform: scaleY(0);
}

.navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line3 {
transform: rotate(-35deg);
}
}
    </style>
</head>
<body>
<nav class="navbar">
      <div class="navbar-container container">
          <input type="checkbox" name="" id="">
          <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
          </div>
          <ul class="menu-items">
              <li><a href="#home">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#!">Hospital</a></li>
              <li><a href="#!">Schedule</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="#!">Logout</a></li>
          </ul>
          <h1 class="logo">EFS</h1>
      </div>
  </nav>
</body>
</html>