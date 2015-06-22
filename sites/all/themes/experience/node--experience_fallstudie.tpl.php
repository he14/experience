<?php 

$field_management_summary = render($content['field_management_summary']);
$field_referenz = render($content['field_referenz']);
$field_langtext = render($content['field_langtext']);
$field_datum = render($content['field_datum']);
$field_fallstudie_autoren = render($content['field_fallstudie_autoren']);
$field_fallstudie_partner = render($content['field_fallstudie_partner']);
$field_fallstudie_betreiber = render($content['field_fallstudie_betreiber']);

?>

<article>

<?php if(!empty($title)): ?>
	<h1><?php echo $title ?></h1>
<?php endif; ?>

<div class="tabbed-area">

<ul class="tabs group">
	<li class="active"><a href="#box-one">Meta-Informationen</a></li>
    <li><a href="#box-two">Fallstudie</a></li>
</ul>

<div class="box-wrap">

<div class="box" id="box-one">

	<?php if(!empty($field_management_summary)): ?>
		<h3>Management Summary</h3>
		<?php echo $field_management_summary ?>
		<hr>
	<?php endif; ?>

	<?php if(!empty($field_referenz)): ?>
		<h3>Referenz</h3>
		<p><?php echo $field_referenz ?></p>
	<?php endif; ?>

	<?php if(!empty($field_datum)): ?>
		<h3>Erstellungsdatum der Fallstudie</h3>
		<p><?php echo $field_datum ?></p>
	<?php endif; ?>

	<hr>

	<?php if(!empty($field_fallstudie_autoren)): ?>
		<h3>Autor(en) der Fallstudie</h3>
		<p><?php echo $field_fallstudie_autoren ?></p>
		<hr>
	<?php endif; ?>

	<?php if(!empty($field_fallstudie_partner)): ?>
		<h3>Lösungspartner</h3>
		<p><?php echo $field_fallstudie_partner ?></p>
		<hr>
	<?php endif; ?>

	<?php if(!empty($field_fallstudie_betreiber)): ?>
		<h3>Betreiber der Lösung</h3>
		<p><?php echo $field_fallstudie_betreiber ?></p>
		<hr>
	<?php endif; ?>

</div>

<div class="box" id="box-two" style="display:none">

	<?php if(!empty($field_referenz)): ?>
		<h3>Referenz</h3>
		<p><?php echo $field_referenz ?></p>
	<?php endif; ?>
	
	<p>Durch Nutzung dieser Inhalte stimmen Sie den Nutzungsbedingungen zu.</p>
	
	<hr>
	
	<?php if(!empty($field_langtext)): ?>
		<?php echo $field_langtext ?>
	<?php endif; ?>	

</div>

</div>

</div>

<?php 
drupal_add_js('

jQuery(document).ready(function () { 

	jQuery(".tabbed-area ul.tabs a").click(function() {
		var href = jQuery(this).attr("href");
		jQuery(".tabbed-area div.box").hide();
		jQuery(".tabbed-area ul li").removeClass();
		jQuery(".tabbed-area div." + href).show();
		jQuery(this).parent().addClass("active");	
		return false;
	});

});

', 'inline');
?>

</article>

<br><br>

