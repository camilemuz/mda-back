# language: es
@Login
Característica: Ver listado de las consultas hechas
    Las condiciones para ver el listado son:

    |Tener una o más solitudes de soportes realizadas|

  Escenario: Ver listado.

    Dado : Haber realizado alguna solicitud
    Cuando : El usuario se encuentre en la pantalla de consultas hechas
    Entonces : Debería tener una tabla ordena de por la solicitud más antigua a la reciente



