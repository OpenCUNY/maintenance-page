<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@font-face {
  font-family: 'Ostritch Sans Heavy';
  src: url("<?php echo esc_url( get_template_directory_uri() . '/assets/maintenance/ostrichsans-heavy.otf' ); ?>");
  font-style: normal;
  font-weight: 400;
}
@font-face {
  font-family: 'Office Code Pro Light';
  src: url("<?php echo esc_url( get_template_directory_uri() . '/assets/maintenance/officecodepro-light.otf' ); ?>");
  font-style: normal;
  font-weight: 400;
}
body {
  background-color: black;
  font-family: 'Office Code Pro Light', monospace;
  font-size: 1em;
  color: whitesmoke;
  text-align: center;

}
h1 {
  font-family: 'Ostritch Sans Heavy', sans-serif;
  font-size: 4em;
  color: white;
  margin-bottom: .5em;
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  max-width: 90%
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: dimgray;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  text-align: left;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>
  <img class="center" src="<?php echo esc_url( get_template_directory_uri() . '/assets/maintenance/giphy.webp' ); ?>">
  <h1>Down for scheduled maintenance right meow.</h1>
  <p style="margin-bottom: 3em;">Sites remain active, but logins are disabled.</p>
  <p>Have a Domain name on OpenCUNY? You may need to take action.</p>
  <!-- Trigger/Open The Modal -->
<button id="myBtn">Find out more</button>

<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
     <p>OpenCUNY is changing servers and if you have a custom domain, you’ll need to update the name server settings to keep your site accesible.</p>
     <p>Here are the steps you need to follow:</p>
     <ol>
      <li><strong>Log into your domain registrar</strong> (e.g., GoDaddy, Domain.com);</li>
      <li><strong>Navigate to NAME SERVER settings</strong>(it may be under Advanced DNS settings);</li>
      <li><strong>Change name server settings</strong>. Replace ns1.opencuny.org and ns2.opencuny.org with ns1.reclaimhosting.com and ns2.reclaimhosting.com</li>
      <li><strong>Confirm that the changes have been saved</strong>.</li>
      <li><strong>Test your site.</strong> Changes usually take effect quickly, but may take up to 24 hours to propagate globally.</li>
    </ol>
    <p>Email info@opencuny.org if you need assistance.</p>
  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>