<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body> 
 <!-- <button> click here
    <select id="myDropdown"> click here
      <option value="Option 1">Option 1</option>
      <option value="Option 2">Option 2</option>
      <option value="Option 3">Option 3</option>
    </select>
 </button>   

<style>
   /* Hide the drop-down content by default */
#myDropdown {
  display: none;
}

/* Show the drop-down content when the user clicks on the drop-down */
#myDropdown.show {
  display: block;
}

</style>

<script>
   // Get the drop-down element
var dropdown = document.getElementById("myDropdown");

// Add a click event listener to the drop-down
dropdown.addEventListener("click", function() {

  // Toggle the "show" class on the drop-down content when the user clicks on it
  if (dropdown.classList.contains("show")) {
    dropdown.classList.remove("show");
  } else {
    dropdown.classList.add("show");
  }
});

// Close the drop-down menu if the user clicks outside of it
window.addEventListener("click", function(event) {
  if (!event.target.matches("#myDropdown")) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
});

</script> -->


<button onclick="dropdown()">Click me</button>
<div id="myDropdown">
  <a href="#">Option 1</a>
  <a href="#">Option 2</a>
  <a href="#">Option 3</a>
</div>

<style>
   #myDropdown {
  display: none;
  position: absolute;
  z-index: 1;
}
#myDropdown a {
  display: block;
  background-color: #f1f1f1;
  color: #000;
  padding: 12px 16px;
  text-decoration: none;
}
#myDropdown a:hover {
  background-color: #ddd;
}

</style>

<script>
   function dropdown() {
  var dropdownMenu = document.getElementById("myDropdown");
  if (dropdownMenu.style.display === "block") {
    dropdownMenu.style.display = "none";
  } else {
    dropdownMenu.style.display = "block";
  }
}

</script>


</body>
</html>