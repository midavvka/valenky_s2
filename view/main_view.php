<!-- main_view.php -->
<?php include 'header.php'; ?>
  <!--Main layout-->
  <main>
    <div class="container" style="margin-top: 100px;">

      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

        <!-- Navbar brand -->
        <span class="navbar-brand">Категории валенок:</span>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

          <!-- Links -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Классические
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Мужские</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Женские</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Детские</a>
            </li>

          </ul>
          <!-- Links -->

          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Search">
            </div>
          </form>
        </div>
        <!-- Collapsible content -->

      </nav>
      <!--/.Navbar-->

      <!--Section: Products v.3-->
      <section class="text-center mb-4">

        <!--Grid row-->
        <div class="row wow fadeIn">

		<?php 
		foreach ($goods as $good) {
			include 'card.php';
		}
		 ?>
        
        </div>
        <!--Grid row-->

      </section>
      <!--Section: Products v.3-->

     </div>
  </main>
  <!--Main layout-->

<?php include 'footer.php'; ?>