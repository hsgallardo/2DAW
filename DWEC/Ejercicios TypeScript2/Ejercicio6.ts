//Problema 6

//Dado el código siguiente, tendremos que crear una interfaz que sirvadespués para validar el objeto.
//var camaleon = {
//tipo: "reptil",
//peculiaridad: "camuflarse"
//}

interface Animal {
    tipo: string;
    peculiaridad: string;
}

const camaleon: Animal = {
    tipo: "reptil",
    peculiaridad: "camuflarse"
};

console.log(camaleon);
