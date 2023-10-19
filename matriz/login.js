
function validacion() {
    const user = document.getElementById("user").value;
    const password = document.getElementById("password").value;

    // validación 
    if (user === "admin" && password === "123") {
        e.location.href("index.php");s
        return false; 
    } else {
        alert("Contraseña o Usuario Incorrectos");
        return false;
    }
}



