'use strict';
// Calculadora básica con funciones

window.addEventListener('load', () => {
    function calculadora(num1,num2,operando){
        switch(operando){
            case '+':
                alert(num1 + num2);
                break;
            case '-':
                alert(num1 - num2);
                break;
            case '*':
                alert(num1 * num2);
                break;
            case '/':
                alert(num1 / num2);
        }
    }

    calculadora(12,8,'*');
});