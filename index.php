<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Inicio</title>
    <link rel="shortcut icon" href="img/favicon3.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="menu-up">
            <div class="contenido">
                <div>
                    <p class="logo">DBos</p>
                </div>
                <div class="iconos-up">
                    <div>
                        <p class="anuncio">Dale click a este icono si necesitas ayuda -></p>
                    </div>
                    <div><img src="img/help.png" alt="" class="icono-up icono_visible"></div>
                    <div><img src="img/cambiar-tamano-expandir.png" alt="" class="icono-up"></div>


                    <div><img src="img/wifi.png" alt="" class="icono-up"></div>


                    <div>
                        <p class="hora">12:11</p>
                    </div>
                    <div>
                        <p class="horario"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cuerpo">
            <div class="inicio">
                <!-- <p class="tag"></p> -->
                <p class="title_ini">Bienvenido a DBos - Mi portafolio</p>
                <div class="box_ini">
                    <p class="text_ini">Esta adaptación de interfaz de sistema operativo es mi portafolio, lo he desarrollado con <span class="resaltar">Html</span>, <span class="resaltar">Css</span> y <span class="resaltar">Javascript</span> se piensa implementar <span class="resaltar">PHP</span> para que cualquier persona pueda reutilizar esta
                        interfaz, de igual forma implementar el Framework <span class="resaltar">ReactJs</span></p>
                    <p class="title_ini_2">¿Para qué te sirve cada ícono?</p>
                    <p class="text_ini">Dale click en cualquier icono para conocer más sobre él</p>
                    <div class="grid-ini">
                        <div class="grid-mini-box" onclick="mostrarTexto('icono1')">
                            <div class="box-img">
                                <img src="img/folder.png" alt="" class="icono-ini">
                            </div>
                            <div>
                                <p>Proyectos</p>
                            </div>
                        </div>
                        <div class="grid-mini-box" onclick="mostrarTexto('icono2')">
                            <div class="box-img">
                                <img src="img/code.png" alt="" class="icono-ini">
                            </div>
                            <div>
                                <p>Habilidades</p>
                            </div>
                        </div>
                        <div class="grid-mini-box" onclick="mostrarTexto('icono3')">
                            <div class="box-img">
                                <img src="img/man.png" alt="" class="icono-ini">
                            </div>
                            <div>
                                <p>Sobre mi</p>
                            </div>
                        </div>
                        <div class="grid-mini-box" onclick="mostrarTexto('icono4')">
                            <div class="box-img">
                                <img src="img/contact-info.png" alt="" class="icono-ini">
                            </div>
                            <div>
                                <p>Contacto</p>
                            </div>
                        </div>
                        <div class="grid-mini-box onclick=" onclick="mostrarTexto('icono5')">
                            <div class="box-img">
                                <img src="img/setting(1).png" alt="" class="icono-ini">
                            </div>
                            <div>
                                <p>Configuración</p>
                            </div>
                        </div>
                    </div>
                    <p class="text-icon">
                        <!-- El icono de <span class="resaltar">Proyectos</span> te llevará a una ventana flotante que te mostrara todos
                        los proyectos en los que he trabajado. -->
                    </p>
                    <p class="boton_close" onclick="closeInicio()">
                        Iniciar a explorar
                    </p>
                </div>

            </div>
            <p class="saludo">Bienvenido</p>
            <p class="saludo_2"><span class="letrasCambiantes"></span></p>
            <div class="notificaciones">
                <div class="notificacion-tipo-1">
                    <div>
                        <p class="mensaje_noti">¿Quieres saber cómo funciona esta página?</p>
                    </div>
                    <div>
                        <button class="noti-b">Ver más</button>
                    </div>
                </div>
                <!-- <div class="notificacion-tipo-1">
                    <div>
                        <p class="mensaje_noti">Version 1.1</p>
                    </div>
                    <div>
                        <button class="noti-b">Ver más</button>
                    </div>
                </div> -->
            </div>
            <div class="ventana1 ventanas">
                <div class="grid-vent-1">
                    <div>
                        <h1>Biblioteca de proyectos</h1>
                    </div>
                    <div class="circulos">
                        <div class="circulo-1" onclick="windowReduce('.ventana1',' .grid-vent-1')"></div>
                        <div class="circulo-2" onclick="windowExpand('.ventana1', '.grid-vent-1','.grid-vent-1-2', '.circulo-2')"></div>
                        <div class="circulo-3" onclick="showWindow('.ventana1', '.circulo-3' )"></div>
                    </div>
                </div>
                <div class="grid-vent-1-2">
                    <p class="title-biblio">¡Conoce los proyectos que he hecho!</p>
                    <p class="info-proyectos">Estos proyectos han sido elaborados en practicas y por aprendizaje. Se uso <span class="resaltar">Javascript</span>,
                        <span class="resaltar">PHP</span>, <span class="resaltar">CSS</span> y <span class="resaltar">HTML</span>. Además de que sus diseños son <span class="resaltar">Responsive</span>.
                    </p>
                    <div class="grid-proyectos">
                        <div class="proyecto">
                            <a href="https://copystarlinkpage.000webhostapp.com/" target="blank">
                                <div class="img-proyecto img--proyecto--1"></div>
                                <div>
                                    <p class="nombre-proyecto">Recreación Starlink</p>
                                </div>
                            </a>
                        </div>
                        <div class="proyecto">
                            <a href="https://cafecquimicos.000webhostapp.com/" target="blank">
                                <div class="img-proyecto img--proyecto--2"></div>
                                <div>
                                    <p class="nombre-proyecto">Cafec quimicos</p>
                                </div>
                            </a>
                        </div>
                        <div class="proyecto">
                            <a href="https://www.youtube.com/watch?v=tTzngEMJYX4&t=10s" target="blank">
                                <div class="img-proyecto img--proyecto--3"></div>
                                <div>
                                    <p class="nombre-proyecto">Recreación de Linktree</p>
                                </div>
                            </a>
                        </div>
                        <div class="proyecto">
                            <div class="img-proyecto"></div>
                            <div>
                                <p class="nombre-proyecto">Quimicos CAFEC</p>
                            </div>
                        </div>
                        <div class="proyecto">
                            <div class="img-proyecto"></div>
                            <div>
                                <p class="nombre-proyecto">Quimicos CAFEC</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="ventana2 ventanas">
                <div class="grid-vent-2">
                    <div>
                        <h1>Habilidades</h1>
                    </div>
                    <div class="circulos">
                        <div class="circulo-1" onclick="windowReduce('.ventana2',' .grid-vent-2')"></div>
                        <div class="circulo-2" onclick="windowExpand('.ventana2', '.grid-vent-2','.grid-vent-2-2', '.circulo-2')"></div>
                        <div class="circulo-3" onclick="showWindow('.ventana2', '.grid-vent-2')"></div>
                    </div>
                </div>
                <div class="grid-vent-2-2">
                    <iframe class="skills-page" src="skills.html" frameborder="0"></iframe>
                </div>
            </div>
            <div class="ventana3 ventanas">
                <div class="grid-vent-3 animacion">
                    <div>
                        <h1>Sobre mi</h1>
                    </div>
                    <div class="circulos">
                        <div class="circulo-1" onclick="windowReduce('.ventana3',' .grid-vent-3')"></div>
                        <div class="circulo-2" onclick="windowExpand('.ventana3', '.grid-vent-3', '.grid-vent-3-2', '.circulo-2')"></div>
                        <div class="circulo-3" onclick="showWindow('.ventana3', '.grid-vent-3', '.circulo-3')"></div>
                    </div>
                </div>
                <div class="grid-vent-3-2">
                    <div class="img-me"><img src="img/me.jpeg" alt="" class="img-about-me"></div>
                    <div class="info-me">
                        <p class="text-me"> Me dedico a la programación desde hace un año, bueno, desde hace dos sin embargo antes no tuve las posibilidades de seguir haciéndolo por factores económicos. Ahora, puedo seguir aprendiendo e implementado ello en diferentes tipos de paginas web. Siendo así que conozco en un nivel intermedio los lenguajes de Javascript y Php, además de forma avanzada el lenguaje etiquetas Html y estilos Css. A lo largo de este año he desarrollado algunas webs con bases de datos y otras con solo javascript y sus respectivos diseños o parte de Front – end, manejo bien las bases de datos, mi herramienta utilizada por ahora es Mysql. Resido en Yopal, Colombia. Siempre me ha apasionado aprender a programar, desde haber visto series y documentales sobre esto, hasta el punto de adentrarme poco a poco al tema, hasta cursar un técnico en programación de software en el cual obtuve un desempeño alto. Me gusta lo minimalista, hacer tareas que me sean retos, aportar y dar conocimientos a las personas que están hasta ahora aprendiendo. Por otro lado, estoy aprendiendo ReactJs, ya luego de esto pienso seguir avanzando por este camino MERN, así que voy dando paso por paso. Este soy yo, una persona con intereses que crecen y que no se van a detener.
                        </p>
                        <h4>Visita mi canal de Youtube o conoce un poco más de mi en Instagram </h4>
                        <div class="redes">
                            <a href="https://www.youtube.com/channel/UCJq8ofl1smAUq35dq_UxOEA" target="blank">
                                <img src="img/youtube.png" alt="" class="img-redes">
                            </a>
                            <a href="https://www.instagram.com/diego_barrera.c/?hl=es" target="blank">
                                <img src="img/instagram.png" alt="" class="img-redes-1">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ventana4 ventanas">
                <div class="grid-vent-4 animacion">
                    <div>
                        <h1>Contactame</h1>
                    </div>
                    <div class="circulos">
                        <div class="circulo-1" onclick="windowReduce('.ventana4',' .grid-vent-4')"></div>
                        <div class="circulo-2" onclick="windowExpand('.ventana4', '.grid-vent-4', '.grid-vent-4-2', '.circulo-2')"></div>
                        <div class="circulo-3" onclick="showWindow('.ventana4', '.grid-vent-4')"></div>
                    </div>
                </div>
                <div class="grid-vent-4-2">
                    <div class="formulario">
                        <form action="" method="post">
                            <div><textarea name="" id="" cols="30" rows="10" placeholder="Escribe tu mensaje"></textarea></div>
                            <div class="grid-enviar">
                                <div><input type="email" name="" id="" class="correo" placeholder="Tu correo"></div>
                                <div><button type="submit" class="boton">Enviar</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-down">
            <!-- <div class="alt">
                <p class="nameThing">Proyectos</p>
            </div> -->
            <div class="menu-icons">
                <div class="caja_icono"> <img class="icono icono1" src="img/folder.png" alt="Projects" onclick="showWindow('.ventana1', '.circulo-3')"> </div>
                <div class="caja_icono"> <img class="icono icono2" src="img/code.png" alt="" onclick="showWindow('.ventana2', '.circulo-3')"> </div>
                <div class="caja_icono"> <img class="icono icono3" src="img/man.png" alt="" onclick="showWindow('.ventana3', '.circulo-3')"> </div>
                <div class="caja_icono"> <img class="icono" src="img/contact-info.png" alt="" onclick="showWindow('.ventana4', '.circulo-3')"> </div>
                <div class="caja_icono"> <img class="icono" src="img/setting(1).png" alt=""> </div>
            </div>
        </div>
    </div>
    <script src="js/windows.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="js/cambioLetras.js"></script>
    <!-- <script src="js/alertas.js"></script> -->
</body>


</html>