# language: es
@Login
Característica: Descargar manuales

    Escenario: Usuario desea descargar un manual

        Dado : Estar en la pantalla de Manuales, donde tendrá cargados
        |Manual de uso de GENESYS|
        |Manual de uso de ANDROMEDA|
        |Habilitar Control Remoto de Escritorio|
        |Configuración de la preferencias de la impresora|
        |Manual ingreso de SIAT (video)                  |
        Cuando : El usuario busca el manual que le sea útil a la solución de su problema
        Y : lo selecciona
        Y : hace click en el botón de abrir
        Entonces : Se descarga el manual automáticamente
        Y : Sale un mensaje de 200 ok: Manual descargado con éxito ó abrirá una ventana nueva en caso de que sea video.




