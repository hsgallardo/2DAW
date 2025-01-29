//Ejercicio 1

//Deberá crear una clase con una variable pública de cada tipo (string
//number, boolean, any, Array) un constructor e instanciar un objeto y luego compilar el typescript a js.


class ExampleClass {

    public text: string; 
    public count: number; 
    public isActive: boolean; 
    public data: any; 
    public items: Array<string>; 
  
    constructor(
      text: string,
      count: number,
      isActive: boolean,
      data: any,
      items: Array<string>
    ) {
      this.text = text;
      this.count = count;
      this.isActive = isActive;
      this.data = data;
      this.items = items;
    }
  }
  

  const exampleInstance = new ExampleClass(
    "Hola, TypeScript", 
    42, 
    true, 
    { key: "value" }, 
    ["item1", "item2", "item3"] 
  );
  

  console.log(exampleInstance);
  