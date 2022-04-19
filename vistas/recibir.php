<?php
    require('../fpdf/fpdf.php');
    $con=mysqli_connect('localhost','root','','compras') or die('Error en la conexion servidor');
    
    //require 'recibir.php';
    $consulta = "SELECT * FROM usuarios";
    $result = $con -> query($consulta);
    class PDF extends FPDF{

    function Header(){
        $this->SetFont('Arial','B',15);
        $this->Cell(60);
        $this->Cell(70,10,'Reporte de consultas',1,0,'C');
        $this->Ln(20);

        $this->Cell(10, 10, 'Id',1,0,'C',0);
        $this->Cell(40, 10, 'Nombre',1,0,'C',0);
        $this->Cell(40, 10, 'telefono',1,0,'C',0);
        $this->Cell(50, 10, 'Email',1,0,'C',0);
        $this->Cell(50, 10, 'Condicion',1,1,'C',0);

    }

    function Footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    }
    }

    $pdf = new PDF();
    $pdf -> AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
 
    while ($row =  $result->fetch_assoc()){
        $pdf->Cell(10, 10, $row['id'],1,0,'C',0);
        $pdf->Cell(40, 10, $row['nombre'],1,0,'C',0);
        $pdf->Cell(40, 10, $row['telefono'],1,0,'C',0);
        $pdf->Cell(50, 10, $row['email'],1,0,'C',0);
        $pdf->Cell(50, 10, $row['condicion'],1,1,'C',0);

    }

    $pdf->Output();

    
    $sql="INSERT INTO usuarios 
    VALUES (null, '".$_POST["nombre"]."','".$_POST["telefono"]."','".$_POST["email"]."','".$_POST["username"]."','".$_POST["pass"]."','".$_POST["condicion"]."','".$_POST["genero"]."')";
    
    $resultado = mysqli_query($con,$sql) or die ('Error en la sequencia de la base de datos');

    mysqli_close($con);

?>