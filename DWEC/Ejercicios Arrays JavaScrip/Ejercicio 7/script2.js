'use strict';

function comparacionLista(lis1, lis2){
    let sumaLista1 = 0;
    let sumaLista2 = 0;
    for(let i = 0; i < 3; i++){
        sumaLista1 += lis1[i];
    }
    for(let j = 0; j < 3; j++){
        sumaLista2 += lis2[j];
    }
    if(sumaLista1 < sumaLista2){
        console.log("El valor acumulado de la lista 2 es mayor");
    }else if(sumaLista1 > sumaLista2){
        console.log("El valor acumulado de la lista 1 es mayor");
    }else{
        console.log("Los valores son iguales");
    }
}

// Cargamos las listas estaticas

let lista1 = [20,30,10];
let lista2 = [30,20,10];
comparacionLista(lista1,lista2);