<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title><?php echo htmlspecialchars( $title, ENT_COMPAT, 'UTF-8', FALSE ); ?></title>
	<link rel="stylesheet" href="./reset/style.css">
	<link rel="stylesheet" href="./styles/main-painel.css">
</head>
<body>
	<?php require $this->checkTemplate("main-header");?>
	<div class="main-container">
		<?php require $this->checkTemplate("nav");?>
		<?php require $this->checkTemplate(''.htmlspecialchars( $url, ENT_COMPAT, 'UTF-8', FALSE ));?>
	</div>
</body>
</html>
