<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/styles.css" rel="stylesheet">
  <title>JeremyRo's Portal Page</title>
</head>
<body>
<div id="wrapper">
  <nav>
    <ul>
      <li><a href="./website/daily.php">Switch</a></li>
      <li><a href="./website/adder.php">Troubleshoot</a></li>
      <li><a href="./website/calculator.php">Calculator</a></li>
      <li><a href="">Email</a></li>
      <li><a href="">Database</a></li>
      <li><a href="">Gallery</a></li>
    </ul>
  </nav>

  <div id="content-wrapper">
    <main>
      <h2>Jeremy's Portal Page</h2>
      <div>
        <!-- need to play some games to get these side by side -->
        <h3>IT261 Winter 2022</h3>
        <img id="profile-img" src="images/jeremy-and-o.jpg" alt="Jeremy's profile picture">
      </div>
      <h3>About Me</h3>
      <div>
        <p>
          I am father, husband, and personal concierge for my wacky standard poodle mix. I have been working in science and technology for quite awhile, and I want to knock off some of the rust in web development. I am studying modern web technologies in the Seattle Central IT program.
        </p>
      </div>
      <h2>MAMP Installation</h2>
      <div>
        <img class="mamp-image" alt="MAMP install" src="images/mamp-install.png">
      </div>
      <h4>Custom MAMP root folder:</h4>
      <p>
        I installed MAMP locally on my PC, and I updated the preferences so that the 'document root' is in my local GitHub repository root (not 'htaccess').
      </p>
      <div>
        <img class="mamp-image" alt="MAMP directory" src="images/mamp-directory-250.png">
      </div>
      <h4>Verify MAMP Errors work:</h4>
      <div>
        <img class="mamp-image" alt="PHP error" src="images/php-error.png">
      </div>
    </main>

    <aside>
      <h3>Weekly Assignments</h3>
      <h4>Week2</h4>
      <ul>
        <li><a href="./weeks/week2/currency-class.php">Currency</a></li>
        <li><a href="./weeks/week2/currency.php">Currency (modified)</a></li>
        <li><a href="./weeks/week2/currency-logic.php">Currency Logic</a></li>
        <li><a href="./weeks/week2/heredoc.php">CurrencyLogic</a></li>
        <li><a href="./weeks/week2/var.php">Var</a></li>
      </ul>
      <h4>Week3</h4>
      <ul>
        <li><a href="./weeks/week3/arrays.php">Arrays</a></li>
        <li><a href="./weeks/week3/arrays-for-nav.php">Arrays (for Nav)</a></li>
        <li><a href="./weeks/week3/date.php">Date</a></li>
        <li><a href="./weeks/week3/for-loop.php">For-Loop</a></li>
        <li><a href="./weeks/week3/if-else.php">If-Else</a></li>
        <li><a href="./weeks/week3/switch.php">Switch</a></li>
      </ul>
      <h4>Week4</h4>
      <ul>
        <li><a href="./weeks/week4/form1.php">Form 1</a></li>
        <li><a href="./weeks/week4/form2.php">Form 2</a></li>
        <li><a href="./weeks/week4/form3.php">Form 3</a></li>
        <li><a href="./weeks/week4/variable-scope.php">Variable Scope</a></li>
      </ul>
      <h4>Week5</h4>
      <ul>
        <li><a href="./weeks/week5/currency.php">Currency</a></li>
        <li><a href="./weeks/week5/currency2.php">Currency2</a></li>
        <li><a href="./weeks/week5/null.php">Null</a></li>
      </ul>
      <h4>Week6</h4>
      <ul>
        <li><a href="./weeks/week6/form.php">Form</a></li>
        <li><a href="./weeks/week6/form2.php">Form2</a></li>
        <li><a href="./weeks/week6/form3.php">Form3</a></li>
        <li><a href="./weeks/week6/functions.php">Functions & Implode</a></li>
      </ul>
      <h4>Week7</h4>
      <ul>
        <li><a href="./weeks/week7/form3.php">Form3+</a></li>
        <li><a href="./weeks/week7/random.php">Random</a></li>
        <li><a href="./weeks/week7/strings.php">Strings</a></li>
        <li><a href="./weeks/week7/pictures.php">Pictures</a></li>
      </ul>
      <h4>Week8</h4>
      <ul>
        <li>Placeholder</li>
      </ul>
    </aside>
  </div> <!-- end content-wrapper -->

  <div id="footer-clear"></div>
  <footer>
    <div id="inner-footer">
      <ul>
        <li>Copyright &copy; 2022</li>
        <li>All Rights Reserved</li>
        <li><a href="./website/index.php">Web Design By Me</a></li>
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
</div> <!-- end wrapper -->
</body>
</html>