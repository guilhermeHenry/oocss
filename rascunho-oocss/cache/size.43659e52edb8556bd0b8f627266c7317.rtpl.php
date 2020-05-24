<?php if(!class_exists('Rain\Tpl')){exit;}?><article class="oocss-buttons-painel-size">
	<header>
		<h1>Tamanho</h1>
	</header>
	<form class="content" id="button-size">
		<div class="button-size-item">
			<input type="radio" name="button-size" checked>
			<div class="container">
				<label>
					<span>top</span>
					<select name="button-padding-top">
						<option value="1" selected>1px</option>
						<option value="5">5px</option>
					</select>
				</label>
				<label>
					<span>right</span>
					<select name="button-padding-right">
						<option value="1" selected>1px</option>
						<option value="5">5px</option>
					</select>
				</label>
				<label>
					<span>bottom</span>
					<select name="button-padding-bottom">
						<option value="1" selected>1px</option>
						<option value="5">5px</option>
					</select>
				</label>
				<label>
					<span>left</span>
					<select name="button-padding-left">
						<option value="1" selected>1px</option>
						<option value="5">5px</option>
					</select>
				</label>
			</div>
		</div>
		<div class="button-size-item">
			<input type="radio" name="button-size">
			<div class="container">
				<label>
					<span>left right</span>
					<div class="container">
						<select name="button-padding-top">
							<option value="1" selected>1px</option>
							<option value="5">5px</option>
						</select>
					</div>
				</label>
				<label>
					<span>top bottom</span>
					<div class="container">
						<select name="button-padding-top">
							<option value="1" selected>1px</option>
							<option value="5">5px</option>
						</select>
					</div>
				</label>
			</div>
		</div>
		<div class="button-size-item">
			<input type="radio" name="button-size">
			<div class="container">
				<label>
					<span>left right top bottom</span>
					<div class="container">
						<select name="button-padding-top">
							<option value="1" selected>1px</option>
							<option value="5">5px</option>
						</select>
					</div>
				</label>
			</div>
		</div>
	</form>
</article>