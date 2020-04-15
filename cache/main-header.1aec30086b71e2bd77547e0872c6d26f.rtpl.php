<?php if(!class_exists('Rain\Tpl')){exit;}?><header class="oocss-main-header">
	<article class="top">
		<div class="breadcrumbs">
			<hr class="icon-home home">
			<hr class="icon-arrow-bold-right arrow">
			<span>OOCSS</span>
			<hr class="icon-arrow-bold-right arrow">
			<a href="#link">Painel Admin</a>
			<hr class="icon-arrow-bold-right arrow">
			<strong>Botões Customizados</strong>
		</div>
	</article>
	<section>
		<div class="left">
			<a href="../index.html" class="back">Voltar para o painel</a>
		</div>
		<div class="title">
			<h1><?php echo htmlspecialchars( $title, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
		</div>
		<ul class="right">
			<li><a href="#new">Criar</a></li>
		</ul>
	</section>
	<nav>
		<?php $counter1=-1;  if( isset($links) && ( is_array($links) || $links instanceof Traversable ) && sizeof($links) ) foreach( $links as $key1 => $value1 ){ $counter1++; ?>
		<?php if( $key1 != '404' ){ ?>
		<a <?php if( $active === $key1 ){ ?>class="active"<?php } ?> href="index.php&action=<?php echo htmlspecialchars( $key1, ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1, ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
		<?php } ?>
		<?php } ?>
	</nav>
</header>