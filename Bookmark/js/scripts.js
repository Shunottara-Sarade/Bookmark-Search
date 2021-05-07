
function myFunction() {
	let input = document.getElementById('searchbar').value;
	input = input.toLowerCase();
	let x = document.getElementsByClassName('col');
	for (i = 0; i < x.length; i++) {

		if (!x[i].innerHTML.toLowerCase().includes(input)) {
			x[i].style.display = "none";
		}
		else {
			x[i].style.display = 'block';

		}
		
	}
}

function clearSearch() {
	document.getElementById('searchbar').value = '';
	let x = document.getElementsByClassName('col');
	for (i = 0; i < x.length; i++) {

			x[i].style.display = "block";	

	}
}
