  <?php $lang = $this->Session->read('User.language');?> 

 

 
    <section style="background-image: url(<?php echo $this->webroot;?>files/menus/<?php echo $menu['Menu']['photo'];?>);" class="section-30 section-sm-40 section-md-66 section-lg-bottom-90 bg-gray-dark page-title-wrap">
      <div class="shell">
        <div class="page-title">
          <h2>Actualités</h2>
        </div>
      </div>
    </section>

	<!-- INNER CONTENT -->
	<div class="inner-content section-lg-bottom-90">
		<div class="container">
			<div class="row">
				 <div class="range range-xs-center offset-top-40">
					<?php foreach($actualites as $act): ?>
                     
					 <div class="cell-xs-8 cell-sm-7 cell-md-4">
            <div class="post-boxed reveal-lg-inline-block">
              <div class="post-boxed-img-wrap"><a href=""><img src="<?php echo $this->webroot; ?>files/actualite/<?php echo $act['Actualite']['photo'];?>" alt="" width="322" height="219"/></a></div>
              <div class="post-boxed-caption">
                <div class="post-boxed-title text-bold"><a href=""><?php echo $act['Actualite']['name'][$lang];?></a></div>
                <div class="offset-top-5">
                  <ul class="list-inline list-inline-dashed text-uppercase">
                    <li><?php echo $act['Actualite']['datea'];?></li>
                   <!-- <li><span>by <a href="#" class="text-primary">Sam Kromstain</a></span></li>-->
                  </ul>
                </div>
              </div>
            </div>
          </div>
                    
                    
                    
                    <?php endforeach;?>
						
						
					
					
					<div class="space50"></div>
					
								</div>
			</div>
		</div>
	</div>

       
  <section class="section-60 section-sm-50 context-dark bg-primary slogon">
      <div class="shell text-center text-md-left">
        <div class="range range-xs-center range-md-middle range-md-left">
          <div class="cell-md-8 text-center">
            <h4>Tout votre système Qualité/ QHSE à travers une seule interface</h4>
          </div>
          <div class="cell-md-4 cell-lg-3 offset-top-30 offset-md-top-0"><a href="#" class="btn btn-rect btn-white-outline offset-top-0 reveal-block reveal-sm-inline-block">Demande démo</a></div>
        </div>
      </div>
    </section>