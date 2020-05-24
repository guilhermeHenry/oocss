<?php if(!class_exists('Rain\Tpl')){exit;}?><header class="oocss-main-header">
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
		<?php if( isset($submenu) ){ ?>
			<div class="menu">
				<?php $counter1=-1;  if( isset($submenu) && ( is_array($submenu) || $submenu instanceof Traversable ) && sizeof($submenu) ) foreach( $submenu as $key1 => $value1 ){ $counter1++; ?>
					<a href=""><?php echo htmlspecialchars( $value1, ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
				<?php } ?>
			</div>
		<?php } ?>
	</article>
</header>