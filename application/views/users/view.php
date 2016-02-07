<div class="col-md-4">
<?php

   echo form_open();
   echo '<div class="form-group">';
      echo form_input($email);
   echo '</div>';
   echo '<div class="form-group">';
      echo form_input(array('name' => 'password', 'class' => 'form-control', 'placeholder' => 'New password'));
   echo '</div>';
   echo '<div class="form-group">';
      echo form_input(array('name' => 'new_password', 'class' => 'form-control', 'placeholder' => 'Confirm password'));

   echo '</div>';

   echo form_close();


?>
</div>
