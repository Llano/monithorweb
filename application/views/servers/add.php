<h1>Add server</h1>
<?php echo form_open(); ?>
  <div class="form-group">
    <label for="inputServerName">Servername</label>
    <input type="text" name="servername" class="form-control" id="inputServerName" placeholder="Servername">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
<?php echo form_close() ?>