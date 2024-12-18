<?php

use WorkScope\Inc\Utils;
?>

<label class="checkbox">
  <input type="checkbox" name="<?php echo $name; ?>" value="1" autocomplete="off" class="visually-hidden" <?php echo Utils::get_escape_el($data, $name) ? 'checked' : ''; ?>>
  <span class="icon"></span>
  <span class="text"><?php echo $text; ?></span>
</label>