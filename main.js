var arreglo = [];

function cicloFor() {
    /* 
        var arrelgo = [1, 2];
        for (let index = 0; index < arrelgo.length; index++) {
            document.write("<h1> Hola " + arrelgo[index] + "</h1>");
        }
     */
}

/*  
1:cuotaInicial debe ser el 30% del valor total del préstamo
2: saldoPrestamo debe ser el 70% del ValorPrestamo + 11.2% anual
3:  Generar el ValorCouta, de una lista desplegarle el total de cuotas a pagar, sabiendo que las cuotas deben ser a 6, 12, 18, 24, 36, 48 o máximo 60 meses.


*/

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