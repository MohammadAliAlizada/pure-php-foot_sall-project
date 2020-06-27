
<div class="row">
                    <div class="col-lg-10">
                    	
                        <h2>Saloons</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Saloon Name</th>
                                        
                                        
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>

						<?php foreach($viewmodel as $item) : ?>
                                    <tr>
                                        
                                        <td><a href='<?php echo ROOT_URL?>saloon/list/<?php echo $item['sal_id'] ?>'>                                            <?php echo $item['saloon_name']; ?>
                                            
                                        </a></td>
                                        
                                        
                                    </tr>
                             <?php endforeach; ?>     
                                </tbody>
                            </table>
                        </div>
                    </div>
               