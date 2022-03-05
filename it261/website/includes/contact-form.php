<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>

  <legend>Contact CodeWithJeremy</legend>

  <label>First Name</label>
  <input type="text" name="first_name" value="<?php
    if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
  <span class="error"><?= $first_name_err ?></span>
  <!-- NOTICE: PHP short tag above (= instead of php?), also doesn't need trailing semicolon -->

  <label>Last Name</label>
  <input type="text" name="last_name" value="<?php
    if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
  <span class="error"><?= $last_name_err ?></span>

  <label>Email</label>
  <input type="email" name="email" value="<?php
    if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
  <span class="error"><?= $email_err ?></span>

  <label>Phone</label>
  <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php
    if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>"><span class="error"><?= $phone_err ?></span>

<label>Reason for contacting CodeWithJeremy:</label>
  <select name="contact-reason">
    <option value="" NULL <?php 
      if (isset($_POST['contact-reason']) && $_POST['contact-reason'] == NULL) echo 'selected = "unselected" '; ?>>Select one</option>
    <option value="create" <?php
      if (isset($_POST['contact-reason']) && $_POST['contact-reason'] == 'create') echo 'selected = "selected" '; ?>>New web application project</option>
    <option value="extend" <?php 
      if (isset($_POST['contact-reason']) && $_POST['contact-reason'] == 'extend') echo 'selected = "selected" '; ?>>Extend an existing web application</option>
    <option value="tune" <?php 
      if (isset($_POST['contact-reason']) && $_POST['contact-reason'] == 'tune') echo 'selected = "selected" '; ?>>Improve the performance of my web applciation</option>
    <option value="other" <?php 
      if (isset($_POST['contact-reason']) && $_POST['contact-reason'] == 'other') echo 'selected = "selected" '; ?>>It's more complex, let's talk!</option>
  </select>
  <span class="error"><?= $contact_reason_err ?></span>

  <label>Select the features you you want help with:</label>
  <ul>
    <li>
      <!-- notice that the 'name="features[]"' has array syntax -->
      <input type="checkbox" name="features[]" value="informational" <?php
        if (isset($_POST['features']) && in_array('informational', $features)) echo 'checked = "checked"'; ?>>Informational Website
    </li>
    <li>
      <input type="checkbox" name="features[]" value="store" <?php
        if (isset($_POST['features']) && in_array('store', $features)) echo 'checked = "checked" '; ?>>Online Store
    </li>
    <li>
      <input type="checkbox" name="features[]" value="mobile" <?php 
        if (isset($_POST['features']) && in_array('mobile', $features)) echo 'checked = "checked" '; ?>>Mobile
    </li>
  </ul>
  <span class="error"><?= $features_err ?></span>

  <label>Comments:</label>
  <textarea name="comments"><?php
    if (isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>
  <span class="error"><?= $comments_err ?></span>

  <label>Privacy</label>
  <ul>
    <li>
      <input type="radio" name="privacy" value="yes" <?php 
        if (isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked = "checked" '; ?>>You must agree!
    </li>
  </ul>
  <span class="error"><?= $privacy_err ?></span>

  <input type="submit" value="Send it!">
  <p class="reset"><a href="">Reset!</a></p>

</fieldset>
</form>
