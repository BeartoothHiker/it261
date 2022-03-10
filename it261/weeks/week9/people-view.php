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

  // Note: There should only be one row for this query
  while ($row = mysqli_fetch_assoc($result)) {

    $first_name = stripslashes($row['first_name']);
    $last_name = stripslashes($row['last_name']);
    $email = stripslashes($row['email']);
    $birthdate = stripslashes($row['birthdate']);
    
    $occupation = stripslashes($row['occupation']);
    $details = stripslashes($row['details']);
    $feedback = '';

  } // closing while

} else { 
  header('Location: people.php');
  exit;
}  // closing: if( mysqli_num_rows() )

include('./includes/header.php');

?>
<main>
  <h1>Welcome to our People's View Page </h1>
  <h2>Welcome to <?= $first_name ?>'s Page</h2>

  <ul>
<?php 
echo '
    <li><b>First Name:</b>' . $first_name . '</li>
    <li><b>Last Name:</b>' . $last_name . '</li>
    <li><b>Email:</b>' . $email . '</li>
    <li><b>Birthdate:</b>' . $birthdate . '</li>
    <li><b>Occupation:</b>' . $occupation . '</li>
    <li>
    <p>' . $details . '</p>
    </li>
';
?>
  </ul>
  <p><a href="people.php">Return to the people.php Page</a></p>
</main> 

<aside>
  <h3>Person's Image Here</h3>
  <figure>
    <img src="./images/people<?= $id ?>.jpg" alt="<?= $first_name ?>">
    <figcaption><?php echo ' '.$first_name.' '.$last_name.', ('.$birthdate. ') '. $occupation. ' ' ;?></figcaption>
  </figure>
</aside>

<?php
// Release result/connection and swallow errors (@)
@mysqli_free_result($result);
@mysqli_close($iConn);

include('./includes/footer.php');