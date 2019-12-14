const button = document.getElementById('target');
const styles = {
	btn: 'btn',
	color: 'purple',
	size: 'large',
	style: 'plastic'
};
const txColor = document.getElementById('tx-color');

document.getElementById('button-colors').querySelectorAll('input').forEach(input => {
	if (input.hasAttribute('checked')){styles.color = input.value}
	input.addEventListener('input', function () {
		styles.color = this.value;
		setStyle();
	});
});

document.getElementById('button-text').addEventListener('input', function () {
	button.innerHTML = this.value != '' ? this.value : 'button';
});

function setStyle() {
	button.setAttribute('class', Object.values(styles).join(' '));
}

document.getElementById('button-size').querySelectorAll('input').forEach(input => {
	if (input.hasAttribute('checked')){styles.size = input.value;}
	input.addEventListener('input', function () {
		styles.size = this.value;
		setStyle();
	});
});


document.getElementById('button-styles').querySelectorAll('input').forEach(input => {
	if (input.hasAttribute('checked')){styles.style = input.value;}
	input.addEventListener('input', function () {
		styles.style = this.value;
		setStyle();
	});
});

txColor.querySelectorAll('input').forEach(input => {
	if (input.hasAttribute('checked')){styles.txColor = input.value;}
	input.addEventListener('input', function () {
		styles.style = this.value;
		setStyle();
	});
});

setStyle();







































































































