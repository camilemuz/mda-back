# language: es
@Login
Característica: Descargar manuales

    Escenario: Usuario desea descargar un manual

        Dado : Estar en la pantalla de Manuales
        Cuando : El usuario busca el manual que le sea útil a la solución de su problema
        Y : lo selecciona
        Y : hace click en el botón de descargar
        Entonces : Se descarga el manual automáticamente
        Y : Sale un mensaje de 200 ok: Manual descargado con éxito.




