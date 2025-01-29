//Ejercicio 1
//Deberá crear una clase con una variable pública de cada tipo (string
//number, boolean, any, Array) un constructor e instanciar un objeto y luego compilar el typescript a js.
var ExampleClass = /** @class */ (function () {
    function ExampleClass(text, count, isActive, data, items) {
        this.text = text;
        this.count = count;
        this.isActive = isActive;
        this.data = data;
        this.items = items;
    }
    return ExampleClass;
}());
var exampleInstance = new ExampleClass("Hola, TypeScript", 42, true, { key: "value" }, ["item1", "item2", "item3"]);
console.log(exampleInstance);
