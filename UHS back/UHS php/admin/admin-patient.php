<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Patient</title>

<!-- Bootstrap 5.2v -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>



<!-- Fontawesome -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Custom CSS -->

<style>
    *{
        color: #dcf6fb;
    -webkit-user-drag: none;
    cursor: default;
    user-select: none;
    }

    #preLoader {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 9999;
			background-color: #ecf0f1;
      
		}
    ::-webkit-scrollbar{
      display: none;
    }
		
		#preLoader img {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}

#primary_nav{
    background-color: #00005e; /*#00005e*/
    height: 3rem;
    font-size: 1.4rem;
    font-weight: 550;
}
.dropdown-menu{
    width: -50em;
}
i,a{
    cursor: pointer;
}

li:hover{
background-image: linear-gradient(45deg,red,blue);
}
a:hover i {
    
  color: #40fab3;
}
.my-link:hover {
  color: red;
}
section{
    color: black;
}

.underline{
    font-weight: 650;
    font-style: italic;
    color: #180039;
    text-decoration: double underline 2px;
   text-decoration-color: #00005e;
   text-underline-offset: 4px;
}
p{
    font-size: 1.3rem;
color: #180039;
font-weight: 550;
}
#card1{
    background-color: #19cf71;
    box-shadow:  0 0 60px #0b6a39;
}
#card2{
    background-color: #04d4f0;
    box-shadow:  0 0 60px #012155;
}
#card3{
    background-color: #e4825b;
    box-shadow:  0 0 60px #e4825b;
}
#card4{
    background-color: #ed1c51;
    box-shadow:  0 0 60px #ed1c51;
}
#hbox1,#hbox2,
#hbox3,#hbox4,
#hbox5,#hbox6{
    background-color: #40fab3;
    color: #012155;
    text-align: center;
    height: 5em;
    padding-top: 1.5rem;
}
thead th{
    color: #dcf6fb;
}
tbody th,tbody td{
    color: black;
}

@media only screen and (max-width:425px)
{

 *{
  font-size: 0.1;
 }




}


</style>



</head>
<body >

  <!-- Pre - Loader -->

  <div id="preLoader">
    <img src="./Assets/giphy.gif" alt="">
  </div>


    <!-- Primary Nav Bar -->
    <nav id="primary_nav" class="navbar">
        <div class="container-fluid  row">
<div class="col-7  ps-lg-5 ps-md-5 ps-sm-1">
    <i class="fa fa-clock"></i>
    <span id="time_display" class="ms-3 me-4"></span>
    <i class="fa fa-calendar"></i>
    <span id="date_display" class="ms-3"></span>
    
</div> 
<div class="col-5 d-flex justify-content-end ">
 <i class="fa fa-phone me-2"><span class="ms-2 h6">+91 1234567890</span></i>
 <i class="fa fa-envelope ms-2"><span class="ms-2 h6">uhs@mail.com</span></i>
 
</div>
        </div>
    </nav>

    <!-- Company Branding -->
<div class="container-fluid  h-75 d-flex flex-column align-items-center" style="background-color: #fce6c2d0;">
<div class="col-lg-5 col-md-10 mt-3 mb-3 ">
    <?xml version="1.0" encoding="UTF-8"?>
