<div class="page-header">
<h1>Dashboard Administrator</h1>
</div>

<div class="row">
	<div class="col-sm-8">
	  <div class="row">
	    <div class="col-sm-12">
	      <fieldset>
	        <legend>Data Referensi</legend>
				<div class="col-sm-2" style="text-align:center">
				  <a href="<?php echo url_for("@homepage")?>" title="Kartu Identitas"><i class="fa fa-credit-card fa-3x"></i></a>
				  <p><a href="<?php echo url_for("@homepage")?>" title="Kartu Identitas">Kartu Identitas</a></p>
				</div>
	      </fieldset>
	      
	      <fieldset>
	        <legend>Manajemen User</legend>
				<div class="col-sm-2" style="text-align:center">
				  <a href="<?php echo url_for("@sf_guard_user")?>" title="Manajemen User"><i class="fa fa-users fa-3x"></i></a>
				  <p><a href="<?php echo url_for("@sf_guard_user")?>" title="Manajemen User">Manajemen User</a></p>
				</div>
				<div class="col-sm-2" style="text-align:center">
				  <a href="<?php echo url_for("@sf_guard_group")?>" title="Manajemen Group"><i class="fa fa-group fa-3x"></i></a>
				  <p><a href="<?php echo url_for("@sf_guard_group")?>" title="Manajemen Group">Manajemen Group</a></p>
				</div>
				<div class="col-sm-2" style="text-align:center">
				  <a href="<?php echo url_for("@sf_guard_permission")?>" title="Manajemen Permission"><i class="fa fa-key fa-3x"></i></a>
				  <p><a href="<?php echo url_for("@sf_guard_permission")?>" title="Manajemen Permission">Manajemen Permission</a></p>
				</div>												
	      </fieldset>
	      	      
	    </div>
	  </div>
	</div>
    <div class="col-sm-4">
		<?php //include_partial("accordian_dashboard",Array("siswa_calons"=>$siswa_calons));?>    
    </div>
    <?php // include_partial("community");?>        
</div>
