<?php if(!class_exists('Rain\Tpl')){exit;}?><link rel="stylesheet" href="./css/parts/padding.css">
<link rel="stylesheet" href="./styles/buttons/buttons.css">
<link rel="stylesheet" href="./styles/form/checkbox/checkbox.css">

<main class="oocss-buttons-painel">
	<article class="oocss-buttons-painel-styles">
		<header>
			<h1>Estilos</h1>
		</header>
		<section class="content" id="button-styles">
			<label class="item" index="2">
				<input type="radio" name="button-styles" value="normal">
				<span class="btn normal blue" type="button">Normal</span>
				<aside>
					<strong>Platico</strong>
					<em>Versão 3D usando</em>
				</aside>
			</label>
			<label class="item active" index="1">
				<input type="radio" name="button-styles" value="round" colors='[
					{"name": "blue", "title": "Azul"},
					{"name": "red", "title": "vermelho"}
				]' checked>
				<span class="btn p5 round blue" type="button">3D</span>
				<aside>
					<strong>Botão Tridimencional</strong>
					<em>Versão 3D usando</em>
				</aside>
			</label>
		</section>
	</article>
	<article class="oocss-buttons-painel-colors">
		<header>
			<h1>CORES</h1>
		</header>
		<form class="content" name="colors" id="button-colors">
			<input type="radio" name="colors" class="no-appearance" value="yellow">
			<input type="radio" name="colors" class="no-appearance" value="blue" checked>
			<input type="radio" name="colors" class="no-appearance" value="white">
			<input type="radio" name="colors" class="no-appearance" value="gray">
		</form>
	</article>
	<article class="oocss-buttons-painel-size">
		<header>
			<h1>LISTA DE ESTILOS ADICIONADOS</h1>
		</header>
		<form>
			<label>
				<span>P.Top</span>
				<input type="range">
				<small>12px</small>
			</label>
			<label>
				<span>P.Right</span>
				<input type="range">
				<small>12px</small>
			</label>
			<label>
				<span>P.Bottom</span>
				<input type="range">
				<small>12px</small>
			</label>
			<label>
				<span>P.Left</span>
				<input type="range">
				<small>12px</small>
			</label>
		</form>
	</article>
	<article class="oocss-buttons-painel-list"></article>
	<article class="oocss-buttons-painel-overview">
		<button id="target" class="p10">Exemplo do botão</button>
	</article>
	<article class="box8">
		<header>
			<h1>Estilos</h1>
		</header>
	</article>
	<article class="oocss-buttons-painel-code">
		<div class="content">
			<input type="text" id="button-code" value='<button class="icon-file-text" type="button">Exemplo</button>'>
			<button id="button-input-code" class="icon-file" type="button"></button>
		</div>
	</article>
	<article>
		<header>
			<h1>Tamanho</h1>
		</header>
	</article>
</main>

<script src="./js/buttons.app.js"></script>