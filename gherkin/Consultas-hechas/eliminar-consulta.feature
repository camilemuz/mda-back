# language: es
@Login
Característica: Eliminar consulta
    Las condiciones para eliminar consulta de soporte son:

    |Tener una o más solitudes de soportes realizadas|
    |El usuario no podrá eliminar consultas de otros usuarios|

    Escenario: Eliminar consulta

        Dado : El usuario se encuentre en la pantalla de Consultas hechas
        Cuando : Seleccione la opción "Eliminar" de una consulta en estado pendiente
        Entonces : Se anulará la solicitud
            Y : Saldrá mensaje de consulta eliminada con éxito
