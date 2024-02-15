<!DOCTYPE html>
<html>

<head>
   <title>Live Search using AJAX</title>
   <!-- Including jQuery is required. -->
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   <!-- Including our scripting file. -->
   <script type="text/javascript" src="script.js"></script>
   <!-- Including CSS file. -->
   <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

   <!-- Search box. -->
   <div class="search-wrapper">
   <input class="search-input" autocomplete="false" name="hidden" type="text" id="search" placeholder="Search" />
   <br>
   </br>
   </div>

   <div class="button-wrapper">
      <button class="btn" id="prev-btn">Previous</button>
      <button class="btn" id="next-btn" data-page="1">Next</button>
   </div>



   <!-- Suggestions will be displayed in below div. -->
   <div id="display" class="display">

   </div>

</body>

</html>

