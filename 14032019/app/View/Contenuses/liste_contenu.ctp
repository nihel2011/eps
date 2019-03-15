 <?php $lang = $this->Session->read('User.language');

 ?> 
<section class="inner-banner bg-style1" style="background-image: url(<?php echo $this->webroot;?>files/menus/<?php echo $menu['Menu']['photo'];?>);">
    <div class="container">
       <!-- <h1>We are proud of our reputation <br>for delivering the highest quality work</h1>-->
    </div>
</section>
<section class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="<?php echo $this->webroot;?>"><?php echo __('Accueil');?></a><i class="fa fa-sort-desc"></i></li>
            <li><?php echo $menu['Menu']['name'][$lang];?></li>
           
        </ul>
    </div>
</section>

<section class="default-section pb-55">
    <div class="container">
        <div class="row">
        <?php if($id==2){?>
            <div class="col-md-12 col-sm-12 ">
                 <?php foreach($contenus as $contenu):?>
                <div class="sec-padd60t">
                    
                 <!--   <div class="section-title">
                    <h4><?php echo ucfirst(strtolower($contenu['Contenus']['title'][$lang]));?></h4>
                    
                  </div>-->
                 
                        
                        <div class="content">
                           <?php echo $contenu['Contenus']['description'][$lang];?>
                        </div>
                   
                     </div>
                    <?php endforeach;?>
                    <br />
            </div>
             <?php }?>
             
             <?php if($id==4|| $id==6){?>
            <div class="col-md-12 col-sm-12 ">
              <div class="content">
                  <ul>
                    <?php foreach($contenus as $contenu):?>
                  
                   <li> <a href="<?php echo $this->webroot;?>contenuses/detail_contenuses/<?php echo $contenu['Contenus']['id'];?>"> <?php echo ucfirst(strtolower($contenu['Contenus']['title'][$lang]));?></a></li>
                    
                  
                 
                        
                      <?php endforeach;?>   
                   </ul>
             <?php }?>
            </div>
        </div>
            
    </div>
</section>