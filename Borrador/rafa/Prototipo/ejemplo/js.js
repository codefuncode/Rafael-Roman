// async function getData(data) {
//     let myObject = await fetch(data);
//     return myObject;

// }
// let json = getData("php.php");

// console.log(json);

var inpin_stock = document.getElementById("inpin_stock");

function exe(argument) {

    const myRequest = new Request('php.php');

    fetch(myRequest)
        .then(response => response.json())
        .then(data => {

            getdata(data);

        })
        .catch(console.error);

}

function getdata(argument) {
    let matriz = argument;
    // console.log(argument);
    let valores = []
    for (var i = 0; i < matriz.length; i++) {
        valores.push(matriz[i].stocknumber)

    }

    obtener(valores, matriz);

}

function obtener(argument, matriz) {

    console.log('=============================================================================');
    var datos_resividos;
    var matriz_resivida;
    // console.log(argument);
    datos_resividos = argument;
    matriz_resivida = matriz;
    // console.log(inpin_stock.value);
    // for (var i = 0; i < datos_resividos.length; i++) {
    //     let resultado = datos_resividos[i].indexOf(inpin_stock.value);
    //     // console.log(resultado);

    //     if (resultado != -1) {
    //         console.log("En el indice " + i + " la conicedencia es " + datos_resividos[i]);
    //     } else {
    //         console.log("En el indice " + i + " no hay coninsidencia");
    //     }

    // }

    for (var i = 0; i < matriz_resivida.length; i++) {
        let resultado = matriz_resivida[i].stocknumber.indexOf(inpin_stock.value);
        if (resultado != -1) {
            console.log('Datos completos de la coincidencia ' + i);
            console.log("# id " + matriz_resivida[i].idprueba);
            console.log(matriz_resivida[i].stocknumber);
            console.log(matriz_resivida[i].binlocation);
            console.log(matriz_resivida[i].binaviability);
        } else {
            console.log("No hay coninsidencia para el indece " + i);
        }

    }
}

inpin_stock.addEventListener("keyup", function() {
    exe();
});