<svg version="1.1" viewBox="0 0 1000 247" xmlns="http://www.w3.org/2000/svg">
<g transform="translate(-.60606 .22404)">
<svg width="1e3" height="247" data-background-color="#ffffff" viewBox="0 0 396 98" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<g transform="translate(.24 -.088892)">
<svg width="395.52" height="98.178" viewBox="0 0 395.52 98.17778375519512">
<svg width="395.52" height="98.178" viewBox="0 0 536.9233373216897 133.2775670122536">
<g transform="translate(139.43 41.185)">
<svg width="397.5" height="50.908" viewBox="0 0 397.4975999999999 50.90816157840092">
<svg width="397.5" height="50.908" viewBox="0 0 397.4975999999999 50.90816157840092">
<rect class="rect-o-0" y="28.804" width="397.5" height="2.3482" rx="1%" fill="#000093" stroke="transparent" stroke-width="0" data-fill-palette-color="primary" data-palette-color="#000093"/>
<g transform="translate(.9888)">
<svg width="395.52" height="26.038" viewBox="0 0 395.52 26.03818592111775">
<g>
<svg width="395.52" height="26.038" data-palette-color="#000093" viewBox="0.800000011920929 -36.150001525878906 556.6702148318291 36.55000305175781">
<g>
<svg x="549.67" y="-33.437" width="4.4837" height="5.6858" data-palette-color="#000093" viewBox="3.1600000858306885 -36.36000061035156 28.68000030517578 36.36000061035156">
<path class="undefined-123" d="m10.85 0h-7.69v-36.36h14.35q4.12 0 7.04 1.46 2.92 1.47 4.45 4.14 1.54 2.67 1.54 6.27 0 3.63-1.56 6.23-1.57 2.6-4.52 3.98-2.96 1.39-7.15 1.39h-9.6v-6.18h8.36q2.2 0 3.66-0.6 1.45-0.61 2.17-1.81 0.72-1.21 0.72-3.01 0-1.81-0.72-3.05t-2.18-1.89q-1.47-0.65-3.69-0.65h-5.18v30.08zm3.66-16.55h8.29l9.04 16.55h-8.49l-8.84-16.55z" fill="#000093"/>
</svg>
</g>
<path d="m546.36-30.594c0-3.068 2.487-5.556 5.556-5.556s5.556 2.488 5.556 5.556c0 3.069-2.487 5.557-5.556 5.557s-5.556-2.488-5.556-5.557zm5.556 5.004c2.763 0 5.003-2.24 5.003-5.004 0-2.763-2.24-5.003-5.003-5.003s-5.004 2.24-5.004 5.003c0 2.764 2.241 5.004 5.004 5.004z" fill="#000093" data-fill-palette-color="primary"/>
<path class="undefined-text-0" d="m28.15-12.5q0 6.55-2.97 9.72-2.98 3.18-9.63 3.18t-9.32-3.13q-2.68-3.12-2.68-9.77v-16.15q-1.9-0.7-2.75-1.7l0.5-4.15h11.7l0.5 4.15q-0.8 0.95-2.75 1.7v16.35q0 3.6 1.18 5.32 1.17 1.73 4.22 1.73t4.3-1.78q1.25-1.77 1.25-5.27v-16.35q-2.05-0.75-2.75-1.7l0.5-4.15h10.95l0.5 4.15q-0.8 0.95-2.75 1.7v16.15zm4.25-19.15 0.5-3.85q2.8-0.65 5.2-0.65t4.05 0.15v30.45q1.95 0.75 2.75 1.7l-0.5 3.85h-11.5l-0.5-3.85q0.7-0.95 2.75-1.7v-24.4q-1.75-0.6-2.75-1.7zm20 0.35h3.65v6.3h7.15v4.2h-7.15v12.65q0 1.6 0.45 2.32 0.45 0.73 2.15 0.73t3.65-0.75l1.5 3.9q-3.85 1.95-7.88 1.95-4.02 0-5.45-1.73-1.42-1.72-1.42-5.02v-14.05h-2.25l-0.55-3.05q0.8-0.95 3.3-1.9 0.6-4.1 2.85-5.55zm13.24 10.15 0.5-3.85q2.8-0.65 5.2-0.65t4.05 0.15v19.95q1.95 0.75 2.75 1.7l-0.5 3.85h-11.5l-0.5-3.85q0.7-0.95 2.75-1.7v-13.9q-1.75-0.6-2.75-1.7zm6.18-7.3q-4.18 0-4.18-3.78 0-3.77 4.18-3.77 4.17 0 4.17 3.77 0 3.78-4.17 3.78zm8.32 7.3 0.5-3.85q2.75-0.6 4.95-0.6t3.65 0.1v2.5q1.2-1 3-1.7t3.25-0.7q5.7 0 7.6 2.85 1.25-1.2 3.3-2.03 2.05-0.82 3.8-0.82 5.5 0 7.4 2.47 1.9 2.48 1.9 9.28v8.1q1.95 0.75 2.75 1.7l-0.5 3.85h-11.5l-0.5-3.85q0.7-0.95 2.75-1.7v-9.9q0-2.75-0.75-3.65t-2.97-0.9q-2.23 0-4.23 1.65 0.25 1.7 0.25 4.7v8.1q1.95 0.75 2.75 1.7l-0.5 3.85h-11.5l-0.5-3.85q0.7-0.95 2.75-1.7v-9.9q0-2.75-0.75-3.65t-2.95-0.9-4.2 1.6v12.85q1.95 0.75 2.75 1.7l-0.5 3.85h-11.5l-0.5-3.85q0.7-0.95 2.75-1.7v-13.9q-1.75-0.6-2.75-1.7zm44.8-0.15q0-0.75 0.05-1.6 4.65-2.5 10-2.5t7.67 2.02q2.33 2.03 2.33 6.73v10.65q1.75 0.35 2.75 0.85v4.35q-2.55 1.2-7.3 1.2-0.5-1.3-0.85-3.15-2.15 3.15-7.8 3.15-3.35 0-5.73-1.95-2.37-1.95-2.37-5.3t2.22-5.28q2.23-1.92 6.63-1.92h5.45v-2.4q0-3.9-4.15-3.9-1.55 0-2.55 0.3-0.1 2.1-0.6 3.25h-4.9q-0.85-1.75-0.85-4.5zm9 16.6q2.55 0 4.05-1.5v-4.1h-3.5q-3.6 0-3.6 2.75 0 1.25 0.77 2.05 0.78 0.8 2.28 0.8zm21.05-26.6h3.65v6.3h7.15v4.2h-7.15v12.65q0 1.6 0.45 2.32 0.45 0.73 2.15 0.73t3.65-0.75l1.5 3.9q-3.85 1.95-7.88 1.95-4.02 0-5.45-1.73-1.42-1.72-1.42-5.02v-14.05h-2.25l-0.55-3.05q0.8-0.95 3.3-1.9 0.6-4.1 2.85-5.55zm25.14 31.7q-6 0-9.02-3.2-3.03-3.2-3.03-9.3 0-3.7 1.05-6.38 1.05-2.67 2.85-4.12 3.5-2.8 8.15-2.8t7.13 2.37q2.47 2.38 2.47 8.53 0 3.6-3.55 3.6h-10.85q0.2 3.15 1.63 4.45 1.42 1.3 4.52 1.3 1.7 0 3.25-0.4t2.25-0.8l0.7-0.4 1.5 4q-0.3 0.35-0.87 0.87-0.58 0.53-2.9 1.4-2.33 0.88-5.28 0.88zm-4.75-15.45 7.9-0.3q0.1-0.7 0.1-1.7t-0.8-2.13q-0.8-1.12-2.77-1.12-1.98 0-3.03 1.2t-1.4 4.05zm49.4 9.25v-10h-11v10q2 0.8 2.75 1.65l-0.5 4.15h-11.7l-0.5-4.15q0.65-0.85 2.75-1.65v-22.85q-2.05-0.75-2.75-1.7l0.5-4.15h11.7l0.5 4.15q-0.8 0.95-2.75 1.7v7.85h11v-7.85q-2.05-0.75-2.75-1.7l0.5-4.15h11.7l0.5 4.15q-0.8 0.95-2.75 1.7v22.85q2 0.8 2.75 1.65l-0.5 4.15h-11.7l-0.5-4.15q0.65-0.85 2.75-1.65zm24.85 6.2q-6 0-9.03-3.2-3.02-3.2-3.02-9.3 0-3.7 1.05-6.38 1.05-2.67 2.85-4.12 3.5-2.8 8.15-2.8t7.12 2.37q2.48 2.38 2.48 8.53 0 3.6-3.55 3.6h-10.85q0.2 3.15 1.62 4.45 1.43 1.3 4.53 1.3 1.7 0 3.25-0.4t2.25-0.8l0.7-0.4 1.5 4q-0.3 0.35-0.88 0.87-0.57 0.53-2.9 1.4-2.32 0.88-5.27 0.88zm-4.75-15.45 7.9-0.3q0.1-0.7 0.1-1.7t-0.8-2.13q-0.8-1.12-2.78-1.12-1.97 0-3.02 1.2t-1.4 4.05zm17.89-6.25q0-0.75 0.05-1.6 4.65-2.5 10-2.5t7.68 2.02q2.32 2.03 2.32 6.73v10.65q1.75 0.35 2.75 0.85v4.35q-2.55 1.2-7.3 1.2-0.5-1.3-0.85-3.15-2.15 3.15-7.8 3.15-3.35 0-5.72-1.95-2.38-1.95-2.38-5.3t2.23-5.28q2.22-1.92 6.62-1.92h5.45v-2.4q0-3.9-4.15-3.9-1.55 0-2.55 0.3-0.1 2.1-0.6 3.25h-4.9q-0.85-1.75-0.85-4.5zm9 16.6q2.55 0 4.05-1.5v-4.1h-3.5q-3.6 0-3.6 2.75 0 1.25 0.78 2.05 0.77 0.8 2.27 0.8zm15-26.95 0.5-3.85q2.8-0.65 5.2-0.65t4.05 0.15v30.45q1.95 0.75 2.75 1.7l-0.5 3.85h-11.5l-0.5-3.85q0.7-0.95 2.75-1.7v-24.4q-1.75-0.6-2.75-1.7zm20 0.35h3.65v6.3h7.15v4.2h-7.15v12.65q0 1.6 0.45 2.32 0.45 0.73 2.15 0.73t3.65-0.75l1.5 3.9q-3.85 1.95-7.88 1.95-4.02 0-5.45-1.73-1.42-1.72-1.42-5.02v-14.05h-2.25l-0.55-3.05q0.8-0.95 3.3-1.9 0.6-4.1 2.85-5.55zm12.55-0.35 0.5-3.85q2.8-0.65 5.2-0.65t4.05 0.15v12.5q1.2-0.8 3.2-1.35t3.55-0.55q4.95 0 6.85 2.4t1.9 7.3v10.15q1.95 0.75 2.75 1.7l-0.5 3.85h-11.5l-0.5-3.85q0.7-0.95 2.75-1.7v-9.9q0-2.7-0.88-3.62-0.87-0.93-3.17-0.93t-4.45 1.6v12.85q1.95 0.75 2.75 1.7l-0.5 3.85h-11.5l-0.5-3.85q0.7-0.95 2.75-1.7v-24.4q-1.75-0.6-2.75-1.7zm56.69 2.6q-1.7-0.45-3.55-0.45t-2.97 0.92q-1.13 0.93-1.13 2.6 0 1.68 0.85 2.63t3.35 1.65l4.45 1.3q3.6 1.05 5.73 3.27 2.12 2.23 2.12 6.53 0 5.1-3.67 8.05-3.68 2.95-9.13 2.95-3 0-6.17-0.78-3.18-0.77-5.28-2.17 0-0.3 0-1.15t0.35-2.9 1-3.35h4.75q0.8 1.55 0.95 4.15 1.75 0.75 4.08 0.75 2.32 0 3.82-1.1t1.5-3.15q0-0.95-0.15-1.58-0.15-0.62-0.92-1.35-0.78-0.72-2.23-1.17l-5.15-1.5q-7.85-2.25-7.85-10 0-4.55 3.3-7.28 3.3-2.72 8.63-2.72 5.32 0 10.42 2.4 0 0.3 0 1.15t-0.35 2.9-1 3.35h-4.75q-0.85-1.2-1-3.95zm22.77 29.45q-5.92 0-8.77-3.15t-2.85-9.53q0-6.37 3.17-9.75 3.18-3.37 9.13-3.37t8.82 3q2.88 3 2.88 9.37 0 6.38-3.23 9.9-3.22 3.53-9.15 3.53zm-4.42-13.1q0 8 4.8 8 2.45 0 3.62-1.83 1.18-1.82 1.18-5.97 0-7.8-4.9-7.8-2.4 0-3.55 1.73-1.15 1.72-1.15 5.87zm18.75-18.95 0.5-3.85q2.8-0.65 5.2-0.65t4.05 0.15v30.45q1.95 0.75 2.75 1.7l-0.5 3.85h-11.5l-0.5-3.85q0.7-0.95 2.75-1.7v-24.4q-1.75-0.6-2.75-1.7zm32.99 29.55q-3.45 2.5-8.12 2.5-4.68 0-6.53-1.95t-1.85-6.35v-11.55q-1.75-0.6-2.75-1.7l0.5-3.85q2.8-0.65 5.2-0.65t4.05 0.15v15.95q0 2.7 0.83 3.57 0.82 0.88 3.27 0.88t4.55-1.6v-12.75q-1.75-0.6-2.75-1.7l0.5-3.85q2.8-0.65 5.2-0.65t4.05 0.15v19.5q1.75 0.35 2.75 0.85v3.95q-3 1.6-7.55 1.6-1.25-0.9-1.35-2.5zm16.4-29.2h3.65v6.3h7.15v4.2h-7.15v12.65q0 1.6 0.45 2.32 0.45 0.73 2.15 0.73t3.65-0.75l1.5 3.9q-3.85 1.95-7.88 1.95-4.02 0-5.45-1.73-1.42-1.72-1.42-5.02v-14.05h-2.25l-0.55-3.05q0.8-0.95 3.3-1.9 0.6-4.1 2.85-5.55zm13.25 10.15 0.5-3.85q2.8-0.65 5.2-0.65t4.05 0.15v19.95q1.95 0.75 2.75 1.7l-0.5 3.85h-11.5l-0.5-3.85q0.7-0.95 2.75-1.7v-13.9q-1.75-0.6-2.75-1.7zm6.17-7.3q-4.17 0-4.17-3.78 0-3.77 4.17-3.77 4.18 0 4.18 3.77 0 3.78-4.18 3.78zm19.9 28.85q-5.92 0-8.77-3.15t-2.85-9.53q0-6.37 3.17-9.75 3.18-3.37 9.13-3.37t8.82 3q2.88 3 2.88 9.37 0 6.38-3.23 9.9-3.22 3.53-9.15 3.53zm-4.42-13.1q0 8 4.8 8 2.45 0 3.62-1.83 1.18-1.82 1.18-5.97 0-7.8-4.9-7.8-2.4 0-3.55 1.73-1.15 1.72-1.15 5.87zm19.34-8.45 0.5-3.85q2.75-0.6 4.95-0.6t3.65 0.1v2.5q1.25-1.05 3.33-1.73 2.07-0.67 3.97-0.67 4.9 0 6.88 2.3 1.97 2.3 1.97 7.95v9.6q1.95 0.75 2.75 1.7l-0.5 3.85h-11.5l-0.5-3.85q0.7-0.95 2.75-1.7v-9.9q0-2.7-0.87-3.62-0.88-0.93-3.13-0.93t-4.5 1.6v12.85q1.95 0.75 2.75 1.7l-0.5 3.85h-11.5l-0.5-3.85q0.7-0.95 2.75-1.7v-13.9q-1.75-0.6-2.75-1.7z" fill="#000093" data-fill-palette-color="primary"/>
</svg>
</g>
</svg>
</g>
<g transform="translate(0 33.919)">
<svg width="300.6" height="16.99" viewBox="0 0 300.5952 16.98953347794649">
<g>
<svg width="300.6" height="16.99" data-palette-color="#0a609c" viewBox="0.6000000238418579 -35 829.7300415039062 46.900001525878906">
<path class="undefined-text-1" d="m34.85-29.05-11.45 15.25v8.55h6.2v5.25h-19v-5.25h6.15v-8.25l-11.85-15.55h-4.3v-5.25h16.1v5.25h-4.05l8.15 11.15 7.6-11.15h-5v-5.25h16.1v5.25h-4.65zm16.35 29.75q-3.5 0-6.55-1.55t-4.9-4.4-1.85-6.5 1.85-6.5 4.9-4.4 6.55-1.55q3.4 0 6.47 1.55 3.08 1.55 4.95 4.4 1.88 2.85 1.88 6.5t-1.83 6.5q-1.82 2.85-4.87 4.4t-6.6 1.55zm0.05-4.95q2.9 0 4.82-2.05 1.93-2.05 1.93-5.45t-1.93-5.45q-1.92-2.05-4.82-2.05-2.95 0-4.88 2.05-1.92 2.05-1.92 5.45t1.92 5.45q1.93 2.05 4.88 2.05zm46.35-0.75 1.3 4.45q-2 1-4.2 1-2.45 0-4.1-1.35t-2-3.8q-2.45 2.7-4.7 4.02-2.25 1.33-4.8 1.33-4.1 0-6.33-2.8-2.22-2.8-2.22-8.2v-8.25h-4.35v-4.95h10.6v13.1q0 2.5 1.05 3.9t3.55 1.4q3.3 0 7.1-4.2v-9.25h-3.95v-4.95h10.2v16.9q0 1.9 1.45 1.9 0.8 0 1.4-0.25zm25.24-19.15h2.5v10.5h-5.45v-4.3q-1.45 0-3.47 1.27-2.03 1.28-4.13 3.58v8.15h5.05v4.95h-16.3v-4.95h5v-13.65h-5v-4.95h11.25v5.5q2.5-2.8 5.28-4.45 2.77-1.65 5.27-1.65zm64.35-4.9h-6v23.8h6v5.25h-18.65v-5.25h6v-9.75h-17.65v9.75h6v5.25h-18.65v-5.25h6v-23.8h-6v-5.25h18.65v5.25h-6v9.1h17.65v-9.1h-6v-5.25h18.65v5.25zm25 21.35 2.6 4.1q-5 4.3-11.55 4.3-3.5 0-6.58-1.4-3.07-1.4-4.97-4.1t-1.9-6.45q0-3.9 1.9-6.82 1.9-2.93 5.05-4.53t6.7-1.6q3.1 0 5.52 0.95 2.43 0.95 3.8 2.67 1.38 1.73 1.38 3.98t-1.38 3.87q-1.37 1.63-3.6 2.43-2.22 0.8-4.77 0.8-2.4 0-4.43-0.5-2.02-0.5-4.17-1.4 0.05 3.2 2.25 5.02 2.2 1.83 5.45 1.83 4.95-0.05 8.7-3.15zm-8.3-11.6q-2.25 0-4.28 1.23-2.02 1.22-3.07 3.27 3.1 1.1 6.35 1.1 2.25-0.05 3.62-0.8 1.38-0.75 1.38-2.1 0-1.2-1.1-1.95t-2.9-0.75zm40.59 14.2 1.25 4.45q-0.7 0.45-1.85 0.75t-2.55 0.3q-1.9 0-3.32-1.08-1.43-1.07-1.98-3.02-4.95 4.4-9.8 4.4-3.45 0-5.8-1.93-2.35-1.92-2.35-5.52 0-2.5 1.4-4.3t3.68-2.73q2.27-0.92 4.82-0.92 2.2 0 4 0.42 1.8 0.43 3.7 1.23v-1.85q0-2-1.62-3-1.63-1-4.18-1-3.75 0-9.1 2.05l-1.25-4.75q6.05-2.55 11.2-2.55 5.25 0 8.08 2.52 2.82 2.53 2.82 6.98v7.9q0 1.95 1.45 1.95 0.7 0 1.4-0.3zm-20.2-2q0 1.3 1.05 1.97 1.05 0.68 2.6 0.68 1.45 0 3.5-0.8t4.25-2.45v-1.35q-3.05-1.15-6.5-1.15-2.05 0.05-3.47 0.82-1.43 0.78-1.43 2.28zm33.85 2.15h5.05v4.95h-16.3v-4.95h5v-24.4h-5v-4.95h11.25v29.35zm25.5-1.5 2.15 4.65q-1.8 1.15-3.7 1.8t-4.3 0.65q-4.2 0-6.63-2.65-2.42-2.65-2.42-7.35v-9.25h-4.95v-4.95h4.95v-6.55h6.25v6.55h7.2v4.95h-7.2v9.3q0 2.2 1 3.32 1 1.13 2.85 1.13 1.25 0 2.35-0.4t2.45-1.2zm32.9 1.5h4.35v4.95h-14.65v-4.95h4.05v-8.15q0-2.55-1.28-4.03-1.27-1.47-3.62-1.47-3.65 0-8 5.05v8.6h4.05v4.95h-15.3v-4.95h5v-24.4h-5v-4.95h11.25v15.95q2.65-3 5.12-4.4 2.48-1.4 5.48-1.4 4.25 0 6.4 2.77 2.15 2.78 2.15 8.23v8.2zm40.19 5.6q-5.2 0-9.37-2.33-4.18-2.32-6.55-6.37-2.38-4.05-2.38-9.1t2.38-9.13q2.37-4.07 6.57-6.4 4.2-2.32 9.35-2.32 5.1 0 9.28 2.32 4.17 2.33 6.55 6.4 2.37 4.08 2.37 9.13 0 5-2.37 9.07-2.38 4.08-6.55 6.4-4.18 2.33-9.28 2.33zm0-5.4q3.3 0 5.88-1.63 2.57-1.62 3.97-4.47t1.4-6.3q0-3.5-1.4-6.35t-3.95-4.48q-2.55-1.62-5.9-1.62-3.45 0-6.02 1.65-2.58 1.65-3.98 4.47-1.4 2.83-1.4 6.33 0 3.55 1.4 6.35t3.98 4.42q2.57 1.63 6.02 1.63zm52.6-0.25 1.3 4.45q-2 1-4.2 1-2.45 0-4.1-1.35t-2-3.8q-2.45 2.7-4.7 4.02-2.25 1.33-4.8 1.33-4.1 0-6.33-2.8-2.22-2.8-2.22-8.2v-8.25h-4.35v-4.95h10.6v13.1q0 2.5 1.05 3.9t3.55 1.4q3.3 0 7.1-4.2v-9.25h-3.95v-4.95h10.2v16.9q0 1.9 1.45 1.9 0.8 0 1.4-0.25zm25.24-19.15h2.5v10.5h-5.44v-4.3q-1.45 0-3.48 1.27-2.02 1.28-4.13 3.58v8.15h5.05v4.95h-16.3v-4.95h5v-13.65h-5v-4.95h11.25v5.5q2.5-2.8 5.28-4.45 2.77-1.65 5.27-1.65zm57.5 16.95 3.1 4.3q-1.4 1.6-3.15 2.6t-4.3 1q-4.6 0-7.68-3.23-3.07-3.22-4.77-10.02l-0.5-1.6h-6.15v8.95h5.85v5.2h-18.5v-5.25h6v-23.8h-6v-5.25h20.2q6.05 0 9.62 2.67 3.58 2.68 3.58 7.38 0 3.9-2.28 6.4-2.27 2.5-6.47 3.35l0.55 1.55q1.35 4.1 3.07 5.82 1.73 1.73 3.88 1.73 2.25 0 3.95-1.8zm-23.45-21.85v10h7.75q2.65 0 4.55-1.33 1.9-1.32 1.9-3.87 0-2.35-1.85-3.58-1.85-1.22-4.6-1.22h-7.75zm49.1 21.35 2.6 4.1q-5 4.3-11.55 4.3-3.5 0-6.58-1.4-3.07-1.4-4.97-4.1t-1.9-6.45q0-3.9 1.9-6.82 1.9-2.93 5.05-4.53t6.7-1.6q3.1 0 5.52 0.95 2.43 0.95 3.8 2.67 1.38 1.73 1.38 3.98t-1.38 3.87q-1.37 1.63-3.6 2.43-2.22 0.8-4.77 0.8-2.4 0-4.43-0.5-2.02-0.5-4.17-1.4 0.05 3.2 2.25 5.02 2.2 1.83 5.45 1.83 4.95-0.05 8.7-3.15zm-8.3-11.6q-2.25 0-4.28 1.23-2.02 1.22-3.07 3.27 3.1 1.1 6.35 1.1 2.25-0.05 3.62-0.8 1.38-0.75 1.38-2.1 0-1.2-1.1-1.95t-2.9-0.75zm26.99 4.9q4.56 1.3 6.98 3.25t2.42 5.1q0 1.95-1.15 3.5t-3.15 2.4-4.45 0.85q-2.5 0-4.75-0.8t-4-2.3v2.45h-4.55v-7.75l2.75-0.25q1.5 1.9 4.25 3.25t5.11 1.35q1.64 0 2.54-0.58 0.9-0.57 0.9-1.57 0-1.1-1.42-1.95t-5.08-1.85q-4.5-1.25-6.8-3.13-2.29-1.87-2.29-4.87 0-1.9 1.04-3.48 1.05-1.57 2.96-2.5 1.9-0.92 4.4-0.92 4.64 0 7.85 2.95v-2.3h4.54v7.7l-2.75 0.25q-1.35-2.15-3.47-3.35-2.13-1.2-4.42-1.2-1.61 0-2.63 0.6t-1.02 1.55q0 1.05 1.37 1.82 1.38 0.78 4.82 1.78zm32.5-9.8q2.9 0 5.4 1.57 2.5 1.58 4 4.4 1.5 2.83 1.5 6.33 0 3.55-1.62 6.45-1.63 2.9-4.45 4.52-2.83 1.63-6.33 1.63-4.25 0-7.8-3.1v8.35h4.9v4.95h-16.05v-4.95h5v-24.55h-5v-4.95h11.15v4.5q1.95-2.4 4.38-3.78 2.42-1.37 4.92-1.37zm-3.05 19.65q3.35 0 5.38-2.05 2.02-2.05 2.02-5.35 0-3.05-1.75-5.03-1.75-1.97-4.6-1.97-1.85 0-3.75 1.17-1.9 1.18-3.55 3.33v7.4q3.2 2.5 6.25 2.5zm30.6 5.25q-3.5 0-6.55-1.55t-4.9-4.4-1.85-6.5 1.85-6.5 4.9-4.4 6.55-1.55q3.4 0 6.47 1.55 3.08 1.55 4.95 4.4 1.88 2.85 1.88 6.5t-1.83 6.5q-1.82 2.85-4.87 4.4t-6.6 1.55zm0.05-4.95q2.9 0 4.82-2.05 1.93-2.05 1.93-5.45t-1.93-5.45q-1.92-2.05-4.82-2.05-2.95 0-4.88 2.05-1.92 2.05-1.92 5.45t1.92 5.45q1.93 2.05 4.88 2.05zm46.95-0.7h4.3v4.95h-14.65v-4.95h4.1v-8.15q0-2.4-1.28-3.8-1.27-1.4-3.62-1.4-3.8 0-8.2 5v8.35h4.05v4.95h-15.3v-4.95h5v-13.65h-5v-4.95h11.25v5.4q2.7-3.05 5.17-4.53 2.48-1.47 5.33-1.47 4.3 0 6.57 2.8 2.28 2.8 2.28 8.2v8.2zm19.14-9.45q4.55 1.3 6.98 3.25 2.42 1.95 2.42 5.1 0 1.95-1.15 3.5t-3.15 2.4-4.45 0.85q-2.5 0-4.75-0.8t-4-2.3v2.45h-4.55v-7.75l2.75-0.25q1.5 1.9 4.25 3.25t5.1 1.35q1.65 0 2.55-0.58 0.9-0.57 0.9-1.57 0-1.1-1.42-1.95-1.43-0.85-5.08-1.85-4.5-1.25-6.8-3.13-2.3-1.87-2.3-4.87 0-1.9 1.05-3.48 1.05-1.57 2.95-2.5 1.9-0.92 4.4-0.92 4.65 0 7.85 2.95v-2.3h4.55v7.7l-2.75 0.25q-1.35-2.15-3.47-3.35-2.13-1.2-4.43-1.2-1.6 0-2.62 0.6-1.03 0.6-1.03 1.55 0 1.05 1.38 1.82 1.37 0.78 4.82 1.78zm20.8-13.6q-1.85 0-3.1-1t-1.25-2.45q0-1.55 1.25-2.55t3.1-1q1.95 0 3.18 1 1.22 1 1.22 2.55 0 1.5-1.22 2.47-1.23 0.98-3.18 0.98zm3.6 23.05h5.05v4.95h-16.3v-4.95h5v-13.65h-5v-4.95h11.25v18.6zm24.7-19.25q2.9 0 5.4 1.57 2.5 1.58 4 4.4 1.5 2.83 1.5 6.33 0 3.55-1.63 6.45-1.62 2.9-4.47 4.52-2.85 1.63-6.35 1.63-4.7 0-8.5-3.8l-1.8 3.1h-3.6v-29.35h-4.45v-4.95h10.6v15.25q1.95-2.4 4.37-3.78 2.43-1.37 4.93-1.37zm-3.05 19.65q3.3 0 5.35-2.05t2.05-5.35q0-3.05-1.75-5.03-1.75-1.97-4.6-1.97-1.8 0-3.7 1.2t-3.6 3.35v7.35q3.2 2.5 6.25 2.5zm24.7-23.45q-1.85 0-3.1-1t-1.25-2.45q0-1.55 1.25-2.55t3.1-1q1.95 0 3.17 1 1.23 1 1.23 2.55 0 1.5-1.23 2.47-1.22 0.98-3.17 0.98zm3.6 23.05h5.05v4.95h-16.3v-4.95h5v-13.65h-5v-4.95h11.25v18.6zm17.74 0h5.05v4.95h-16.3v-4.95h5v-24.4h-5v-4.95h11.25v29.35zm14.55-23.05q-1.85 0-3.1-1t-1.25-2.45q0-1.55 1.25-2.55t3.1-1q1.95 0 3.18 1 1.22 1 1.22 2.55 0 1.5-1.22 2.47-1.23 0.98-3.18 0.98zm3.6 23.05h5.05v4.95h-16.3v-4.95h5v-13.65h-5v-4.95h11.25v18.6zm25.35-1.5 2.15 4.65q-1.8 1.15-3.7 1.8t-4.3 0.65q-4.2 0-6.63-2.65-2.42-2.65-2.42-7.35v-9.25h-4.95v-4.95h4.95v-6.55h6.25v6.55h7.2v4.95h-7.2v9.3q0 2.2 1 3.32 1 1.13 2.85 1.13 1.25 0 2.35-0.4t2.45-1.2zm32.15-17.1v4.95h-3.15l-9.4 20.55q-2.35 5.1-5.13 7.52-2.77 2.43-6.52 2.43-2.05 0-3.65-0.62-1.6-0.63-3.55-1.83l2.45-4.75q1.2 0.75 2.32 1.23 1.13 0.47 2.43 0.47 2.15 0 3.77-1.3 1.63-1.3 2.98-4.3l0.05-0.15-9.85-19.25h-3.4v-4.95h13.65v4.45h-3.65l6.1 13.35 5.85-13.35h-3.45v-4.45h12.15z" fill="#0a609c" data-fill-palette-color="secondary"/>
</svg>
</g>
</svg>
</g>
</svg>
</svg>
</g>
<svg width="133.28" height="133.28" viewBox="0 0 133.278746542176 133.2775670122536">
<svg class="icon-icon-0" width="133.28" height="133.28" enable-background="new 0 0 100 100" data-fill-palette-color="accent" version="1.1" viewBox="0 -4.76837158203125e-7 100 99.99911499023438" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="m69.089 6.549c-3.158-2.588-5.352-1.979-8.516 3.662-2.09 3.73-5.417 4.18-7.455 4.066l0.014-0.746c2.363-1.175 4.029-3.558 4.029-6.367 0-3.964-3.209-7.164-7.161-7.164s-7.174 3.2-7.174 7.165c0 2.809 1.667 5.192 4.036 6.361l7e-3 0.752c-2.031 0.114-5.365-0.335-7.455-4.066-3.151-5.641-5.352-6.25-8.502-3.662-3.171 2.591-15.671 17.529-30.912 16.158 0 0 3.021 6.859 11.256 5.339 0 0 4.401 4.567 11.543 1.37 0 0 3.711 3.347 9.616 0.303 0 0 4.388 3.353 9.069 0.456 0 0 2.643 1.914 5.58 1.419l0.188 17.246c-0.332-0.065-0.599-0.143-0.95-0.205-0.013-6e-3 -5.117-1.1-10.515-2.614-5.195-1.361-10.898-3.568-11.738-4.717 0.072-0.072 0.189-0.127 0.339-0.199 0.462-0.244 1.25-0.495 2.188-0.687 1.907-0.388 4.492-0.586 7.09-0.69 5.163-0.186 6.094 0.039 6.185 0.056 7e-3 -0.163 2.988 0.352 3.809-2.686-0.032-0.026 0.059-0.15 7e-3 -0.222-0.169-2.09-1.777-2.194-3.093-2.438-2.135-0.28-1.022-0.169-3.899-0.133-4.727 0.352-19.291-0.827-21.126 6.839 0 0.215-0.013 0.352-0.039 0.541 0.612 6.676 14.434 9.573 24.447 11.569-3.398 2.327-5.215 5.354-5.938 9.268-0.345 4.173 2.969 8.145 10.664 12.584-5.847 4.141-9.688 8.027-9.375 12.722 0.547 3.828 3.926 8.945 10.566 12.168 0.02 7e-3 0.026-7e-3 0.039 0h0.02s-4.648-7.09-4.961-10.97c-0.306-2.266 0.983-5.612 6.634-9.643l0.163 14.18h0.026c0.039 1.205 0.97 2.168 2.142 2.168 1.171 0 2.103-0.963 2.142-2.168h0.02l0.188-13.809c5.208 3.861 6.387 7.07 6.087 9.271-0.312 3.88-4.954 10.97-4.954 10.97h0.013s0.014 7e-3 0.046 0c6.634-3.223 10.02-8.34 10.56-12.168 0.312-4.694-3.528-8.581-9.368-12.722 7.688-4.439 11.009-8.411 10.664-12.584-0.723-3.913-2.539-6.94-5.944-9.268 10.02-1.996 23.835-4.893 24.447-11.569-0.026-0.189-0.039-0.326-0.039-0.541-1.83-7.666-16.4-6.487-21.127-6.839-2.877-0.036-1.764-0.146-3.899 0.133-1.315 0.244-2.923 0.348-3.093 2.438-0.052 0.072 0.046 0.195 0.014 0.222 0.82 3.037 3.802 2.522 3.809 2.686 0.084-0.017 1.016-0.241 6.185-0.056 2.591 0.104 5.176 0.303 7.083 0.69 0.944 0.192 1.719 0.442 2.188 0.687 0.15 0.072 0.273 0.127 0.346 0.199-0.84 1.149-6.543 3.356-11.738 4.717-5.404 1.514-10.508 2.607-10.521 2.614-0.13 0.026-0.234 0.052-0.364 0.075l0.222-17.119c2.955 0.518 5.618-1.416 5.618-1.416 4.668 2.897 9.069-0.456 9.069-0.456 5.904 3.044 9.609-0.303 9.609-0.303 7.142 3.197 11.543-1.37 11.543-1.37 8.23 1.521 11.257-5.338 11.257-5.338-15.247 1.371-27.747-13.567-30.911-16.159zm-25.821 61.162c-1.907-1.185-2.799-2.786-2.624-3.867 0.104-1.504-0.417-5.091 6.699-7.702l0.163 14.245c-1.373-0.866-2.793-1.758-4.238-2.676zm15.43-3.867c0.176 1.081-0.717 2.683-2.624 3.867-1.25 0.801-2.474 1.562-3.672 2.317l0.183-13.665c6.49 2.598 6.009 6.023 6.113 7.481z" fill="#7be3fc" data-fill-palette-color="accent"/></svg>
</svg>
</svg>
</svg>
<rect width="395.52" height="98.178" fill="none" visibility="hidden"/>
</g>
</svg>
</g>
</svg>

