//Ejercicio 2 | Interface

//Crear una interface en TypeScript a partir de este código JavaScript:

//var spiderman = {
//  nombre: "Peter parket",
//  poderes: ["trepar", "fuerza", "agilidad", "telas de araña"]
//};


interface Superheroe {
    nombre: string;
    poderes: string[];
  }
  
  const spiderman: Superheroe = {
    nombre: "Peter Parker",
    poderes: ["trepar", "fuerza", "agilidad", "telas de araña"],
  };
  