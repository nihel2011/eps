
 <?php $lang = $this->Session->read('User.language');

 ?>

<div class="intro-area intro-area-4">
           <div class="main-overly"></div>
            <div class="intro-carousel">
            
               <?php foreach($slideshows as $slideshow):
						$phot = "files/slideshow/".$slideshow['Slideshow']['photo'];
						if(is_file($phot))
						{
							$pho=$this->webroot."files/slideshow/".$slideshow['Slideshow']['photo'];
						}
						else
						$pho = $this->webroot."files/slideshow/1.jpg";
						 ?>
                <div class="intro-content">
                    <div class="slider-images">
                        <img src="<?php echo $pho ; ?>" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- layer 1 -->
                                            <div class="layer-1-2">
                                                <h1 class="title2"><?php echo $slideshow['Slideshow']['name'][$lang];?> </h1>
                                            </div>
                                            <div class="layer-1-1 ">
                                                <p><?php echo $slideshow['Slideshow']['text'][$lang];?> </p>
                                            </div>
                                            <!-- layer 3 -->
                                            <div class="layer-1-3">
                                            
           <?php if(!empty($slideshow['Slideshow']['lien'])) { ?>	<a class="ready-btn left-btn" href="<?php echo $slideshow['Slideshow']['lien'] ; ?>"><?php if(!empty($slideshow['Slideshow']['titrelien'] )){ ?><?php echo $slideshow['Slideshow']['titrelien']; ?> <?php } else echo "Our Services"; ?></a><?php } ?>
           
                                            
                   <?php if(!empty($slideshow['Slideshow']['lien'])) { ?>	<a class="ready-btn right-btn" href="<?php echo $slideshow['Slideshow']['lien'] ; ?>"><?php if(!empty($slideshow['Slideshow']['titrelien'] )){ ?><?php echo $slideshow['Slideshow']['titrelien']; ?> <?php } else echo "Contact us"; ?></a><?php } ?>                           
                                            
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                   <?php 
		  endforeach;?>
            </div>
        </div>