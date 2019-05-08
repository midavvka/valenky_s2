<!-- card.php -->
<!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="img/valenki/men.jpg" class="card-img-top" alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                  <h5>
                      <?php echo $good['category_name']; ?>
                  </h5>
                </a>
                <h5>
                  <strong>
                    <a href="index.php?model=good&id=<?php echo $good['id']; ?>" class="dark-grey-text">
                      <?php echo $good['name']; ?>
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>
                    <?php echo $good['price']; ?> р.</strong>
                </h4>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->