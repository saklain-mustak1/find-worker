function myFunction1() {
    var u = document.getElementById("passr");
    var v = document.getElementById("hide3");
    var w = document.getElementById("hide4");

    if (u.type === 'password') {
        u.type = "text";
        v.style.display = "block";
        w.style.display = "none";
    } else {
        u.type = "password";
        v.style.display = "none";
        w.style.display = "block";
    }
}

function myFunction() {
    var x = document.getElementById("passw");
    var y = document.getElementById("hide1");
    var z = document.getElementById("hide2");

    if (x.type === 'password') {
        x.type = "text";
        y.style.display = "block";
        z.style.display = "none";
    } else {
        x.type = "password";
        y.style.display = "none";
        z.style.display = "block";
    }
}

function password_match() {
    var a = document.getElementById("passr").value;
    var b = document.getElementById("passw").value;

    if (a.length < 7) {
        document.getElementById("show-result").innerHTML = "**password must be atleast 7 charecter";
        return false;
    }
    if (a.length > 25) {
        document.getElementById("show-result").innerHTML = "**password must be less then 25 charecter";
        return false;
    }
    if (a != b) {
        document.getElementById("show-result").innerHTML = "**password are not same";
        return false;
    }
    if (a == b) {
        document.getElementById("show-result").innerHTML = "";
        return true;
    }

}