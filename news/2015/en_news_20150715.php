<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Rework 4DIAC's code base for Eclipse
</div>
<div class="news">
	<span class="left"><?php $date="2015-07-15 22:35"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>In the last months we have started to cleanup 4DIAC's code base for the migration to the infrastructure provided by the Eclipse Foundation for their projects. The next step will be to rework the code to the naming conventions for eclipse projects. As this requires a complete restructuring and renaming of plug-ins, we will take our Mercurial repositories off-line on Friday July 17th.</p>
<p>After the rework the code will be available in the new 4DIAC Git repository at Eclipse.org. We'll keep you updated and let you know when this is finished.</p>
<?php include 'greeting.html';?>
