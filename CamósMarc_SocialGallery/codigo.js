function login(){
	var user = document.getElementById('user').value;
	var password = document.getElementById('password').value;

	if (user == '' && password == '') {
		document.getElementById('mensaje').innerHTML = 'El campo user y password son obligatorios';
		document.getElementById('mensaje').style.display = 'block';
		document.getElementById('user').style.border = '1px solid #FF0000';
		document.getElementById('password').style.border = '1px solid #FF0000';
		return false;
	}else if(user == ''){
		document.getElementById('mensaje').innerHTML = 'El campo user es obligatorio';
		document.getElementById('mensaje').style.display = 'block';
		document.getElementById('user').style.border = '1px solid #FF0000';
		document.getElementById('password').style.border = '1px solid #ccc';
		return false;
	}else if(password == ''){
		document.getElementById('mensaje').innerHTML = 'El campo password es obligatorio';
		document.getElementById('mensaje').style.display = 'block';
		document.getElementById('user').style.border = '1px solid #ccc';
		document.getElementById('password').style.border = '1px solid #FF0000';
		return false;
	}else{
		return true;
	}
}

function misitio(){
	var titulo = document.getElementById('titulo').value;
	var imagen = document.getElementById('imagen').value;
	var fecha = document.getElementById('fecha').value;

	if (titulo == '' && imagen == '' && fecha == '') {
		document.getElementById('mensaje').innerHTML = 'Los campos titulo, imagen y fecha son obligatorios';
		document.getElementById('mensaje').style.display = 'block';
		document.getElementById('titulo').style.border = '1px solid #FF0000';
		document.getElementById('imagen').style.border = '1px solid #FF0000';
		document.getElementById('fecha').style.border = '1px solid #FF0000';
		return false;
	}else if(titulo == '' && imagen == ''){
		document.getElementById('mensaje').innerHTML = 'Los campos titulo y imagen son obligatorios';
		document.getElementById('mensaje').style.display = 'block';
		document.getElementById('titulo').style.border = '1px solid #FF0000';
		document.getElementById('imagen').style.border = '1px solid #FF0000';
		document.getElementById('fecha').style.border = '1px solid #ccc';
		return false;
	}else if(titulo == '' && fecha == ''){
		document.getElementById('mensaje').innerHTML = 'Los campos titulo y fecha son obligatorios';
		document.getElementById('mensaje').style.display = 'block';
		document.getElementById('titulo').style.border = '1px solid #FF0000';
		document.getElementById('imagen').style.border = '1px solid #ccc';
		document.getElementById('fecha').style.border = '1px solid #FF0000';
		return false;
	}else if(imagen == '' && fecha == ''){
		document.getElementById('mensaje').innerHTML = 'Los campos fecha y imagen son obligatorios';
		document.getElementById('mensaje').style.display = 'block';
		document.getElementById('titulo').style.border = '1px solid #ccc';
		document.getElementById('imagen').style.border = '1px solid #FF0000';
		document.getElementById('fecha').style.border = '1px solid #FF0000';
		return false;
	}else if(titulo == ''){
		document.getElementById('mensaje').innerHTML = 'El campo titulo es obligatorio';
		document.getElementById('mensaje').style.display = 'block';
		document.getElementById('titulo').style.border = '1px solid #FF0000';
		document.getElementById('imagen').style.border = '1px solid #ccc';
		document.getElementById('fecha').style.border = '1px solid #ccc';
		return false;
	}else if(imagen == ''){
		document.getElementById('mensaje').innerHTML = 'El campo imagen es obligatorio';
		document.getElementById('mensaje').style.display = 'block';
		document.getElementById('titulo').style.border = '1px solid #ccc';
		document.getElementById('imagen').style.border = '1px solid #FF0000';
		document.getElementById('fecha').style.border = '1px solid #ccc';
		return false;
	}else if(fecha == ''){
		document.getElementById('mensaje').innerHTML = 'El campo fecha es obligatorio';
		document.getElementById('mensaje').style.display = 'block';
		document.getElementById('titulo').style.border = '1px solid #ccc';
		document.getElementById('imagen').style.border = '1px solid #ccc';
		document.getElementById('fecha').style.border = '1px solid #FF0000';
		return false;
	}else{
		return true;
	}
}