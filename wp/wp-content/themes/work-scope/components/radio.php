<?php

use WorkScope\Inc\Utils;
?>

<label class="radio">
  <input type="radio" name="<?php echo $name ?>" value="<?php echo $value ?>" class="visually-hidden" <?php echo Utils::get_escape_el($data, $name) === $value ? "checked" : ""; ?>>
  <span class="icon"></span>
  <span class="text"><?php echo $value ?></span>
</label>