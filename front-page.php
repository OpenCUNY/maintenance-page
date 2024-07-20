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
  <h1>OpenCUNY is down for scheduled maintenance right meow.</h1>
  <p style="margin-bottom: 3em;">Sites remain active, but logins are disabled.</p>
  <!-- Trigger/Open The Modal -->
<button id="myBtn">Find out more</button>

<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
     <p><strong>OpenCUNY is moving from <a href="https://www.liquidweb.com">Liquid Web</a> servers to <a href="https://www.reclaimhosting.com/">Reclaim Hosting</a> servers.</strong></p>
     <p>The move consolidates the DGSC website and OpenCUNY on the same server, without changing OpenCUNY's Terms of Participation. In short, you still own you're data and are not subject to the restrictions you'd face on CUNY servers.</p>
     <p>The move also gives OpenCUNY room to grow. On our old sever, it was difficult to add new services and host new tools. We're hoping the increased flexibility of Reclaim Hosting leads to more pilot projects and quicker rollouts.</p> 
     <p>Finally, Reclaim Hosting is run by CUNY alums and the team shares a lot of the same values as OpenCUNY. You can read about their story in this <a href="https://bavatuesdays.com/a-long-short-history-of-reclaim-hosting/">blog post</a>.</p>
     <p>You should not need to make any changes as a result of this move—even if you have a custom domain. However, if you have any problems or have questions, don't hesitate to contact us at info@opencuny.org.</p>
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