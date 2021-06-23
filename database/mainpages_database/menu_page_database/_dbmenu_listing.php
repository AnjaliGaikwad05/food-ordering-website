<?php
include '../database/_dbconnect.php';
/*------------------------selects whole data of menu and displays it in the card format----------------------------------- */
$sql = "select * from menu_item";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
  echo '
    <div class="container-fluid maincontainer center col-2 mx-4 ml-4 px-3" style="margin-left:10vh;">
      <div class="thecard ">
          <!---------------front part of menu card----------------------------->
          <div class="thefront container shadow-lg rounded">
            <img class="rounded" src="https://source.unsplash.com/250x280/?' . $row['item_name'] . '" alt="">
            <h5 class="menu-name">' . $row['item_name'] . '</h5>
          </div>
          <!--------x-------front part of menu card----------x------------------->
          <!---------------back part of menu card----------------------------->

          <div class="container theback my-3 py-4">
            <form action="../main/menu.php" method="post">
                    <input type="hidden" value=' . $row['id'] . ' name="itemid">
                    <h4 class="text-light">' . $row['item_name'] . '</h4>
                    <h5 class="text-info">Price per Rs. ' . $row['price'] . '</h5> <br> 
                    <strong>
                    <label for="quantity" class="form-label text-light">Enter quantity</label>
                    <input type="number" name="quantity" />
                    <div >
                      <button type="submit" class="btn btn-primary my-3">Place Order</button>
                    </div>
                    </strong>
            </form>
          </div>
          <!--------x-------back part of menu card--------x--------------------->

      </div>
    </div>  
';
}
