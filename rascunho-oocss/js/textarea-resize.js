let textarea = document.getElementById('textarea');

// getstyle computed
let styleCumputed = window.getComputedStyle(textarea);
let style = {
	line: parseInt(styleCumputed.getPropertyValue('line-height')),
	pTop: parseInt(styleCumputed.getPropertyValue('padding-top')),
	pBottom: parseInt(styleCumputed.getPropertyValue('padding-bottom'))
}

let resetRows = textarea.hasAttribute('rows') ? parseInt(textarea.rows) : 1;

function resize() {
	reset();
	let s = textarea.scrollHeight;
		s -= style.pTop;
		s -= style.pBottom;

	let rows = s / style.line;
	textarea.rows = rows;
}

function reset() {textarea.rows = resetRows;}

textarea.addEventListener('input', resize);
resize();







































































