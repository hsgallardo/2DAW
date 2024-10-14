'use strict';
// FizzBuzz

window.addEventListener('load', () => {
    let num = Number(prompt('Hasta que numero quieres'))

    for(let i = 1; i <= num; i++){
        if(i % 3 == 0)
            document.write(`Fizz <br>`);

        if(i % 5 == 0)
            document.write(`Buzz <br>`);
        else
        document.write(`${i} <br>`);
    }
});