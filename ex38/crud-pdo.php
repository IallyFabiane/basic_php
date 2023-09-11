<?php 

    try {
        //Conexão com o Banco de Dados MySQL
         $pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost", "root", ""); // 1° DBNAME e HOST, 2° USERNAME, 3° PASSWORD
    } catch (PDOException $e) { //ERROS APENAS RELACIONADOS AO BANCO DE DADOS
        echo "Erro com o Banco de Dados: " . $e->getMessage();
    } catch (Exception $e) {
        echo "Erro genérico: ". $e->getMessage();
    }


    //Inserção de Dados-INSERT

    //$res = $pdo->prepare("INSERT INTO pessoa (nome, telefone, email) VALUES (:n, :t, :e)"); //serve para quando precisamos passar algum parâmetro e depois substituir
    //$res->bindValue(":n", "Edna"); //aceita variáveis, funções...
    //$res->bindValue(":t", "25509586");
    //$res->bindValue(":e", "edna@mail.com");
    //$res->execute();
   //$nome = "Miriam";
   // $res->bindParam(":n", $nome); não aceita valor passado diretamente, aceita apenas variáveis
   
   $pdo->query("INSERT INTO pessoa(nome, telefone, email) VALUES ('Carla', '56789090', 'carla@mail.com')"); //serve para quando não precisamos fazer nenhuma substituição


?>