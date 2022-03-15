<?php
include('config.php');
include('includes/header.php');
?>
  <!-- Space after header  -->
  <div id="wrapper-buffer"></div>

  <div id="wrapper">
    <!-- <div id="hero">
    </div> --> <!-- end hero  -->

    <main>
      <?php echo "<h2>$headline</h2>"; ?>
      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
    </main> <!-- end main-->

    <aside>
      <?php echo random_images($photos_formation); ?>
    </aside> <!-- end aside -->
  </div> <!-- end wrapper -->
  <div id="footer-clear"></div>

<?php
include('includes/footer.php');
?>
