<?php if(isset($_SESSION['is_logged_in'])) : ?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Adding New Time</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Table Number</label>
    		<input type="text" name="table_id" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Times</label>
    		<textarea name="tim" class="form-control"></textarea>
    	</div>
    	
    	
        <div class="form-group">
            <label>Select</label>
            <textarea name="reserv"  class="form-control">

            </textarea>

        </div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Add" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>time">Cancel</a>
    </form>
  </div>
</div>
 <?php endif ?>