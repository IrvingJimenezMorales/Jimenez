# El Modelo de Caja

### Todo en CSS tiene una caja alrededor, y comprender estas cajas es clave para poder crear diseños con CSS o para alinear elementos con otros elementos. En este artículo, echaremos un vistazo más de cerca al modelo de cajas en CSS con el que vas a poder crear diseños de compaginación más complejos con una comprensión de cómo funciona y la terminología relacionada.

## Cajas en Bloque y en Linea

### En CSS, en general, hay dos tipos de cajas: cajas en bloque y cajas en línea. Estas características se refieren al modo como se comporta la caja en términos de flujo de página y en relación con otras cajas de la página:
### Si una caja se define como un bloque, se comportará de las maneras siguientes:

1. La caja fuerza un salto de línea al llegar al final de la línea.
2. La caja se extenderá en la dirección de la línea para llenar todo el espacio disponible que haya en su contenedor. En la mayoría de los casos, esto significa que la caja será tan ancha como su contenedor, y llenará el 100% del espacio disponible.
3. Se respetan las propiedades width y height.
4. El relleno, el margen y el borde mantienen a los otros elementos alejados de la caja.

### A menos que decidamos cambiar el tipo de visualización a en línea, elementos como los encabezados 
### Si una caja tiene una visualización externa de tipo **inline**, entonces:

1. La caja no fuerza ningún salto de línea al llegar al final de la línea.
2. Las propiedades width y height no se aplican.
3. Se aplican relleno, margen y bordes verticales, pero no mantienen alejadas otras cajas en línea.
4. Se aplican relleno, margen y bordes horizontales, y mantienen alejadas otras cajas en línea.

## Las partes que componen cada caja y su orden de visualización desde el punto de vista del usuario son las siguientes:

1. **Contenido (content):** se trata del contenido HTML del elemento (las palabras de un párrafo, una imagen, el texto de una lista de elementos, etc.)
2. **Relleno (padding):** espacio libre opcional existente entre el contenido y el borde.
3. **Borde (border):** línea que encierra completamente el contenido y su relleno.
4. **Imagen de fondo (background image):** imagen que se muestra por detrás del contenido y el espacio de relleno.
5. **Color de fondo (background color):** color que se muestra por detrás del contenido y el espacio de relleno.
6. **Margen (margin):** separación opcional existente entre la caja y el resto de cajas adyacentes.

## El diagrama siguiente muestra estas capas:

![Capas](https://mdn.mozillademos.org/files/16558/box-model.png)

### El relleno y el margen son transparentes, por lo que en el espacio ocupado por el relleno se muestra el color o imagen de fondo (si están definidos) y en el espacio ocupado por el margen se muestra el color o imagen de fondo de su elemento padre (si están definidos). Si ningún elemento padre tiene definido un color o imagen de fondo, se muestra el color o imagen de fondo de la propia página (si están definidos).

### Si una caja define tanto un color como una imagen de fondo, la imagen tiene más prioridad y es la que se visualiza. No obstante, si la imagen de fondo no cubre totalmente la caja del elemento o si la imagen tiene zonas transparentes, también se visualiza el color de fondo. Combinando imagenes transparentes y colores de fondo se pueden lograr efectos gráficos muy interesantes.
