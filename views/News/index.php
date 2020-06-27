
<div class="row">
                    <div class="col-lg-10">
                    	<?php if(isset($_SESSION['is_logged_in'])) : ?>
                        <h2>Lists of Customers</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>phon</th>
                                        <th>Saloon Name</th>
                                       
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>

						<?php foreach($viewmodel as $item) : ?>
                                    <tr>
                                        <td><?php echo $item['ads_title']; ?></td>
                                        <td><?php echo $item['ads_desc']; ?></td>
                                        <td><?php echo $item['ads_url']; ?></td>
                                       
                                         <td><a class="delete btn btn-primary" href="<?php echo ROOT_PATH; ?>reservation/edit?op=delete&id=<?php echo $item['rsv_id'] ?>">
                                            <span class="glyphicon glyphicon-edit"></span>Edit</a></td>
                                            <td><a class="delete btn btn-danger" href="<?php echo ROOT_URL; ?>reservation/delete?rsv_id=<?php  echo $item['rsv_id'];  ?>">
                                            <span class="glyphicon glyphicon-trash"></span>Delete</a></td>
                                      
                                        
                                    </tr>
                             <?php endforeach; ?>     
                                </tbody>
                            </table>
                        </div>
                    </div>
                 <?php endif ?>