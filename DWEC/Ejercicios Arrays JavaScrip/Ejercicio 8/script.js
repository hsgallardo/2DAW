window.addEventListener('load', () => {
    let numeros = [];
    let tamaño = 5;
    let pares = 0;
    let impares = 0;

    let cargar = numeros => {
        for(let i = 0; i < tamaño; i++){
            numeros.push(Number(prompt('Introduce numero')));
        }
    };
    let parImpar = numeros => {
        for(numero of numeros){
            numero % 2 === 0 ? pares++ : impares++;
        }

        alert(`Hay ${pares} pares`);
        alert(`Hay ${impares} impares`);
    };

    cargar (numeros);
    parImpar (numeros);
   
});

