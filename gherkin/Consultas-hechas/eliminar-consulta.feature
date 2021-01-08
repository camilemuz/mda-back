# language: es
@Login
Característica: Eliminar consulta
    Las condiciones para eliminar consulta de soporte son:

    |Tener una o más solitudes de soportes realizadas|

    Escenario: Eliminar consulta

        Dado : El usuario se encuentre en la pantalla de Consultas hechas
        Cuando : El usuario seleccione del listado una consulta del listo
            Y : este en su estado se encuentre en pendiente
        Entonces : Podrá darle al botón de eliminar
            Y : Saldrá mensaje de consulta eliminada con éxito