</div>

</div>

<!-- Main Nav Bar -->


    <nav id="primary_nav" class="navbar navbar-expand-lg navbar-expand-md  navbar-dark h-50">
        <div class="container-fluid">
        
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-5">
              
              <li class="nav-item rounded-1">
                <a id="dashboard_link" class="nav-link text-white" href="#" onmouseover="this.style.color='#1e038c'" onmouseout="this.style.color='white'"><i class="fas fa-tachometer-alt ms-4 me-3"></i>Dashboard</a>
              </li>
              <li class="nav-item rounded-1">
                <a id="history_link" class="nav-link text-white" href="#" onmouseover="this.style.color='#1e038c'" onmouseout="this.style.color='white'""><i class="fas fa-history ms-4 me-3"></i>History</a>
              </li>
              <!-- <li class="nav-item  rounded-1">
                <a id="appointment_link" class="nav-link text-white " href="#" onmouseover="this.style.color='#1e038c'" onmouseout="this.style.color='white'"><i class="fas fa-file-prescription ms-4 me-3"></i>Appointment</a>
              </li> -->
              <li class="nav-item  rounded-1">
                <a class="nav-link text-white " href="https://pcbcs.github.io/College_project/" onmouseover="this.style.color='#1e038c'" onmouseout="this.style.color='white'"><i class="fas fa-sign-out-alt ms-4 me-3"></i>Log out</a>
              </li>
            </ul>
          </div>
        </div>
        
      </nav>

      <!-- All Sections -->

