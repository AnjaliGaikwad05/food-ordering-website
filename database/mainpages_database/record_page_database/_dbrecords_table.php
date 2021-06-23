<?php
/*--------------------join orders table and menu table to show user orders-----------------------*/
$sql = "Select * from ordertable ot JOIN menu_item mi ON ot.item_id=mi.id WHERE user_id =" . $_SESSION['user_id'];
$result = mysqli_query($conn, $sql);
$sno = 0;
while ($row = mysqli_fetch_assoc($result)) {
  $sno = $sno + 1;
  /*----------------shows users ordered data in table format--------------------------*/
  echo '<tr>
    <th scope="row">' . $sno . '</th>
    <td>' . $row['item_name'] . '</td>
    <td>' . $row['quantity'] . '</td>
    <td> Rs. ' . $row['quantity'] * $row['price'] . '</td>
    <td>' . $row['odate'] . '</td>
  </tr>';
}
