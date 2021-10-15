<?php
class DatosPersonales
{

    #region Constructor
    function __construct()
    {
    }
    #endregion

    function crearSelectListaDni($valoresLista, $nameInput)
    {
        $tagInicio = "<select class='form-control' id='sel1' name='$nameInput' required>";
        $opcion = " ";
        foreach ($valoresLista as $valor) {
            $opcion = "<option>" . $valor . "</option>" . $opcion;
        }
        $tagFinal = "</select>";
        $valoresListaSelect = $tagInicio . $opcion . $tagFinal;
        return $valoresListaSelect;
    }

    function crear_listado_estado_civil($valoresLista, $nameInput)
    {
        $tagInicio = "<select class='form-control' id='sel2' name='$nameInput' required>";
        $opcion = " ";
        foreach ($valoresLista as $valor) {
            $opcion = "<option>" . $valor . "</option>" . $opcion;
        }
        $tagFinal = "</select>";
        $valoresListaSelect = $tagInicio . $opcion . $tagFinal;
        return $valoresListaSelect;
    }

    function crear_listado_cantidad_cuotas($valoresLista, $nameInput)
    {
        $tagInicio = "<select class='form-control' id='sel3' name='$nameInput' required>";
        $opcion = " ";
        foreach ($valoresLista as $valor) {
            $opcion = "<option>" . $valor . "</option>" . $opcion;
        }
        $tagFinal = "</select>";
        $valoresListaSelect = $tagInicio . $opcion . $tagFinal;
        return $valoresListaSelect;
    }
}
