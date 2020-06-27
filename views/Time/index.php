
<div class="row">
                    <div class="col-lg-10">
                   
                        <h2>Lists of Reserved Times</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Saloon Name</th>
                                        <th>Time</th>
                                        <th>Reserved</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>

						<?php foreach($viewmodel as $item) : ?>
                                    <tr>
                                        <td><?php echo $_SESSION['user_data']['username']; ?></td>
                                        <td><?php echo $item['tim']; ?></td>
                                        <td><a href="<?php echo ROOT_URL; ?>reservations/add/"><?php echo $item['reserv'] ==0 ? 'not reserve' : 'reserved'; ?></td>
</a>
                                         <td><a class="delete btn btn-primary" href='<?php echo ROOT_PATH. 'time/delete/'.$item['id'] ?>'>
                                            <span class="glyphicon glyphicon-edit"></span>Edit</a></td>
                                            <td><a class="delete btn btn-danger" href='<?php echo ROOT_URL?>time/delete/<?php echo $item['table_id'] ?>'>
                                            <span class="glyphicon glyphicon-trash"></span>Delete</a></td>
                                      
                                    </tr>
                             <?php endforeach; ?>     
                                </tbody>
                            </table>
                        </div>
                    </div>
               