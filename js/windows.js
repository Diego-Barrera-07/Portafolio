function showWindow(elemento, estado) {
    // console.log(estado);
    elemento = document.querySelector(elemento);
    // elemento.classList.toggle('value');
    botonCerrar = document.querySelector(estado);
    subElementos = document.querySelectorAll('.ventanas');
    // console.log(subElementos);
    subElementos.forEach(element => {
        if (elemento != subElementos) {
            element.classList.remove('open');
            elemento.classList.add('open');
        }
    });
    botonCerrar.addEventListener('click', () => {
        elemento.classList.remove('open');
    })
    // console.log("Estoy funcionando");
}

function windowExpand(elemento, header, pseudoelemento) {
    elemento = document.querySelector(elemento);
    header = document.querySelector(header);
    pseudoelemento = document.querySelector(pseudoelemento);
    elemento.classList.toggle('value');
    if (elemento.toggleAttribute('value') === true) {
        header.classList.add('change');
        elemento.classList.add('completas');
        pseudoelemento.classList.add('change');
    } else {
        header.classList.remove('change');
        elemento.classList.remove('completas');
    }

}


function mostrarTexto(objeto, textoMostrar) {
    textIcon = document.querySelector('.text-icon');
    // console.log(textoMostrar)
    // console.log(objeto);
    switch (objeto) {
        case 'icono1':
            textIcon.innerHTML = "Este icono de <span class='resaltar'>Proyectos</span> abrira una ventana flotante en la pantalla, la cual te mostrara todos los proyectos en los que he trabajado";

            break;
        case 'icono2':
            textIcon.innerHTML = "Este icono te mostrara todas mis <span class='resaltar'>Habilidades</span> en distintas herramientas";
            break;
        case 'icono3':
            textIcon.innerHTML = "Este icono te mostrara infomacíon <span class='resaltar'>Sobre mi</span>";
            break;
        case 'icono4':
            textIcon.innerHTML = "Este icono de <span class='resaltar'>Contacto</span> te mostrara una ventana donde podrás enviarme un correo electronico contandome sobre lo que necesites";
            break;
        case 'icono5':
            textIcon.innerHTML = 'Este icono de configuración no está disponible por ahora, podrás cambiar colores y crear tu propia interfaz sin codigo';
            break;

        default:
            console.log('No existe este icono')
            break;
    }
}


function closeInicio() {
    document.querySelector('.inicio').classList.add('off');
    iniciarContador = true;

    if (iniciarContador == true) {
        let i = 0;
        let objeto = document.querySelector('.notificacion-tipo-1');
        let icono = document.querySelector('.icono_visible');
        let anuncio = document.querySelector('.anuncio');
        anuncio.classList.add('off');
        let temporizador =
            setInterval(() => {
                if (i == 3) {
                    objeto.classList.add('on');
                }
                if (i === 10) {
                    objeto.classList.remove('on');
                    icono.classList.add('on');
                    icono.classList.add('change');
                    anuncio.classList.remove('off');
                }
                if (i === 15) {
                    anuncio.classList.add('off');
                    icono.classList.remove('change');
                }
                if (i === 16) {
                    let stop = true;
                    return stop;
                }
                // console.log(i);

                i++;
            }, 1000);

        if (stop === true) {
            temporizador = clearInterval(temporizador);
        }
    } else {
        console.log('Tenemos un error')
    }
}


function mostrarAyuda() {
    let iconoAyuda = document.querySelector('.icono_visible');
    iconoAyuda.addEventListener('click', () => {
        document.querySelector('.inicio').classList.remove('off');
    })

    let verMas = document.querySelector('.noti-b');
    verMas.addEventListener('click', () => {
        document.querySelector('.inicio').classList.remove('off');
    })


}
mostrarAyuda();


// var hoy = new Date;
// var hora = hoy.getHours();
// var minutos = hoy.getMinutes();
// var minutosNow = minutos;
// var segundos = hoy.getSeconds();
// var segundosNow = segundos;
// let minutero ="";
// setInterval(() => {
//     minutero++;
//     segundos = segundosNow++;
//     console.log(segundos);
//     if(segundos == 60){
//         segundos = 0;
//     }
// }, 1000);
function mueveReloj() {
    let horaMostrar = document.querySelector('.hora');
    let HorarioMostrar = document.querySelector('.horario');
    momentoActual = new Date()
    hora = momentoActual.getHours();
    minuto = momentoActual.getMinutes();
    segundo = momentoActual.getSeconds();

    str_segundo = new String(segundo)
    if (str_segundo.length == 1) {
        segundo = "0" + segundo
    }
    str_minuto = new String(minuto)
    if (str_minuto.length == 1) {
        minuto = "0" + minuto
    }
    str_hora = new String(hora)
    if (str_hora.length == 1) {
        hora = "0" + hora;
    }
    estado = '';
    function horario() {
        horaNumero = new Number(hora);
        if (horaNumero < 12) {
            return 'a.m.';
        } else {
            return 'p.m.';
        }
    }
    let horarioReturn = horario();
    function cambioFormato() {
        horaNumero = new Number(hora);
        horaNumero = horaNumero % 12;
        hora = new String(horaNumero);
        return hora;
    }
    let a = cambioFormato();
    cambioFormato();
    horaImprimible = hora + " : " + minuto;
    horaMostrar.innerHTML = horaImprimible;
    HorarioMostrar.innerHTML = horarioReturn;
    // console.log(hora)
    // document.form_reloj.reloj.value = horaImprimible
    // console.log(horaImprimible);

}
setInterval(() => {
    mueveReloj();
}, 1000)


// === Quitar eriqueta 000webhost
// document.addEventListener("DOMContentLoaded", function(){
// 	let div = document.querySelectorAll("div");
//     div[div.length-1].style.display = "none";
// });
