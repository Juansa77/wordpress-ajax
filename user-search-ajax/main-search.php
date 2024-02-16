<?php
/*
Template Name: User search template
*/
?>


<!DOCTYPE html>
<html>

<head>
   <title>Users search</title>

   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

   <script type="text/javascript" src="script.js"></script>

   <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


   <div class="search-wrapper">
      <input class="search-input" autocomplete="false" name="hidden" type="text" id="search"
         placeholder="Search for users..." />
      <br>
      </br>
   </div>

   <div class="button-wrapper">
      <button class="btn" id="prev-btn">Previous</button>
      <button class="btn" id="next-btn" data-page="1">Next</button>
   </div>




   <div id="display" class="display">

   </div>

</body>

</html>