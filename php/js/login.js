// Ellenőrzi, hogy a felhasználó be van-e jelentkezve a helyi tárolóban és még nem járt-e le az időkorlát
function checkLogin() {
	let username = localStorage.getItem('username');
	let password = localStorage.getItem('password');
    let loginTime = localStorage.getItem('loginTime');
	if (username && password && loginTime && (new Date().getTime() - loginTime < 60000)) { // 10 másodperc = 10000 milliszekundum 
		document.getElementById('logModal').style.display='none';
		return true;
	} else {
		return false;
	}
}

// Elmenti a felhasználó adatait a helyi tárolóban, 10 másodperces időkorláttal
function saveLogin() {
	let username = document.getElementById('username').value;
	let password = document.getElementById('password').value;
	localStorage.setItem('username', username);
	localStorage.setItem('password', password);
    localStorage.setItem('loginTime', new Date().getTime()); // időbélyeg mentése
}

// Ellenőrzi a bejelentkezési adatokat
function validateLogin() {
	let username = document.getElementById('username').value;
	let password = document.getElementById('password').value;
	if (username == 'BadicsViki' || password == '1234') {
		alert('Sikeres bejelentkezés!');
		document.getElementById('logModal').style.display='none';
		return true;
	} else {
        alert('Hibás felhasználónév vagy jelszó!');
		return false;
	}
}

// A bejelentkezési adatokat ellenőrzi és elmenti a helyi tárolóban, ha megfelelőek
document.getElementById('login-form').addEventListener('submit', function(event) {
	event.preventDefault();
	if (validateLogin()) {
		saveLogin();     
	}
});

// Ellenőrzi, hogy a felhasználó be van-e jelentkezve az oldal betöltésekor
window.addEventListener('load', function() {
	if (checkLogin()) {
		document.getElementById('username').value = localStorage.getItem('username');
		document.getElementById('password').value = localStorage.getItem('password');
	}
});

// Időzítő, 20 másodpercenként feldobja a üresen bejelentkezési felületet 
setInterval(function() {
	document.getElementById('username').value = '';
    document.getElementById('password').value = '';
    document.getElementById('logModal').style.display='block';
}, 61000);