<?php 

    try {
        //Conexão com o Banco de Dados MySQL
         $pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost", "rooti", ""); // 1° DBNAME e HOST, 2° USERNAME, 3° PASSWORD
    } catch (PDOException $e) { //ERROS APENAS RELACIONADOS AO BANCO DE DADOS
        echo "Erro com o Banco de Dados: " . $e->getMessage();
    } catch (Exception $e) {
        echo "Erro genérico: ". $e->getMessage();
    }

?>