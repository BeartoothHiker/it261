<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>

  <legend>Contact JeremyRo</legend>

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

  <label>Gender</label>
  <ul>
    <li>
      <input type="radio" name="gender" value="female" <?php
        if (isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked = "checked"'; ?>>Female
    </li>
    <li>
      <input type="radio" name="gender" value="male" <?php
        if (isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked = "checked"'; ?>>Male
    </li>
    <li>
      <input type="radio" name="gender" value="neither" <?php
        if (isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked= "checked"'; ?>>Neither
    </li>
  </ul>
  <span class="error"><?= $gender_err ?></span>

  <label>Phone</label>
  <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php
    if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>"><span class="error"><?= $phone_err ?></span>

  <label>Favorite Wines</label>
  <ul>
    <li>
      <!-- notice that the 'name="wines[]"' has array syntax -->
      <input type="checkbox" name="wines[]" value="cab" <?php
        if (isset($_POST['wines']) && in_array('cab', $wines)) echo 'checked = "checked"'; ?>>Cabernet
    </li>
    <li>
      <input type="checkbox" name="wines[]" value="merlot" <?php
        if (isset($_POST['wines']) && in_array('merlot', $wines)) echo 'checked = "checked" '; ?>>Merlot
    </li>
    <li>
      <input type="checkbox" name="wines[]" value="syrah" <?php 
        if (isset($_POST['wines']) && in_array('syrah', $wines)) echo 'checked = "checked" '; ?>>Syrah
    </li>
    <li>
      <input type="checkbox" name="wines[]" value="malbec" <?php
        if (isset($_POST['wines']) && in_array('malbec', $wines)) echo 'checked = "checked" '; ?>>Malbec
    </li>
  </ul>
  <span class="error"><?= $wines_err ?></span>

  <label>Region</label>
  <select name="regions">
    <option value="" NULL <?php 
      if (isset($_POST['regions']) && $_POST['regions'] == NULL) echo 'selected = "unselected" '; ?>>Select one</option>
    <option value="nw" <?php
      if (isset($_POST['regions']) && $_POST['regions'] == 'nw') echo 'selected = "selected" '; ?>>Northwest</option>
    <option value="sw" <?php 
      if (isset($_POST['regions']) && $_POST['regions'] == 'sw') echo 'selected = "selected" '; ?>>Southwest</option>
    <option value="mw" <?php 
      if (isset($_POST['regions']) && $_POST['regions'] == 'mw') echo 'selected = "selected" '; ?>>Midwest</option>
    <option value="se" <?php 
      if (isset($_POST['regions']) && $_POST['regions'] == 'se') echo 'selected = "selected" '; ?>>Southeast</option>
    <option value="ne" <?php
      if (isset($_POST['regions']) && $_POST['regions'] == 'ne') echo 'selected = "selected" '; ?>>Northeast</option>
  </select>
  <span class="error"><?= $regions_err ?></span>

  <label>Comments</label>
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
