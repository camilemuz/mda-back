# language: es
@Login
Característica: Ver listado de las consultas hechas
    Las condiciones para ver el listado son:



  Escenario: Ver listado.

    Dado : Haber realizado alguna solicitud
    Cuando : El usuario se encuentre en la pantalla de consultas hechas
    Entonces : Debería tener una tabla historial de consultas realizadas con los campos:
      |Fecha de Solicitud de consulta|
      |Hora de Solicitud de Consulta |
      |Estado                        |
      |Número de cola                |
      |Asignado                      |



