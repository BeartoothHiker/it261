<?php
include('config.php');
include('includes/header.php');
?>
  <!-- Space after header  -->
  <div id="wrapper-buffer"></div>

  <div id="wrapper">

    <main>
      <h2><?php echo $headline; ?></h2>
<?php include('./includes/contact-form.php'); ?>

    </main> <!-- end main-->
    <aside>
    </aside>

  </div> <!-- end wrapper -->
  <div id="footer-clear"></div>

<?php
include('includes/footer.php');
