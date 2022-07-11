function sumaDeDosNumeros() {

    var num1 = 5;
    var num2 = 9;

    var nombre = 'Nilsen';
    var apellido = 'Martinez';

    var suma = num1 + num2;

    var nombreCompleto = nombre + ' / ' + apellido;

    //console.log(nombreCompleto);

    if (num2 > num1) {
        alert('es mayor');
    }

}


// while
// do while
// for


function bucles() {
    var n1 = 1;
    var n2 = 2;
    var resul = 4;

    while (n1 < n2) {
        //condicion
        console.log(result);
    }

    var i = 0;
    do {
        i = i + 1;
        console.log(i);
    } while (i < 5);

    Resultado:
        1
    2
    3
    4
    5

    for (var i = 0; i < 9; i += 2) {
        console.log(i);
    }

    resultado:
        0
    1
    2
    3
    4
    5
    6
    7
    8

}

function arrays() {

    var miCarro = new Object();
    miCarro.marca = 'Ford';
    miCarro.modelo = 'Mustang';
    miCarro.anio = 1969;

    var miCarro = {
        marca: 'Ford',
        modelo: 'Mustang',
        anio: 1969
    };

    console.log(miCarro);

}


function retornaValores(a, b, c) {
    var a = 1;
    var b = 1;
    var c = 1;
    return a + b + c;
}


var suma = retornaValores();