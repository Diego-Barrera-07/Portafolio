let i = 0;
let objeto = document.querySelector('.notificacion-tipo-1'); 
let icono = document.querySelector('.icono_visible');
let temporizador = 
    setInterval(() => {
        if(i == 3){
            objeto.classList.add('on');
        }
        if(i === 10){
            objeto.classList.remove('on');
            icono.classList.add('on');
        }
        if(i === 13){
            let stop = true;
            return stop;
        }
        // console.log(i);
    
        i++;
    }, 1000);

if(stop === true){
    temporizador = clearInterval(temporizador);
}