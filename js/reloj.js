
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
    hora = momentoActual.getHours()
    minuto = momentoActual.getMinutes()
    segundo = momentoActual.getSeconds()

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
    function horario(){
        horaNumero = new Number(hora);
        if(horaNumero < 12  ){
            return 'a.m.';
        } else {
            return 'p.m.';
        }
    }
    let horarioReturn = horario();
    // function cambioFormato (){
    //     horaNumero = new Number(hora);
    //     if(horaNumero > 13){
    //         hora = 0;
    //         hora = new String(hora);
    //         hora = 0 + hora;
    //         console.log(hora);
    //     }
    // }
    // cambioFormato();
    horaImprimible = hora + " : " + minuto ;
    horaMostrar.innerHTML = horaImprimible;
    HorarioMostrar.innerHTML = horarioReturn;
    // console.log(hora)
    // document.form_reloj.reloj.value = horaImprimible
    // console.log(horaImprimible);

}
setInterval(() => {
    mueveReloj();
}, 1000) 