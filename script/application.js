async function getPow(value, pow) {
	const answer = await fetch('API/?value=${value}&pow=${pow}');
	return await answer.text();
}

window.onload = async function () {
	const pow = await getPow(4, 3);
	console.log(pow);
}