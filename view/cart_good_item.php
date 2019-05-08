<!-- cart_good_item.php -->
<li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">
           <?php echo $cart_good['name']; ?>
                </h6>
                <input name="count_<?php echo $cart_good['id']; ?>" type="number" value="<?php 
                echo $_SESSION['cart'][$cart_good['id']]; ?>" aria-label="Search" class="form-control" style="width: 100px">
                <small class="text-muted">
<?php echo $cart_good['description']; ?>
                </small>
              </div>
              <span class="text-muted">
<?php echo $cart_good['price']; ?>
              </span>
</li>