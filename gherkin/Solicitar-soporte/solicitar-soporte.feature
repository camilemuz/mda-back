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




    Escenario: El usuario desea limpiar todos los datos en pantalla

    Dado : El usuario tiene la sesión iniciada correctamente
    Cuando : el usuario desea limpiar todos los datos en pantalla
        Y : le da al botón de limpiar
    Entonces : todos los datos a llenar se vuelven a sus estados predeterminados (en blanco)




