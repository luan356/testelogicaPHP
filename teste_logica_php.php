<?php
$banco="logica";
$servidor="localhost";
$usuario="root";
$senha="";



date_default_timezone_set('America/Sao_Paulo');
try {
    $pdo = new PDO("mysql:dbname=$banco;host=$servidor","$usuario","$senha");

    $query=$pdo->query("SELECT Tb_banco.nome as nome_Banco,Tb_convenio.verba, tb_contrato.codigo as codi_Contrato, tb_contrato.data_inclusao,tb_contrato.valor,tb_contrato.prazo
    FROM tb_contrato, Tb_convenio_servico,Tb_convenio,Tb_banco");
    $res=$query->fetchAll(PDO::FETCH_ASSOC);
     echo '<br><pre>' ;   print_r($res) ;   echo'</pre>' ;
     

   

} catch (\Throwable $th) {
    echo "ERRO AO CONECTAR COM O BANCO DE DADOS <br><br><hr>".$th."<hr>";
}




 


?>