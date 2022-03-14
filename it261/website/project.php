<?php
include('config.php');
include('includes/header.php');

$sql = 'SELECT * FROM `games`';
if(isset($_GET['order'])) {
  // Add 'order by' clause based on query string
  $orderBy='';
  $query_mod = $_GET['order'];
  if ($query_mod === 'type') {
    $orderBy = 'ORDER BY `type`';
  }
  if ($query_mod === 'age') {
    $orderBy = ' ORDER BY `suggested_min_age`;';
  }
  $sql .= $orderBy;
}
?>
  <!-- Space after header  -->
  <div id="wrapper-buffer"></div>

  <div id="wrapper">
    <main>
      <h1><?php echo $headline; ?></h1>

      <?php
  $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,  DB_NAME)
  or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

  $result = mysqli_query($iConn, $sql)
  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

  if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

      // Output results.
echo '
<h2>' . $row['name'] . '</h2>
<ul>
<li><b>Game category: </b>' . $row['type'] .'</li>
<li><b>Best for players: </b>' . $row['suggested_min_age'] .'+</li>
<li><b>Blurb: </b>Quick one line description</li>
</ul>
<p>Link for more information about <a href="./project-view.php?id='. $row['game_id'] . '">' . $row['name'] . '</a></p>
';
    }
  }
?>
    </main> <!-- end main-->

    <aside>
      <h3>TODO: Title/description</h3>
      <div class="image-aside">
        <?php echo random_image_tag($game_images, './images/project'); ?>    
      </div>
    </aside>

  </div> <!-- end wrapper -->

  <div id="footer-clear"></div>
<?php
// Release result/connection and swallow errors (@)
@mysqli_free_result($result);
@mysqli_close($iConn);

include('./includes/footer.php');
