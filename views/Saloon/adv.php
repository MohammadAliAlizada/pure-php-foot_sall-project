
<div class="row">
                    <div class="col-lg-10">
                    	
                        <h2>Latast News of the World</h2>
                        <div class="table-responsive">
                           

						<?php foreach($viewmodel as $item) : ?>
                                 
                                       <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s"><?php echo $item['ads_title']; ?></h4>
                              <img width="300" src="../assets/web/images/slider4.jpg">
                              <p><?php echo $item['ads_desc']; ?></p>
                             

                              <div class="contact-info">
                                  <a href="<?php echo $item['ads_url'] ?>" class="section-btn btn btn-default btn-blue smoothScroll">Read Stories</a>
                              </div>
                         </div>
                    </div>
                             <?php endforeach; ?>     
                            
                        </div>
                    </div>
        