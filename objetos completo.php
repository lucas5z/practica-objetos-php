<?php

class Curso{
    public $curso;
    public $credito;
    public $nota;

    public function __construct($curso,$cretido,$nota){
        $this->curso=$curso;
        $this->credito=$cretido;
        $this->nota=$nota;
    }

}
// es 

$notafinal=array();
//funcion promedi final 
function Promediofinal($semenestres){
    //global $notafinal;
    $suma=0;
    foreach ($semenestres as $semenestre){
        $k=0;
        foreach($semenestre as $curso){
            $suma+=$curso->nota;
        }
        $pro=round($suma/count($semenestre),2);
        $notafinal[$k]=$pro;
        $k++;

    }
    $sumaaa=array_sum($notafinal);
    $profinal=round($sumaaa/count($semenestres),2);
    echo "<table>";
    echo "<tr>";
    echo "<th>Promedio</th>";
    echo "<th>      </th>";
    echo "<th> $profinal </th>";
    echo "</tr>";
    echo "</table>";
}
//promedio
function Promedio($semenestre){
    global $notafinal;
    $suma=0;
    foreach($semenestre as $curso){
        $suma+=$curso->nota;
    }
    $pro=round($suma/3,2);
   
    return $pro;

}
// inicio curso -credito -nota
function inicio(){
    
    echo "<tr>";
    echo "<th>curso </th>";
    echo "<th>creditos </th>";
    echo "<th>nota </th>";
    echo "</tr>";
   
}
//promedio 
function prome($semenestre){
    $p=Promedio($semenestre);
    echo "<tr>";
    echo "<th>Promedio</th>";
    echo "<th> </th>";
    echo "<th> $p </th>";
    echo "</tr>";
}
//semestres 
$semenestre1=array(
    new Curso("matematica",5,15),
    new Curso("comu",3,14),
    new Curso("mate",4,12),
);
$semenestre2=array(
    new Curso("matemaa",3,18),
    new Curso("matema",4,15),
    new Curso("tematica",5,13),
);
$semenestre3=array(
    new Curso("matematica",4,16),
    new Curso("matematica",4,11),
    new Curso("matica",6,13),
);
$semenestre4=array(
    new Curso("matematica",3,19),
    new Curso("tica",2,17),
    new Curso("matematica",7,15),
);
$semenestre5=array(
    new Curso("ca",5,14),
    new Curso("matica",4,18),
    new Curso("maca",3,16),
);
//arrry general
$semestres=array(
    $semenestre1,
    $semenestre2,
    $semenestre3,
    $semenestre4,
    $semenestre5,
);
//semestre correspondiente
function coresen($sen){
    echo "<tr>";
    echo "<td> Semestres $sen </td>";
    echo "<td> </td>";
    echo "<td> </td> ";
    echo "</tr>";
}
//info del semestre
function semestr($semenestre){

    foreach($semenestre as $cur){
        echo "<tr>";
        echo "<td> $cur->curso</td>";
        echo "<td> $cur->credito</td>";
        echo "<td> $cur->nota </td> ";
        echo "</tr>";
   
    }
   
}

//el despliege de los cuadros
function despliege($semenestre,$sen){
    echo "<table>";
    coresen($sen);
    inicio();
    semestr($semenestre);
    prome($semenestre);
    echo "</table>";
}

//la lllamanda de despliege 
despliege($semenestre1,"2021-2");
despliege($semenestre2,"2022-1");
despliege($semenestre3,"2022-2");
despliege($semenestre4,"2023-1");
despliege($semenestre5,"2023-2");
//promedio final

Promediofinal($semestres);

?>

<style>
table {
    width: 90%;
    border-collapse: collapse;
    margin: 20px 40px;
    font-size: 16px;
    border: 2px solid #333;
}

th, td {
    text-align: left;
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

td{
    background-color: #008080;
    color: #fff;
}
th{
    background-color: #F5F5DC;

}

</style>















