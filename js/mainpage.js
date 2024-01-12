function redirect() {
    window.location = "uprofile.php";
}

function hideopop() {
    document.getElementById('signpop').style.display = 'none';
    document.getElementById('mainpage_manymoni').style.display = 'block';
}

function shwopop() {
    document.getElementById('signpop').style.display = 'block';
    document.getElementById('mainpage_manymoni').style.display = 'none';
}

function tagmanu() {
    document.getElementById('navbar').classList.toggle('active');
}

function iconshw() {
    document.getElementById('contactsocial').style.display = 'flex';
}