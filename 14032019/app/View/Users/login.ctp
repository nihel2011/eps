<?php ?>
<div class="wrapper">
		<h1>
			<a href="javascript:;">
				<img src="<?php echo $this->webroot; ?>images/logo.png" alt="" class='retina-ready' width="59" height="49">Administration</a>
		</h1>
		<div class="login-body">
			<h2>SIGN IN</h2>
		 
            <?php echo $this->Form->create('User',array('role'=>'form','id'=>'test', 'class'=>'form-validate')); ?>
				<div class="form-group">
					<div class="email controls">
                      
					<?php echo $this->Form->input('email',array('autocomplete'=>"off",'label'=>false,'div'=>false, 'placeholder'=>'Email address', 'class'=>'form-control', 'data-rule-required'=>'true', 'data-rule-email'=>'true') ); ?>
                  
					
					 
					</div>
				</div>
				<div class="form-group">
					<div class="pw controls">
                    <?php echo $this->Form->input('mot_passe',array('type'=>'password','autocomplete'=>"off",'label'=>false,'div'=>false, 'placeholder'=>'Mot de passe', 'class'=>'form-control', 'data-rule-required'=>'true') ); ?>
						 
					</div>
				</div>
				
				<div class="submit">
					<div class="remember">
						<input type="checkbox" name="remember" class='icheck-me' data-skin="square" data-color="blue" id="remember">
						<label for="remember">Remember me</label>
					</div>
					<input type="submit" value="Sign me in" class='btn btn-primary'>
				</div>
			</form>
			<div class="forget" style="background: #eee;padding: 10px 0; text-align: center; display: block; text-decoration: none; color: #555;">
			 	  
			</div>
		</div>
	</div>



 