let totalVendidoCadena = 0;

let ciudades = parseInt(prompt("Ingrese el número de ciudades (C):"));
let tiendasPorCiudad = parseInt(prompt("Ingrese el número de tiendas por ciudad (T):"));
let empleadosPorTienda = parseInt(prompt("Ingrese el número de empleados por tienda (N):"));

for (let ciudad = 1; ciudad <= ciudades; ciudad++) {
    let ventasCiudad = 0;

    for (let tienda = 1; tienda <= tiendasPorCiudad; tienda++) {
        let ventasTienda = 0;

        for (let empleado = 1; empleado <= empleadosPorTienda; empleado++) {
            let ventasEmpleado = parseFloat(prompt(`Ingrese las ventas del empleado ${empleado} en la tienda ${tienda} de la ciudad ${ciudad}:`));
            ventasTienda += ventasEmpleado;
            totalVendidoCadena += ventasEmpleado;
        }

        document.getElementById("entradas").innerHTML += `En la tienda ${tienda} de la ciudad ${ciudad} se vendió: $${ventasTienda.toFixed(2)}<br>`;
        ventasCiudad += ventasTienda;
    }

    document.getElementById("salidas").innerHTML += `En la ciudad ${ciudad} se vendió un total de: $${ventasCiudad.toFixed(2)}<br>`;
}

document.getElementById("salidas").innerHTML += `La cadena "SLOW CAR" recaudó en total: $${totalVendidoCadena.toFixed(2)}`;
