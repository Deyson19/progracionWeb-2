var arreglo = [];

function cicloFor() {
    /* 
        var arrelgo = [1, 2];
        for (let index = 0; index < arrelgo.length; index++) {
            document.write("<h1> Hola " + arrelgo[index] + "</h1>");
        }
     */
}


function validar() {
    var o = document.getElementById('cuotas').value;
    if (o === '0') {
        alert('Debe seeleccionar una cantidad de cuota');
        windows.location('Index.php');
        return
    } {
        function submitMyForm() {
            // alert('ya seleccione');
            document.forms["formCuotas"].submit();
        }
        submitMyForm();
    }

}

function pulsar(event) {
    if (event.keyCode == 13) event.returnValue = false;
    alert("no puedes presionar esa tecla.")
}

function disableEnterKey(e) {
    var key;
    if (window.event) {
        key = window.event.keyCode; //IE
    } else {
        key = e.which; //firefox
    }
    if (key == 13) {
        return false;
    } else {
        return true;
    }
}