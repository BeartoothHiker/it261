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

$sql = 'SELECT * FROM games WHERE game_id = '.$id;

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
or die (myError(__FILE__, __LINE__, mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)
or die (myError (__FILE__, __LINE__, mysqli_error($iconn)));

if (mysqli_num_rows($result) > 0) {

  // Note: There should only be one row for this query
  while ($row = mysqli_fetch_assoc($result)) {

    $game_name = stripslashes($row['name']);
    $game_type = stripslashes($row['type']);
    $game_min_age = stripslashes($row['suggested_min_age']);
    $game_description = stripslashes($row['description']);
    $game_picture = stripslashes($row['image_name']);

  } // closing while

} else { 
  header('Location: project.php');
  exit;
}  // closing: if( mysqli_num_rows() )

include('./includes/header.php');

?>
  <!-- Space after header  -->
  <div id="wrapper-buffer"></div>

  <div id="wrapper">
    <main>
      <h1><?= $game_name ?> (details)</h1>
<?php 
echo '
    <ul>
     <li>Category: ' . $game_type . '</li>
     <li>Suggested age: ' . $game_min_age . '</li>
    </ul>
    <h2>Details</h2>
    <p>' . $game_description . '</p>
';
?>
    <p><a href="project.php">Return to the list of Games</a></p>
  </main> 

  <aside>
    <figure>
      <img src="./images/project/<?= $game_picture ?>" alt="<?= $game_name ?>">
      <figcaption><?=$game_name?></figcaption>
    </figure>
  </aside>

  </div> <!-- end wrapper -->

  <div id="footer-clear"></div>

<?php
// Release result/connection and swallow errors (@)
@mysqli_free_result($result);
@mysqli_close($iConn);

include('./includes/footer.php');