<!-- 1)  DASHBOARD SECTION   -->
<section id="dashboard" class="container-fluid ">

    <div class="row text-dark">

       <div class="col-12 d-flex justify-content-evenly mt-5 mb-3">
        <div id="card1" class="card mt-5 ms-5  mb-5" style="width: 15rem;">
            <img src="https://img.icons8.com/plasticine/100/null/clinic.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-center ">Hospital Registered</p>
              <h1 class="text-center" >000</h1>
            </div>
          </div>
        <div id="card2" class="card mt-5 ms-5  mb-5" style="width: 15rem;">
            <img src="https://img.icons8.com/color/128/000000/doctor-male--v1.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <p class="card-text">Doctor Registered</p>
              <h1 class="text-center" >000</h1>
            </div>
          </div>
        <div id="card3" class="card mt-5 ms-5  mb-5" style="width: 15rem; ">
            <img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/100/null/external-patient-plastic-surgery-flaticons-lineal-color-flat-icons.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-center">Patient Registered</p>
              <h1 class="text-center" >000</h1>
            </div>
          </div>
        <div id="card4" class="card mt-5 ms-5  mb-5" style="width: 15rem; ">
            <img src="https://img.icons8.com/external-flaticons-flat-flat-icons/100/null/external-medical-history-nursing-flaticons-flat-flat-icons-2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-center">Appointments</p>
              <h1 class="text-center" >000</h1>
            </div>
          </div>

       </div>





    </div>
    <div class="row">
    <div class="col-12 text-dark text-center mb-5">
        <h1 style="
            text-decoration: double underline 1px #db7909;
            text-underline-offset: 6px;">Welcome  to UHS Patient Portal</h1>
    </div>

    <div class="col-6 text-dark d-flex justify-content-center mt-5">
      <div class="card-body ps-5 ms-4">
        <p class="card-text">
          <h2><i class="fa fa-id-card" style="color: #012155;" ></i> : userid</h2>
          <h3><i class="fa fa-user" style="color: #012155;"></i> : username</h3>
          <h3><i class="fa fa-mars-and-venus" style="color: #012155;"></i> : 
          </h3>
          <h3><i class="fa fa-droplet" style="color: #012155;"></i> : 
          </h3>
          <h3><i class="fa fa-child" style="color: #012155;"></i> : 
          </h3>
          <h3> <i class="fa fa-phone" style="color: #012155;"></i> : 9999999999</h3>
          <h3> <i class="fa fa-envelope-circle-check" style="color: #012155;"></i> : meter@mail.com</h3>
          <h3> <i class="fa fa-address-book" style="color: #012155;"></i> :Attabira , Bargarh</h3>
          <h3 class="ps-5" >Odisha - 123456</h3>
        </p>
      </div>

    </div>
    <div class="col-6 text-dark pt-5 mt-5">
        <h3>Mr. Anil ,</h3><p>Thank you for registering in our portal! We appreciate your trust in us and are delighted to have you on board. We hope you find our services useful and efficient. As you continue to use our portal, we wish you good health and happiness ahead. We understand the value of your time, and our team is committed to providing you with the best experience possible. Please do not hesitate to contact us if you have any questions or concerns. Once again, thank you for choosing us, and we look forward to serving you in the future.  
            
            
              
        </p>
        <p class="ms-5 ps-5" >" - UHS "</p>
    </div>
