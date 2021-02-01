# language: es
@Login
Característica: Solicitar un soporte

    Escenario: Enviar solicitud de solicitud de soporte con éxito

    Dado : Tener la sesión iniciada en el sistema
    Cuando : El usuario debe llenar que tipo de soporte desea
        Y : debe llenar el espacio de "En"
        Y : Descripción del problema
        Y : Lugar
        Y : Sucursal
        Y : Área
        Y : da el botón de enviar
    Entonces : Debería enviarse la solicitud
        Y : Salir un mensaje de 200 ok: Mensaje enviado con éxito.
        Y : Redireccionar a la pantalla de consultas-hechas







