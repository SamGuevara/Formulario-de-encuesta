# Formulario-de-encuesta
El proyecto fue creado para una encuesta de satisfacción de los clientes, lo que buscamos principalmente es conocer la opinión que obtuvieron por medio de su experiencia con nuestro servicio. Para poder hacer un análisis más detallado los datos son guardados en una base de datos con PHP y MySQL.

# Tecnología usada en el proyecto

## HTML:
Se usaron etiquetas <div>, <form>, <fieldset>, <label>, <input> y <button> para dar forma a la estructura del formulario. A cada una se le asignó una clase para poder vincularlas a la hoja de estilo en CSS, como se buscaba que la encuesta fuera amigable se crearon dos campos uno con interacción de estrellas para puntuar el servicio, y el otro con checkbox para que marquen más de una opción. Así mismo se incluye una sección donde pueden dejar sus comentarios.

## CSS:
Se aplicaron estilos al formulario por medio de la hoja de estilos. Para ello se usaron selectores de tipo generales y de clase, a los cuales se les dieron diferentes propiedades y valores para llegar al resultado esperado, también se dieron efectos visuales a las estrellas para una mejor interacción con el usuario.

## PHP:
Para iniciar con la redacción del código, se utilizaron dos funciones para mostrar errores en el navegador cuando el código fue puesto a prueba. Después de esto se realizó la conexión con la base de datos local por medio del planteamiento de variables una estructura condicional para notificar si hay algún error al realizar la conexión. Para la obtención de datos defino una variable que transforme las estrellas en un número, también incluye una que permita almacenar más de una opción en los checkbox y una última que permite guardar los comentarios.

## MySQL:
La base de datos fue creada usando "phpMyAdmin" desde el panel de Xampp. No se utilizó código SQL, pero si se utilizó el motor de MySQL, todo se realizó por medio de la interfaz gráfica de "phpMyAdmin".
Para crearla se procedió usando una base de base de datos ya existente (registro_usuarios, ver proyecto de registro de usuario) y dentro de esta se creó una nueva tabla (respuesta_encuesta). De la última se completaron los campos solicitados para cada columna, teniendo en cuenta los nombres dados en el formulario HTML para cada columna. Los datos llegan a la base de datos desde el formulario antes mencionado y su conexión con PHP.

# Descargar el archivo
- Busca el botón verde que dice <>Code
- Hace click en la fecha que tiene el botón
- Selecciona "Download ZIP"
- Descomprime el archivo ZIP
  Como tiene archivos PHP y está vinculado a MySQL vamos a:
- Moverlo a la carpeta "htdocs" (se ubica en el sistema, la ruta es /opt/lampp/htdocs, puede variar según sea tu sistema operativo)

# Creando la base de datos
- Abre XAMPP, activa los servidores.
- Ve al navegador, en la barra de URL coloca "http://localhost" (te lleva a la página principal de tu servidor local)
- Busca "phpmyadmin"
- Busca la base de datos "registro_usuarios"
- Una vez lista, selecciona "Importar"
- Donde dice "Examinar", busca la ruta del archivo SQL que viene en la carpeta del proyecto
- Baja hasta el final y click al botón "Importar"

# Ejecutar en el navegador
- En la barra de URL coloca "http://localhost/nombre_de_la_carpeta/index.html"
- Enter y eso abrirá el formulario

# Agradecimientos
A los profesores Gustavo Rojas y Carolina Riveros por su arduo trabajo al enseñarnos, y a Punto Digital San Martín Mza. por la oportunidad de este cursado.
