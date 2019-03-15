  <?php $lang = $this->Session->read('User.language');?><section style="background-image: url(<?php echo $this->webroot;?>images/bg-image-1.jpg);" class="section-30 section-sm-40 section-md-66 section-lg-bottom-90 bg-gray-dark page-title-wrap">
      <div class="shell">
        <div class="page-title">
          <h2>Tarifs</h2>
        </div>
      </div>
    </section>
    <section class="section-60 section-sm-90 section-lg-bottom-15 bg-athens-gray">
      <div class="shell">
        <div class="range">
           
           
           
                    <div class="cell-md-4 cell-lg-3 offset-top-50 offset-md-top-0">
            <div class="inset-md-left-15 leftmenu">
             
                <div class="cell-sm-6 cell-md-12">
                 <div class="offset-top-15">
                    <h6 class="text-small-16 text-bold text-uppercase">Produits</h6>
                    <ul class="list-marked-bordered offset-top-5">
                     <?php foreach($services as $service):?> 
                      <li><a href="<?php echo $this->webroot; ?>services/detail_service/<?php echo $service['Service']['id'];?>"><?php echo $service['Service']['name'][$lang];?></a></li>
                      <?php   endforeach;?>
        
                    </ul>
                  </div>
                  </div></div> 
                  
                  
                  <div class="inset-md-left-15 leftmenu offset-top-30 ">
             
                <div class="cell-sm-6 cell-md-12">
                 <div class=" menutar">
                   
                    <ul class="list-marked-bordered offset-top-0">
                     
                      <li><a href="<?php echo $this->webroot; ?>tarifs/index/<?php echo $service2['Service']['id'];?>">Tarif</a></li>
                       <li><a href="<?php echo $this->webroot; ?>actualites">Actualités</a></li>
                        <li><a href="<?php echo $this->webroot; ?>contacts">Contact</a></li>
        
                    </ul>
                  </div>
                  </div></div>
                  
                  
                  
                   </div>
           
           
           <div class="cell-sm-12 cell-md-8 cell-lg-9  bg-decoration-wrap bg-decoration-bottom section-bottom-60  section-lg-bottom-100 bg-athens-gray">
             <h4><?php echo $service2['Service']['name'][$lang];?> </h4>
           <div class="range range-sm-bottom">
              <?php foreach($tarifs as $tarifs):?> 
               
               
              <div class="cell-sm-6 cell-lg-4 offset-top-30">
                <div class="pricing-table">
                  <?php if($tarifs['Tarif']['poplars']=='Y'){?><div class="pricing-table-label">
                    <p>Most popular</p>
                  </div>
                  <?php } ?>
                  <div class="pricing-table-body">
                    <h5 class="pricing-table-header"><?php echo $tarifs['Tarif']['name'][$lang];?></h5>
                    <div class="pricing-object pricing-object-lg"><span class="small small-top">$</span><span class="price"> <?php echo $tarifs['Tarif']['tarife'];?></span><span class="small small-bottom">/mois</span></div>
                    <div class="divider-triangle"></div>
                      <?php echo $tarifs['Tarif']['description'][$lang];?>
                  </div>
                  <div class="pricing-table-footer"><a href="<?php echo $this->webroot; ?>contacts" class="btn btn-primary btn-block">Contactez nous</a></div>
                </div>
              </div>
                 <?php   endforeach;?>
            </div>
           
           </div>
           
           
           
           
        </div>
      </div>
    </section>
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