<!-- good_view.php -->
<?php include 'header.php'; ?>
  <!--Main layout-->
  <main class="mt-5 pt-4" style="flex: auto">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <img src="img/valenki/men.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

            <div class="mb-3">
              <a href="">
                <span class="badge blue mr-1"><?php echo $good['category_name']; ?></span>
              </a>
            </div>

            <p class="lead">
              <span class="mr-1">
                <del><?php echo $good['price']+1000; ?> р.</del>
              </span>
              <span><?php echo $good['price']; ?> р.</span>
            </p>

            <p class="lead font-weight-bold"><?php echo $good['name']; ?></p>

            <p>
              <?php echo $good['description']; ?>
              
            </p>

            <form class="d-flex justify-content-left">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px">
              <button class="btn btn-primary btn-md my-0 p" type="submit">Добавить в корзину
                <i class="fa fa-shopping-cart ml-1"></i>
              </button>

            </form>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
 
    </div>
  </main>
  <!--Main layout-->

<?php include 'footer.php'; ?>