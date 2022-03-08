<?php
!include('./config.php');
!include('./includes/header.php');
?>
<main>
  <h1>Welcome to my People Page</h1>

<?php
  $sql = 'SELECT * FROM people';
  $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,  DB_NAME)
  or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

  $result = mysqli_query($iConn, $sql)
  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

  if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

      // Output results.
echo '
<h2>Information About ' . $row['first_name'] . '</h2>
<ul>
<li><b>First Name:</b>' . $row['first_name'] .'</li>
<li><b>Last Name:</b>' . $row['last_name'] .'</li>
<li><b>Email:</b>' . $row['email'] .'</li>
<p>Link for more information about <a href="./people-view.php?id='. $row['people_id'] . '">' . $row['first_name'] . ' ' . $row['last_name'] . '</a></p>
</ul>
';
    }
  }
?>
</main>

<aside>
  <h3>This is my aside that will be displaying random images!</h3>
</aside>

<?php
// Release result/connection and swallow errors (@)
@mysqli_free_result($result);
@mysqli_close($iConn);

include('./includes/footer.php');