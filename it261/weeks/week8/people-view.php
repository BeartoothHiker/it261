<?php
include('config.php');

// Require people-id
if(isset($_GET['id'])) {
  $id = (int)$_GET['id'];
} else {
  header('Location: people.php');
  exit;
}

// we have to select from table and make sure that people_id = $id

$sql = 'SELECT * FROM people WHERE people_id = '.$id;

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
or die (myError(__FILE__, __LINE__, mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)
or die (myError (__FILE__, __LINE__, mysqli_error($iconn)));

if (mysqli_num_rows($result) > 0) {

  // Show info

} else { 
  header('Location: people.php');
  exit;
}

include('./includes/header.php');

?>
<main>
  <h1>Welcome to our  People's View Page </h1>

  <ul></ul>

  <p><a href="people.php">Return to the people.php Page</a></p>
</main> 

<aside>
  <h3>Person's Info Here</h3>
</aside>

<?php
// Release result/connection and swallow errors (@)
@mysqli_free_result($result);
@mysqli_close($iConn);

include('./includes/footer.php');