</div>

</section>

<!-- 2)HISTORY SECTION   -->
<section id="history" class="container-fluid">

    <div class="row ps-4 pe-4">


<h1 class="col-12 text-dark text-center underline mt-3 mb-5">Your Medical History</h1>




<table class="table table-responsive text-center">
    <thead>
      <tr class="table-dark">
        <th scope="col">Serial No</th>
        <th scope="col">Date</th>
        <th scope="col">Hospital</th>
        <th scope="col">Doctor</th>
        <th scope="col">Speciality</th>
        <th scope="col">Cause</th>
        <th scope="col">Medication</th>
        <th scope="col">Fee</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        
      </tr>
     
    </tbody>
  </table>







    </div>


</section>

<!-- 
 3) APPOINTMENT SECTION   


<section id="appointment" class="container-fluid">

    <div class="row ps-4 pe-4">


<h1 class="col-12 text-dark text-center underline mt-3 mb-5">Get Appointment</h1>
<div class="col-12">
    <div class="container">
<form action="" method="post" class="d-flex">
    <select class="form-select h-25" >
        <option selected style="display: none;">Select Speciality</option>
        <option value="1" class="text-black">One</option>
        <option value="2" class="text-black">Two</option>
        <option value="3" class="text-black">Three</option>
      </select>
     
        <button class="btn btn-primary ms-5 h-25" type="submit">Submit</button>
     
