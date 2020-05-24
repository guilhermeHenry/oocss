<?php if(!class_exists('Rain\Tpl')){exit;}?><nav class="main-nav">
	<?php $counter1=-1;  if( isset($links) && ( is_array($links) || $links instanceof Traversable ) && sizeof($links) ) foreach( $links as $key1 => $value1 ){ $counter1++; ?>
	<?php if( $key1 != '404' ){ ?>
	<a <?php if( $active === $key1 ){ ?>class="active"<?php } ?> href="index.php&action=<?php echo htmlspecialchars( $key1, ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1, ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
	<?php } ?>
	<?php } ?>
</nav>