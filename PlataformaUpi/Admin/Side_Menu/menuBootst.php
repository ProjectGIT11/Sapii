
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../Recursos/css.css">
</head>
<div id="wrapper">
   <div class="overlay"></div>
    
        <!-- Sidebar -->
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
     <ul class="nav sidebar-nav">
       <div class="sidebar-header">
       <div class="sidebar-brand">
         <a href="#">Brand</a></div></div>
       <li><a href="#home">Home</a></li>
       <li><a href="#about">About</a></li>
       <li><a href="#events">Events</a></li>
       <li><a href="#team">Team</a></li>
       <li class="dropdown">
       <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Works <span class="caret"></span></a>
     <ul class="dropdown-menu animated fadeInLeft" role="menu">
      <div class="dropdown-header">Dropdown heading</div>
      <li><a href="#pictures">Pictures</a></li>
      <li><a href="#videos">Videeos</a></li>
      <li><a href="#books">Books</a></li>
      <li><a href="#art">Art</a></li>
      <li><a href="#awards">Awards</a></li>
      </ul>
      </li>
      <li><a href="#services">Services</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#followme">Follow me</a></li>
      </ul>
  </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <script>$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});</script>