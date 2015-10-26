<!-- breadcrumbs  -->
<div class="row"><div class="large-12 columns">
<ul class="breadcrumbs">
  <li><a href="<?=base_url();?>home">Inicio</a></li>
  <li class="current"><a href="#">Escolar</a></li>
  <li class="current"><a href="#">Ecuesta</a></li>
</ul>
</div></div>
<!-- breadcrumbs  -->
<div class="row">
  <div class="large-12 columns">
            <hr />

            <?php if($ec['0']->status == 1){ ?>
<blockquote>Encuesta</blockquote>


<?php echo form_open('encuesta/encuestasav','class="custom"'); ?>


<? if($ec['0']->pregunta1){?>
<table width="100%">
 <thead>
	<tr>
		<th colspan=5>¿<?=$ec['0']->pregunta1;?>?</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td><?php if($ec['0']->p1r1) { ?><input type="radio" name="r1" value="<?=$ec['0']->p1r1;?>"> <?=$ec['0']->p1r1;?> <?php } ?></td>
		<td><?php if($ec['0']->p1r2) { ?><input type="radio" name="r1" value="<?=$ec['0']->p1r2;?>"> <?=$ec['0']->p1r2;?> <?php } ?></td>
		<td><?php if($ec['0']->p1r3) { ?><input type="radio" name="r1" value="<?=$ec['0']->p1r3;?>"> <?=$ec['0']->p1r3;?> <?php } ?></td>
		<td><?php if($ec['0']->p1r4) { ?><input type="radio" name="r1" value="<?=$ec['0']->p1r4;?>"> <?=$ec['0']->p1r4;?> <?php } ?></td>
		<td><?php if($ec['0']->p1r5) { ?><input type="radio" name="r1" value="<?=$ec['0']->p1r5;?>"> <?=$ec['0']->p1r5;?> <?php } ?></td>
	</tr>
</tbody>
</table>
<? }?>

<? if($ec['0']->pregunta2){?>
<table width="100%">
 <thead>
	<tr>
		<th colspan=5>¿<?=$ec['0']->pregunta2;?>?</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td><?php if($ec['0']->p2r1) { ?><input type="radio" name="r2" value="<?=$ec['0']->p2r1;?>"> <?=$ec['0']->p2r1;?> <?php } ?></td>
		<td><?php if($ec['0']->p2r2) { ?><input type="radio" name="r2" value="<?=$ec['0']->p2r2;?>"> <?=$ec['0']->p2r2;?> <?php } ?></td>
		<td><?php if($ec['0']->p2r3) { ?><input type="radio" name="r2" value="<?=$ec['0']->p2r3;?>"> <?=$ec['0']->p2r3;?> <?php } ?></td>
		<td><?php if($ec['0']->p2r4) { ?><input type="radio" name="r2" value="<?=$ec['0']->p2r4;?>"> <?=$ec['0']->p2r4;?> <?php } ?></td>
		<td><?php if($ec['0']->p2r5) { ?><input type="radio" name="r2" value="<?=$ec['0']->p2r5;?>"> <?=$ec['0']->p2r5;?> <?php } ?></td>
	</tr>
</tbody>
</table>
<? }?>


<? if($ec['0']->pregunta3){?>
<table width="100%">
 <thead>
	<tr>
		<th colspan=5>¿<?=$ec['0']->pregunta3;?>?</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td><?php if($ec['0']->p3r1) { ?><input type="radio" name="r3" value="<?=$ec['0']->p3r1;?>"> <?=$ec['0']->p3r1;?> <?php } ?></td>
		<td><?php if($ec['0']->p3r2) { ?><input type="radio" name="r3" value="<?=$ec['0']->p3r2;?>"> <?=$ec['0']->p3r2;?> <?php } ?></td>
		<td><?php if($ec['0']->p3r3) { ?><input type="radio" name="r3" value="<?=$ec['0']->p3r3;?>"> <?=$ec['0']->p3r3;?> <?php } ?></td>
		<td><?php if($ec['0']->p3r4) { ?><input type="radio" name="r3" value="<?=$ec['0']->p3r4;?>"> <?=$ec['0']->p3r4;?> <?php } ?></td>
		<td><?php if($ec['0']->p3r5) { ?><input type="radio" name="r3" value="<?=$ec['0']->p3r5;?>"> <?=$ec['0']->p3r5;?> <?php } ?></td>
	</tr>
</tbody>
</table>
<? }?>


<? if($ec['0']->pregunta4){?>
<table width="100%">
 <thead>
	<tr>
		<th colspan=5>¿<?=$ec['0']->pregunta4;?>?</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td><?php if($ec['0']->p4r1) { ?><input type="radio" name="r4" value="<?=$ec['0']->p4r1;?>"> <?=$ec['0']->p4r1;?> <?php } ?></td>
		<td><?php if($ec['0']->p4r2) { ?><input type="radio" name="r4" value="<?=$ec['0']->p4r2;?>"> <?=$ec['0']->p4r2;?> <?php } ?></td>
		<td><?php if($ec['0']->p4r3) { ?><input type="radio" name="r4" value="<?=$ec['0']->p4r3;?>"> <?=$ec['0']->p4r3;?> <?php } ?></td>
		<td><?php if($ec['0']->p4r4) { ?><input type="radio" name="r4" value="<?=$ec['0']->p4r4;?>"> <?=$ec['0']->p4r4;?> <?php } ?></td>
		<td><?php if($ec['0']->p4r5) { ?><input type="radio" name="r4" value="<?=$ec['0']->p4r5;?>"> <?=$ec['0']->p4r5;?> <?php } ?></td>
	</tr>
</tbody>
</table>
<? }?>


<? if($ec['0']->pregunta5){?>
<table width="100%">
 <thead>
	<tr>
		<th colspan=5>¿<?=$ec['0']->pregunta5;?>?</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td><?php if($ec['0']->p5r1) { ?><input type="radio" name="r5" value="<?=$ec['0']->p5r1;?>"> <?=$ec['0']->p5r1;?> <?php } ?></td>
		<td><?php if($ec['0']->p5r2) { ?><input type="radio" name="r5" value="<?=$ec['0']->p5r2;?>"> <?=$ec['0']->p5r2;?> <?php } ?></td>
		<td><?php if($ec['0']->p5r3) { ?><input type="radio" name="r5" value="<?=$ec['0']->p5r3;?>"> <?=$ec['0']->p5r3;?> <?php } ?></td>
		<td><?php if($ec['0']->p5r4) { ?><input type="radio" name="r5" value="<?=$ec['0']->p5r4;?>"> <?=$ec['0']->p5r4;?> <?php } ?></td>
		<td><?php if($ec['0']->p5r5) { ?><input type="radio" name="r5" value="<?=$ec['0']->p5r5;?>"> <?=$ec['0']->p5r5;?> <?php } ?></td>
	</tr>
</tbody>
</table>
<? }?>
<br>
<label>Deja tu  Comentario:</label>
<textarea name="comentarios"></textarea> 
<br>

<input type="submit" class="button postfix" value=" Mandar Resultados "/>
</form>

<?php }else{
?>
<h3>No hay Encuesta en Curso...</h3>
<? } ?>
  </div>
</div>