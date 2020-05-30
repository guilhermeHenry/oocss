<?php if(!class_exists('Rain\Tpl')){exit;}?><link rel="stylesheet" href="styles/form/checkbox/checkbox.css">
<link rel="stylesheet" href="styles/form/checkbox/painel.css">

<!-- BASE -->
<link rel="stylesheet" href="./css/parts/padding.css">
<link rel="stylesheet" href="./css/parts/border-radius.css">

<div class="p20tb">
	<nav class="checkbox main-checkbox-menu">
		<form id="main-checkbox-colors">
			<input type="radio" name="color" value="red" title="red" class="red" checked>
			<input type="radio" name="color" value="green" title="green" class="green">
			<input type="radio" name="color" value="yellow" title="yellow" class="yellow">
			<input type="radio" name="color" value="orange" title="orange" class="orange">
			<input type="radio" name="color" value="purple" title="purple" class="purple">
			<input type="radio" name="color" value="blue" title="blue" class="blue">
		</form>
	</nav>
	<form class="form checkbox">
		<div class="block">
			<h2>Switch flat</h2>
			<div class="checkbox list">
				<label>
					<input type="checkbox" class="flat p12 red" checked>
					<span>switch</span>
				</label>
				<label>
					<input type="checkbox" class="flat p14 red" checked>
					<span>switch checked</span>
				</label>
				<label>
					<input type="checkbox" class="flat p14 red" disabled>
					<span>switch disabled</span>
				</label>
				<label>
					<input type="checkbox" class="flat p14 red" checked disabled>
					<span>switch checked disabled</span>
				</label>
			</div>
		</div>

		<div class="block">
			<h2>Switch within</h2>
			<div class="checkbox list">
				<label>
					<input type="checkbox" class="within p12 red" checked>
					<span>switch</span>
				</label>
				<label>
					<input type="checkbox" class="within p14 red" checked>
					<span>switch checked</span>
				</label>
				<label>
					<input type="checkbox" class="within p14 red" disabled>
					<span>switch disabled</span>
				</label>
				<label>
					<input type="checkbox" class="within p14 red" checked disabled>
					<span>switch checked disabled</span>
				</label>
			</div>
		</div>
		<div class="block">
			<h2>Switch go</h2>
			<div class="checkbox list">
				<label>
					<input type="checkbox" class="go p8 red">
					<span>switch</span>
				</label>
				<label>
					<input type="checkbox" class="go p10 red" checked>
					<span>switch checked</span>
				</label>
				<label>
					<input type="checkbox" class="go p10 red" disabled>
					<span>switch disabled</span>
				</label>
				<label>
					<input type="checkbox" class="go p10 red" checked disabled>
					<span>switch checked disabled</span>
				</label>
			</div>
		</div>
		<div class="block">
			<h2>Switch round</h2>
			<div class="checkbox list">
				<label>
					<input type="checkbox" class="round p10 red">
					<span>switch</span>
				</label>
				<label>
					<input type="checkbox" class="round p12 red" checked>
					<span>switch checked</span>
				</label>
				<label>
					<input type="checkbox" class="round p10 red" disabled>
					<span>switch disabled</span>
				</label>
				<label>
					<input type="checkbox" class="round p10 red" checked disabled>
					<span>switch checked disabled</span>
				</label>
			</div>
		</div>
		<div class="block">
			<h2>Switch mark</h2>
			<div class="checkbox list">
				<label>
					<input type="checkbox" class="checkmark p8 blue" checked>
					<span>switch (p8)</span>
				</label>
				<label>
					<input type="checkbox" class="checkmark p9 blue">
					<span>switch (p9)</span>
				</label>
				<label>
					<input type="checkbox" class="checkmark p10" checked>
					<span>switch checked (p10)</span>
				</label>
				<label>
					<input type="checkbox" class="checkmark p9 blue" disabled>
					<span>switch disabled (p9)</span>
				</label>
				<label>
					<span>switch checked disabled (p9)</span>
					<input type="checkbox" class="checkmark p9 blue" checked disabled>
				</label>
			</div>
		</div>
		<div class="block">
			<h2>radio circle</h2>
			<div class="checkbox list">
				<label>
					<input type="checkbox" class="circle p3">
					<span>switch</span>
				</label>
				<label>
					<input type="checkbox" class="circle p3" checked>
					<span>switch checked</span>
				</label>
				<label>
					<input type="checkbox" class="circle p3" disabled>
					<span>switch disabled</span>
				</label>
				<label>
					<input type="checkbox" class="circle p3" checked disabled>
					<span>switch checked disabled</span>
				</label>
			</div>
		</div>
	</form>
</div>
<script src="form-checkbox.app.js"></script>