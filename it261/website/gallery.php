<?php
include('config.php');
include('includes/header.php');
?>
  <!-- Space after header  -->
  <div id="wrapper-buffer"></div>

  <div id="wrapper">
    <h2><?php echo $headline; ?></h2>
    <p>A Seattle Public Library card provides benefits that may surprise you.  You can access online online publications and education/training services. Additionally it access free music and video streaming services, and business/financial research resources.  The SPL provides you free admission to participating Seattle museums. Enjoy exhibits on aviation, nature, science, and industry—all for free! Have a favorite museum you’d like to revisit? You can reserve one pass to a museum once every 30 days from the date of your visit.</p>
    <table>

<?php
foreach($services as $name => $list) :
  //Notice : (colon) which is used with 'endforeach' below

  $description = $list['description'];
  $logo_path = $list['logo'];
  $image_path = $list['image'];

  // Formatting: replace '\n' with '<br>' tag
  $description = str_replace('\n', '<br>', $description);
?>
      <tr>
        <td><div class="list-key">
          <h3><?=$name?></h3><div><img class="list-logo" src="<?=$logo_path?>" alt="<?=$name?> logo"></div>
        </div></td>
        <td><?=$description?></td>
        <td><img class="list-image" src="<?=$image_path?>" alt="<?=$name?> image"></td>
      </tr>
<?php endforeach; ?>

    </table>

  </div> <!-- end wrapper -->

  <div id="footer-clear"></div>

<?php
include('includes/footer.php');