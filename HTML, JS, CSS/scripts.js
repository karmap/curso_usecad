//alert('Hola Mundo');

var a = 10;
var b = 15;

var z = a;

// declaración en ES6
let c = 15;
const d = 30;

let alumno = {
    nombre : "Juan",
    edad : 24
};

let myString = "Hola mundo";


//regresar pares entre 0 y n
// function imprimePares(n) {

//     let myString = "Adentro de función";
    
//     for (let i = 1; i <= n ; i++) {
//         if( i%2 == 0 )
//            console.log(i);
//     }
//     console.log(myString);
    
// }

function imprimePares(n) {

    let pares = [];
    
    for (let i = 1; i <= n ; i++) {
        if( i%2 == 0 )
           pares.push(i);
    }   
    return pares;

}

// debe regresar un arreglo con las siguientes reglas
// si es multiplo de 3 regresar la palabra "tres"
// si es multiplo de 5 regresar la palabra "cinco"
// si es multiplo de 3 y de 5 regresar la palabra "ambos"
// si no simplemente regresar el numero
// ejempo: ingresas 5
// 1
// 2
// tres 
// 4
// cinco

//15 debe imprimir "ambos"

function multiplos(n) {
    let res = [];
    
    for (let i = 1; i <= n ; i++) {
        if( i%3 == 0 && i%5 == 0 ){
            res.push("ambos");
        }
        else if( i%3 == 0 )
           res.push("tres");
        else if( i%5 == 0 ){
            res.push("cinco");
        }
        else{
            res.push(i);
        }
    } 

    return res;
}

console.log( multiplos(30) );

function clickNumero() {
    console.log( Math.floor(Math.random()*11) );  
}


// console.log("string" == typeof myString);
// console.log(typeof a);

// console.log(typeof alumno);
// console.log(alumno);


// console.log( a + " - " + b);
