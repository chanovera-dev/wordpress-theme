<main id="main">

    <?php include(TEMPLATEPATH . '/parts/sections/title-article.php'); ?>

    <section class="container">

        <div class="section content-section">

            <article class="content">

                <figure>
                    <img src="ruta-de-la-imagen.jpg" alt="Descripción de la imagen">
                    <figcaption>Figura 1: Descripción de la imagen</figcaption>
                </figure>

                <h2>Introducción</h2>
                <p>Este es un ejemplo de un artículo que contiene varias etiquetas HTML.</p>

                <p>Este es el cuerpo principal del artículo donde se incluye el contenido relevante.</p>
                <ul>
                    <li>Elemento de lista no ordenada 1.</li>
                    <li>Elemento de lista no ordenada 2.</li>
                    <li>Elemento de lista no ordenada 3.</li>
                </ul>
                <ol>
                    <li>Elemento de lista ordenada 1.</li>
                    <li>Elemento de lista ordenada 2.</li>
                    <li>Elemento de lista ordenada 3.</li>
                </ol>

                <blockquote>
                    <p>Este es un bloque de cita dentro del contenido.</p>
                </blockquote>

                <p>Y aquí hay un fragmento de código:</p>
                <pre>
                    <code>
                        // Esto es un ejemplo de código en HTML
                        &lt;p&gt;Hola mundo&lt;/p&gt;
                    </code>
                </pre>

                <h2>Multimedia</h2>

                <p>A continuación, se muestra un video y un audio:</p>

                <video controls>
                    <source src="ruta-del-video.mp4" type="video/mp4">
                    Tu navegador no soporta el elemento video.
                </video>

                <audio controls>
                    <source src="ruta-del-audio.mp3" type="audio/mpeg">
                    Tu navegador no soporta el elemento audio.
                </audio>

                <h2>Enlaces</h2>
                <p>Enlace a un sitio web: <a href="https://www.ejemplo.com">Ejemplo.com</a></p>

                <h2>Tabla</h2>

                <table>
                    <tr>
                        <th>Encabezado 1</th>
                        <th>Encabezado 2</th>
                        <th>Encabezado 3</th>
                    </tr>
                    <tr>
                        <td>Dato 1</td>
                        <td>Dato 2</td>
                        <td>Dato 3</td>
                    </tr>
                    <tr>
                        <td>Dato 4</td>
                        <td>Dato 5</td>
                        <td>Dato 6</td>
                    </tr>
                </table>

                <h2>Formulario</h2>

                <form>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" required></textarea>

                    <input type="submit" value="Enviar">
                </form>

            </article>

            <?php include(TEMPLATEPATH . '/parts/sidebars/articles.php'); ?>

        </div>

    </section>

    <section class="container comments-section-wrapper">

        <div class="section comments-section">

            <div class="comments">
                <?php comments_template(); ?>
            </div>

            <?php 
                if ( comments_open() ) : include(TEMPLATEPATH . '/parts/widgets/address.php');
                else:
                endif;
            ?>

        </div>

    </section>

</main>