<?php if(isset($_SESSION['is_logged_in'])) : ?>
<div class="row">
                    <div class="col-lg-10">
                    	
                        <h2>Lists of Customers</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>phon</th>
                                        <th>Saloon Name</th>
                                        <th>Time</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>

						<?php foreach($viewmodel as $item) : ?>
                                    <tr>
                                        <td><?php echo $item['name']; ?></td>
                                        <td><?php echo $item['phone']; ?></td>
                                        <td><?php echo $item['sal_id']; ?></td>

                                        
                                        <td><a href="<?php echo ROOT_URL; ?>time" title="detail"><?php echo $item['table_id']; ?></a></td>
                                         <td><a class="delete btn btn-primary" href=''>
                                            <span class="glyphicon glyphicon-edit"></span>Edit</a></td>
                                            <td><a class="delete btn btn-danger" href='<?php echo ROOT_URL . 'reservations/delete/'.$item['rsv_id']; ?>'>
                                            <span class="glyphicon glyphicon-trash"></span>Delete</a></td>
                                      
                                        
                                    </tr>
                             <?php endforeach; ?>     
                                </tbody>
                            </table>
                        </div>
                    </div>
                 <?php endif ?>