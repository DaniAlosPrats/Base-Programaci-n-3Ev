<?php

class modelo extends Connection {


    public function getAllProductos() {
        $query  = "SELECT * FROM PRODUCTO";
        $resultado = $this->conn->query($query);
        if(!$resultado){
            die("Error en la consulta: " . $this->conn->error);
        }
        $producto =  array();
        while($file  = $resultado->fetch_object()) {
            $producto[]=$file;
        }
         return $producto;
    }

    public function showAllProductos(){
        $producto = $this->getAllProductos();
        echo "<table>
        <tr>
            <th>PROD_NUM</th>
            <th>DESCRIPCION</th>
           
        </tr>";
foreach ($producto as $productos) {
    echo "<tr>
            <td>" . $productos['PROD_NUM'] . "</td>
            <td>" . $productos['DESCRIPCION'] . "</td>
       
          </tr>";
}
echo "</table>";
}
public function getAllEmp() {
    $query  = "SELECT EMP_NO, APELLIDOS, DEPT_NO , SALARIO FROM EMP";
    $resultado = $this->conn->query($query);
    if(!$resultado){
        die("Error en la consulta: " . $this->conn->error);
    }
    $empleado =  array();
    while($file  = $resultado->fetch_object()) {
        $empleado[]=$file;
    }
     return $empleado;
}
public function showAllEmp() {
    $empleados = $this->getAllEmp();
    echo "<table >
            <tr>
                <th>EMP_NO</th>
                <th>APELLIDOS</th>
                <th>SALARIO</th>
            </tr>";
    foreach ($empleados as $empleado) {
        echo "<tr>
                <td>" . $empleado['EMP_NO'] . "</td>
                <td>" . $empleado['APELLIDOS'] . "</td>
                <td>" . $empleado['SALARIO'] . "</td>
              </tr>";
    }
    echo "</table>";
}
public function getAllCliente($order) {
    $query = "SELECT CLIENTE_COD, NOMBRE, CIUDAD FROM CLIENTE ORDER BY NOMBRE $order ";
    $resultado = $this->conn->query($query);
    if(!$resultado){
        die("Error en la consulta: " . $this->conn->error);
    }
    $cliente =  array();
    while($file  = $resultado->fetch_object()) {
        $cliente[]=$file;
    }
     return $cliente;
}
public function showAllCliente($order) {
    $clientes = $this->getAllCliente($order);
    echo "<table>
            <tr>
                <th>CLIENTE_COD</th>
                <th>NOMBRE</th>
                <th>CIUDAD</th>
            </tr>";
    foreach ($clientes as $cliente) {
        echo "<tr>
                <td>" . $cliente['CLIENTE_COD'] . "</td>
                <td>" . $cliente['NOMBRE'] . "</td>
                <td>" . $cliente['CIUDAD'] . "</td>
              </tr>";
    }
    echo "</table>";
}
public function getPedidoOver($total) {
    $consulta = "SELECT PEDIDO_NUM, CLIENTE_COD, TOTAL FROM PEDIDO WHERE TOTAL >= $total";
    $resultado = $this->conn->query($consulta);
    if (!$resultado) {
        die("Error en la consulta: " . $this->conn->error);
    }
    $pedidos = array();
    while ($fila = $resultado->fetch_assoc()) {
        $pedidos[] = $fila;
    }
    return $pedidos;
}

public function showPedidoOver($total) {
    $pedidos = $this->getPedidoOver($total);
    echo "<table border='1'>
            <tr>
                <th>PEDIDO_NUM</th>
                <th>CLIENTE_COD</th>
                <th>TOTAL</th>
            </tr>";
    foreach ($pedidos as $pedido) {
        echo "<tr>
                <td>" . $pedido['PEDIDO_NUM'] . "</td>
                <td>" . $pedido['CLIENTE_COD'] . "</td>
                <td>" . $pedido['TOTAL'] . "</td>
              </tr>";
    }
    echo "</table>";
}
public function getLineasPedido($pedido) {
    $consulta = "SELECT PEDIDO_NUM, DETALLE_NUM, IMPORTE FROM detalle WHERE PEDIDO_NUM = $pedido";
    $resultado = $this->conn->query($consulta);
    if (!$resultado) {
        die("Error en la consulta: " . $this->conn->error);
    }
    $lineasPedido = array();
    while ($fila = $resultado->fetch_assoc()) {
        $lineasPedido[] = $fila;
    }
    return $lineasPedido;
}

public function getLineasPedidoMayor($pedido) {
    $consulta = "SELECT MAX(IMPORTE) FROM detalle WHERE PEDIDO_NUM = $pedido";
    $resultado = $this->conn->query($consulta);
    if (!$resultado) {
        die("Error en la consulta: " . $this->conn->error);
    }
    $fila = $resultado->fetch_assoc();
    return $fila['max_importe'];
}

public function showLineasPedido($pedido) {
    $lineasPedido = $this->getLineasPedido($pedido);
    $max_importe = $this->getLineasPedidoMayor($pedido);
    echo "<table >
            <tr>
                <th>PEDIDO_NUM</th>
                <th>DETALLE_NUM</th>
                <th>IMPORTE</th>
            </tr>";
    foreach ($lineasPedido as $linea) {
        echo "<tr>
                <td>" . $linea['PEDIDO_NUM'] . "</td>
                <td>" . $linea['DETALLE_NUM'] . "</td>
                <td>" . ($linea['IMPORTE'] == $max_importe ? $linea['IMPORTE'] . " <img src='estrella.png' alt='*' width='20px' height='20px'>" : $linea['IMPORTE']) . "</td>
              </tr>";
    }
    echo "</table>";
}

 }
