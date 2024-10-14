'use strict';
//Reversa de una cadena

let palabra = prompt('Introduce una palabra');

function palindromo(palabra){
    for (let i = 0, j = palabra.length - 1; i < j; i++, j--) {
        if (palabra[i] !== palabra[j]) {
            return false;
        }
    }
    return true;
}

function reversa(palabra){
    let aux = ' ';
    for(let i = palabra.length - 1; i >= 0; i--){
        aux = aux + palabra[i];
    }
    console.log(aux);
}

reversa(palabra);

if(palindromo(palabra)){
    console.log('Es palindromo');
}else{
    console.log('No es palindromo');
    
}