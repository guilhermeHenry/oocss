<?php if(!class_exists('Rain\Tpl')){exit;}?><link rel="stylesheet" href="./css/parts/font-size.css">
<link rel="stylesheet" href="./styles/form/inputs/form.css">
<link rel="stylesheet" href="./styles/form/inputs/painel.css">

<form class="form">
	<section title="Input Shadow">
		<div class="block">
			<label class="input shadow f22" title="Seu Nome">
				<span class="legend">Seu nome</span>
				<input type="text" name="user-name" placeholder="Seu nome" class="field" required>
			</label>
		</div>
		<div class="block">
			<label class="input shadow f18" title="Seu Nome">
				<span class="legend">Seu nome</span>
				<input type="text" name="user-name" placeholder="Seu nome" class="field" required>
			</label>
		</div>
		<div class="block">
			<label class="input shadow f18" title="Seu Nome">
				<span class="legend">Seu nome</span>
				<input type="text" name="user-name" placeholder="Seu nome" class="field" required>
			</label>
		</div>
		<div class="block">
			<label class="input shadow f16" title="Seu Nome">
				<span class="legend">Seu nome</span>
				<input type="text" name="user-name" placeholder="Seu nome" class="field" required>
			</label>
		</div>
		<div class="block">
			<label class="input shadow f16" title="Seu Nome">
				<span class="legend">Seu nome</span>
				<!-- <input type="text" name="user-name"  class="" required> -->
				<textarea class="field" rows="3" placeholder="Seu nome"></textarea>
			</label>
		</div>
		<div class="block">
			<label class="input shadow f15" title="Seu Nome">
				<span class="legend">Seu nome</span>
				<input type="text" name="user-name" placeholder="Seu nome" class="field" required>
			</label>
		</div>
	</section>
	<section title="Input Float">
		<div class="block">
			<label class="input float f18 gray">
				<input type="text" name="user-name" placeholder="Seu nome" class="field" value="" required>
				<span class="legend">Escreva seu nome</span>
			</label>
		</div>
		<div class="block">
			<label class="input float f18 gray">
				<input type="text" name="user-name" placeholder="Seu nome" class="field" value="" required>
				<span class="legend">Escreva seu nome</span>
			</label>
		</div>
		<div class="block">
			<label class="input float f18 gray">
				<input type="text" name="user-name" placeholder="Seu nome" class="field" value="" required>
				<span class="legend">Escreva seu nome</span>
			</label>
		</div>
		<div class="block">
			<label class="input float f18 gray">
				<textarea  id="textarea" rows="5" style="line-height: 22px" class="field" placeholder="Seu nome">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</textarea>
				<span class="legend">Escreva seu nome</span>
			</label>
		</div>
		<div class="block">
			<label class="select float f18 gray">
				<span class="field">Escolha o seu estado</span>
				<div class="menu bottom">
					<span class="option">Minas Gerais</span>
					<span class="option">São Paulo</span>
					<span class="option">Rio de Janeiro</span>
					<span class="option selected">Rio Grande do Sul</span>
					<span class="option">Santa Catarina</span>
					<span class="option">Amazonas</span>
					<span class="option">Mato Grosso do Sul</span>
				</div>
			</label>
		</div>
	</section>
	<section class="no-grid" title="Input line">
			<div class="block input line f22">
				<label>
					<input type="text" class="field" placeholder="exemplo: nome.sobrenome@email.com">
					<span class="legend">Seu Email</span>
				</label>
				<label>
					<input type="text" class="field" placeholder="No minnimo 26 caractteres">
					<span class="legend">Seu senha</span>
				</label>
			</div>
			<div class="block input white line f18">
				<label>
					<input type="text" class="field" placeholder="exemplo: nome.sobrenome@email.com">
					<span class="legend">Seu Email</span>
				</label>
				<label>
					<input type="text" class="field" placeholder="No minnimo 26 caractteres">
					<span class="legend">Seu senha</span>
				</label>
			</div>
	</section>
</form>
<!-- <script type="module" src="../js/textarea-resize.js"></script> -->
<!-- <script type="module" src="./js/form-select.js"></script> -->