</form>
    </div>
</div>
<table class="table  text-center col-12 mt-5">
    <thead>
        <tr class="table-dark ">
          <th scope="col">Serial No.</th>
          <th scope="col">Hospital</th>
          <th scope="col">Doctor</th>
          <th scope="col">Speciality</th>
          <th scope="col">Fee</th>
          <th scope="col">Add Appointment</th>
        </tr>
      </thead>
      <tbody>
        <tr class="table-secondary">
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>
            <form action="" method="post">
                <button type="submit" class="border-0 ">
                   <i class="fa fa-plus" style="color:#023903" ></i>
                </button>
            </form>
          </td>
        </tr>
   
      </tbody>
  </table>
</div>


</section> -->






     

<!-- Footer Area -->
      <footer id="footer" class="footer w-100 h-100 bg-black" style="height: 10rem;">
        <div class="container text-white pt-3">
          <div class="row">
            <div class="col-6 ">
                <div class="row">
                    <h3 class="text-light">Quick Links</h3>
                    <div class="col-6  text-info">
                        <h5><a href="#" class="text-white text-decoration-none h6">Homepage</a></h5>
                        <h5><a href="#"class="text-white text-decoration-none h6">About</a></h5>
                        <h5><a href="#" class="text-white text-decoration-none h6">Mission</a></h5>
                        <h5><a href="#" class="text-white text-decoration-none h6">Carriers</a></h5>
                        <h5><a href="#" class="text-white text-decoration-none h6">Customer Relation</a></h5>

                    </div>
                    <div class="col-6 "></div>
                </div>
            </div>
            <div class="col-6  border-start border-1">
                <div class="row">
                    <h3>About</h3>
                    <div class="col-7 ms-5 mt-2">
                        <h4>Developed By UHS Private Ltd.</h4>
                        <h5>Panchayat Degree College Bargarh,</h5>
                        <h5>Odisha - 768028</h5>
                    </div>
                    <div class="col-5 ">
                       
                    </div>
                </div>
              
        </div>
          </div>
        </div>
      </footer>


</body>
<script>
 
</script>
<script src="./js/page-shift1.js"></script>
<script src="./js/date&time.js"></script>


</html>