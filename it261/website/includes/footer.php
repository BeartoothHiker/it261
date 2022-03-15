  <footer class="header-footer">
    <div id="inner-footer">
      <ul>
        <li>Copyright &copy;
          <?php echo date('Y'); ?>
        </li>
        <li>All Rights Reserved</li>
        <li><a href="../index.php">Web Design By CodeWithJeremy</a></li>
        <li><a id="html-validator" href="#">HTML Validation</a></li>
        <li><a id="css-validator" href="#">CSS Validation</a></li>
        <li><a href="https://github.com/BeartoothHiker/it261">GitHub</a></li>
      </ul>
    </div> <!-- end inner-footer-->
  </footer> <!-- end footer -->

  <script>
    document.getElementById("html-validator").setAttribute("href", "https://validator.w3.org/nu/?doc=" + location.href);
    document.getElementById("css-validator").setAttribute("href", "https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
  </script>

</body>
</html>