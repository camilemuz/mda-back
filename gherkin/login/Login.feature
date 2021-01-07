# language: es
@Login
Característica: Iniciar sesión dentro la aplicación
  La aplicación no debe iniciar hasta que el usuario haya ingresado sus datos correctamente
  La aplicación debería cargar automaticamente los datos de logeo

  Escenario: Acceso exitoso.

    Dado: Tener una cuenta activa
    Cuando: Envía su correo y contraseña
    Entonces: Debería tener acceso para iniciar el sistema de Mesa de Ayuda e ir a la pantalla de solicitud de soporte
        y tener la vista del menú
              | Solicitar Soporte                         |
              | Consultas Hechas                          |
              | Descargar Manuales                        |



  Escenario: Usuario no puede ingresar al sistema

    Dado: El usuario no se encuentra registrado en el dominio
    Cuando: Intenta ingresar al sistema
    Entonces: Sale mensaje de error 403 Forbidden: no se encuentra registrado en el dominio


  Escenario: Usuario no puede ingresar al sistema

    Dado: El usuario no cuenta con internet
    Cuando: Intenta ingresar al sistema
    Entonces: Sale mensaje de error 404 Not Found






