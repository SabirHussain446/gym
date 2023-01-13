<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Filter Anything</h2>
  <p>Type something in the input field to search for a specific text inside the div element with id="myDIV":</p>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <div id="myDIV">
    <p>I am a paragraph.</p>
    <div>I am a div element inside div.</div>
    <button class="btn">I am a button</button>
    <button class="btn btn-info">Another button</button>
    <p>Another paragraph.</p>
  </div>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myDIV *").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>
