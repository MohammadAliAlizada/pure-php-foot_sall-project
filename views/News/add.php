<?php if(isset($_SESSION['is_logged_in'])) : ?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Adding News or Advertisment</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Title</label>
    		<input type="text" name="ads_title" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Descritption</label>
    		<textarea name="ads_desc" class="form-control"></textarea>
    	</div>
    	<div class="form-group">
    		<label>Add Url</label>
    		<input type="text"  name="ads_url" name="reserve" class="form-control" />
    	</div>
            <div class="form-group">
            <label>Updload Image</label>
            <input type="file"  name="ads_pic"  class="form-control" />
        </div>
        <div class="form-group">
            <label>Start Date</label>
            <input type="date" name="ads_date">
        </div>
        <div class="form-group">
            <label>Expire Date</label>
            <input type="date" name="ads_expire">
        </div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>news">Cancel</a>
    </form>
  </div>
</div>
 <?php endif ?>