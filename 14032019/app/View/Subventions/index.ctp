

  <?php $lang = $this->Session->read('User.language');?> 
   

<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo $this->webroot;?>files/menus/<?php echo $menu['Menu']['photo'];?>">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white"><?php echo $menu['Menu']['name'];?></h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="<?php echo $this->webroot;?>"><?php echo __('Accueil');?></a></li>
                <!--<li><a href="#">Pages</a></li>-->
                <li class="active text-gray-silver"><?php echo $menu['Menu']['name'];?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>




        <section id="schedule" class="divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-80 pb-60">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <table class="table table-striped table-schedule">
                <thead>
                  <tr class="bg-theme-colored">
                   <th>Date subvention</th>

                    <th>Titre</th>
                    <th>Montant</th>
                    <th>Donneur</th>

                  </tr>
                </thead>
                <tbody>
	<?php foreach ($subvention as $subvention): ?>
                  <tr>
                    <td><?php echo $subvention['Subvention']['datesub'];?></td>

                    <td><strong><?php echo $subvention['Subvention']['titre'][$lang];?></strong></td>
                    <td><strong><?php echo $subvention['Subvention']['montant'];?></strong></td>
                    <td><strong><?php echo $subvention['Subvention']['donneur'][$lang];?></strong></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>