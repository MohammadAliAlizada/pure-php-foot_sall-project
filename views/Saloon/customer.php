<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Please Fill Following Form</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" />
        </div>
        <div class="form-group">
            <label>phone</label>
            <textarea name="phone" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Your Saloon Id</label>
            <input type="text" value="<?php echo $_SESSION['user_data']['sal_id']; ?>" name="sal_id" name="reserve" class="form-control" />
        
        <div class="form-group">
            <label>Your Time Table Id</label>
            <textarea name="table_id" class="form-control"></textarea>
        </div>
        <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>reservation">Cancel</a>
    </form>
  </div>
</div>
 