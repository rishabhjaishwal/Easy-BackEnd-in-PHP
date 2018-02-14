<body>
<div class="w3-bar w3-small w3-teal w3-hide-small">
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-snapchat"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-flickr"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-right"><b>mail2protute@gmail.com</b></a>
</div>
 <!-- Header -->
  <header class="container-fluid   w3-center w3-border-bottom w3-border-4 w3-border-grey ">
    <h1 class="w3-xxxlarge w3-text-teal"><b>Protute.com</b></h1>
    <h6 class="w3-text-teal">Welcome to the website for <span class="w3-tag w3-teal">Code Hub</span></h6>
  </header>
 
  
  <div class="w3-bar w3-teal w3-text-white w3-card-2" id="myNavbar">
    <a href="index.php" class="w3-bar-item w3-button w3-wide"><i><b>Pro</b></i><b>tute.</b><var>com</var></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small ">
		<a href="../index.php" class="w3-bar-item w3-button hvr-grow">HOME</a>
      <a href="deletepage.php" class="w3-bar-item w3-button hvr-grow">showtable</a>
      <a href="admin.php" class="w3-bar-item w3-button hvr-grow"><i class="fa fa-user"></i> Create Page</a>
      <a href="cprogindex.php" class="w3-bar-item w3-button hvr-grow"><i class="fa fa-th"></i>PROGRAMS</a>
      <a href="logout.php" class="w3-bar-item w3-button hvr-grow"><i class="fa fa-bar-user"></i> LOGOUT</a>
      
    </div>
    <!-- Hide right-floated links on small screens  and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onClick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-light-gray w3-text-black w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onClick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close</a>
  <a href="#about" onClick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="cprojindex.php"  class="w3-bar-item w3-button">PROJECTS</a>
  <a href="cprogindex.php" class="w3-bar-item w3-button">PROGRAMS</a>
  <a href="questions/cquestions.php" class="w3-bar-item w3-button">QUESTIONS</a>
  <a href="#contact" onClick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>
<script>
// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
