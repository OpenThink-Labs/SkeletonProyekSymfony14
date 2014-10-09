<div class="page-header">
<h1>Dashboard</h1>
</div>

<div class="row">
	<div class="col-sm-8">
	  <div class="row">
	    <div class="col-sm-12">
	      <fieldset>
	        <legend>Penjualan</legend>
				<div class="col-sm-2" style="text-align:center">
				  <a href="<?php echo url_for("@homepage")?>" title="Konsumen"><i class="fa fa-users fa-3x"></i></a>
				  <p><a href="<?php echo url_for("@homepage")?>" title="Konsumen">Konsumen</a></p>
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
