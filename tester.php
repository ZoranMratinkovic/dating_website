<!DOCTYPE html>
<html>
<head>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <script src="assets/fancybox/jquery.easing-1.3.pack.js"></script>
  <script src="assets/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
  <script src="assets/webcam/webcam.js"></script>
  <script src="assets/js/script.js"></script>

  <link rel="stylesheet" type="text/css" href="assets/css/styles.css" />

</head>
<body>

<h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div id="camera">
  	<span class="tooltip"></span>
  	<span class="camTop"></span>

      <div id="screen"></div>
      <div id="buttons">
      	<div class="buttonPane">
          	<a id="shootButton" href="" class="blueButton">Shoot!</a>
          </div>
          <div class="buttonPane hidden">
          	<a id="cancelButton" href="" class="blueButton">Cancel</a> <a id="uploadButton" href="" class="greenButton">Upload!</a>
          </div>
      </div>
      <span class="close">&times;</span>

      <span class="settings"></span>
  </div>


</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

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
