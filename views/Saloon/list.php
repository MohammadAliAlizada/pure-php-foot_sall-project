
<div class="row">
                    <div class="col-lg-10">
                   
                        <h2>Lists of Reserved Times</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                       
                                        <th>Time</th>
                                        <th>Reserved</th>
                                        
                                        

                                    </tr>
                                </thead>
                                <tbody>

						<?php foreach($viewmodel as $item) : ?>
                                    <tr>
                                       
                                        <td><?php echo $item['tim']; ?></td>

                                        <td><a href='<?php echo ROOT_PATH?>saloon/reserve/<?php echo $item['table_id'] ?>'><?php echo $item['reserv'] ==0 ? 'not reserve' : 'reserved'; ?></a></td>

                                    </tr>
                             <?php endforeach; ?>     
                                </tbody>
                            </table>
                        </div>
                    </div>
               