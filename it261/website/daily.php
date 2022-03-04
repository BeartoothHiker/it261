<?php
include('includes/config.php');
include('includes/header.php');
?>

  <div id="wrapper">
    <div class="daily-detail <?php echo strtolower($aircraft_make) ?>">
      <h1><?php echo $today. ' is ' . $aircraft_make . ' Day'; ?></h1>
      <img class="daily-image" <?php echo 'src="' . $aircraft_info['image'] . '" alt="' . $aircraft_info['image-alt'] . '"'; ?> >
      <div class="detail-wrapper">
        <h3 class="daily-image-title"><?php echo $aircraft_info['type']; ?></h3>
        <ul>
          <li>Seats: <?php echo $aircraft_info['seats']; ?></li>
          <li>Cruise Speed: <?php echo $aircraft_info['cruise']; ?></li>
          <li>Fuel Burn: <?php echo $aircraft_info['fuel-burn']; ?></li>
          <li>Description: <?php echo $aircraft_info['description']; ?></li>
        </ul>
        <p class="item-credit"><?php echo $aircraft_info['credit']; ?></p>
      </div> <!-- detail-wrapper  -->
    </div> <!-- end daily-detail -->

    <div class="daily-menu">
      <h3>Want to see the Daily Menu?</h3>
      <ul>

<?php // List of daily links
foreach ($weekly_items as $key => $value) {

  //if ('project.php' == $key) {    // for testing
  $link_styles = 'daily-link';
  if (THIS_PAGE == $key) {
    // Highlight current page
    $link_styles .= ' current';
  }
  echo '<li><a class="'. $link_styles . '" href="./daily.php?today='.$key.'">'.$key.'</a></li>';

} // end foreach
?>  
      </ul> 
    </div> <!-- end daily-menu class -->
  </div> <!-- end wrapper -->

  <div id="footer-clear"></div>

<?php
include('includes/footer.php');
?>
