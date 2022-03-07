<?php
include('config.php');
include('includes/header.php');
?>
  <!-- Space after header  -->
  <div id="wrapper-buffer"></div>

  <div id="wrapper">
    <!-- <main> -->
      <h2><?php echo $headline; ?></h2>
      <p>A Seattle Public library card offers a number of benefits you might not expect.  You can access services including online publications and traing services. Additionally it includes free music and vido streaming services, and busuiness and financial research resources.  Your Library helps you get free admission to participating Seattle museums. Enjoy exhibits on aviation, nature, science, and industry—all for free! Have a favorite museum you’d like to revisit? You can reserve one pass to a museum once every 30 days from the date of your visit.</p>
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
          <h3><?=$name?></h3><div><img class="list-logo" src="<?=$logo_path?>"></div>
        </div></td>
        <td><?=$description?></td>
        <td><img class="list-image" src="<?=$image_path?>"></td>
      </tr>
<?php endforeach; ?>

    </table>

    <!-- </main> -->
    <!-- 
    <aside>
      <h3>Additional Info</h3>
      <p>Information about the gallery</p>
    </aside>
    -->
  </div> <!-- end wrapper -->

  <div id="footer-clear"></div>

<?php
include('includes/footer.php');
?>
