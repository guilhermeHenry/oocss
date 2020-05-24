const button = document.getElementById('target');
const button_code = document.getElementById('button-code');
const button_colors = document.getElementById('button-colors');

const styles = {
	btn:   'btn',
	color: 'purple',
	size:  'large',
	style: 'plastic'
};

document.getElementById('button-input-code').addEventListener('click', function () {
  var copyText = button_code; /* Get the text field */

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
});

/* ## BUTTONS STYLES */
document.getElementById('button-styles').querySelectorAll('input').forEach(input => {
	if (input.hasAttribute('checked')){
		styles.style = input.value;
	}

	input.addEventListener('input', function () {
		styles.style = this.value;

		setStyle();
		setColors(input);
	});
});

/* ## BUTTONS COLORS */
document.getElementById('button-colors').querySelectorAll('input').forEach(input => {
	if (input.hasAttribute('checked')){styles.color = input.value}
	input.addEventListener('input', function () {
		styles.color = this.value;
		setStyle();
	});
});

/* ## BUTTONS SIZE */
document.getElementById('button-size').querySelectorAll('input').forEach(input => {
	console.log(input);
});


/***************************/
function setStyle() {
	let values = Object.values(styles).join(' ');
	button.setAttribute('class', values);
	button_code.value = `<button class="${values}">Botão<button>`;
}


function setColors(element) {
	let colors = [
		{name: 'red', title: "Vermelho"}
	];

	if (element.hasAttribute('colors')){
		let value = element.getAttribute('colors');
		colors = JSON.parse(value);
	}

	button_colors.innerHTML = '';

	// COLORS CREATE
	colors.forEach(color => {
		let element = document.createElement('input');
			element.type = 'radio';
			element.name = 'colors';
			element.classList.add('no-appearance');
			element.value = color.name;

		button_colors.append(element);
	});

	document.getElementById('button-colors').querySelectorAll('input').forEach(input => {
		if (input.hasAttribute('checked')){styles.color = input.value}
		input.addEventListener('input', function () {
			styles.color = this.value;
			setStyle();
		});
	});
}

setStyle();








































































































