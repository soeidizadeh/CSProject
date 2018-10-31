
<header class="masthead">
  <div class="container d-flex h-100 align-items-center">
    <div class="mx-auto text-center">
      <h1 class="mx-auto my-0 text-uppercase">SHIFT</h1>

      <h2 class="text-white-50 mx-auto mt-2 mb-5">Making your transition seamless, painless, and educational. </h2>

      <!-- Search Box -->
      <form class="searchBox" action="index.html" method="post">
        <input type="text" name="searchInput" value="Search here...">
        <input type="button" name="myButton" value="Go!">

      </form>

      <!-- The below is the javaScript that makes the botton click work properly.-->
      <script type="text/javascript">
      /* When the user clicks on the button,
      toggle between hiding and showing the dropdown content */
      function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
      }
      // Close the dropdown menu if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
      </script>
      <!-- The sentence that seperates the search bar from the boxes-->
        <h5 class="text-white-50 mx-auto mt-2 mb-5">Or ... </h5>
      <!-- The three boxes in the homepage!-->
      <div class="row">
      <!-- Change the class to a bigger repsonsive class using Bootstrap Documentation -->
      <div class="col-md-4 mb-3 mb-md-0">
        <div class="card py-4 h-100">
          <div class="card-body text-center">
            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
            <h4 class="text-uppercase m-0">iMessages</h4>
            <hr class="my-4">
            <div class="small text-black-50">All about those blue and white boxes. </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3 mb-md-0">
        <div class="card py-4 h-100">
          <div class="card-body text-center">
          <!-- YELLOW!-->
            <div class="dropdown" class="col-md-4 mb-3 mb-md-0" class="card-body text-center">
              <button onclick="myFunction()" class="dropbtn">Select!</button>
              <div id="myDropdown" class="dropdown-content">
                <a href="iMessages.html">iMessages</a>
                <a href="Settings.html">Settings</a>
                <a href="Photos.html">Photos</a>
              </div>

            </div>
            <i class="fas fa-mobile-alt text-primary mb-2"></i>
            <h4 class="text-uppercase m-0"> A TOPIC </h4>
            <hr class="my-4">
            <div class="small text-black-50"> You want to learn more about.</div>
          </div>
        </div>
      </div>
<!-- End of box -->

    </div>

  </div>
</header>
