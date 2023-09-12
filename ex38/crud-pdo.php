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
   
   //$pdo->query("INSERT INTO pessoa(nome, telefone, email) VALUES ('Carla', '56789090', 'carla@mail.com')"); //serve para quando não precisamos fazer nenhuma substituição

   //DELETE

   //$res = $pdo->prepare("DELETE FROM pessoa WHERE id = :id");
  // $id = 3;
   //$res->bindValue(":id", $id);
   //$res->execute();

   //UPDATE

   //$res = $pdo->prepare("UPDATE pessoa SET email = :e WHERE id = :id");
   //$res->bindValue(":e", "teste@hotmail.com");
   //$res->bindValue(":id", 4);
   //$res->execute();

   //SELECT

   $res = $pdo->prepare("SELECT * FROM pessoa WHERE id = :id");
   $res->bindValue(":id", 4);
   $res->execute();
   $array = $res->fetch(PDO::FETCH_ASSOC); //transformando os dados vindos do banco em um array. Retorna apenas uma linha do banco de dados. O parâmetro PDO::FETCH_ASSOC retorna como chave apenas o nome das colunas do banco de dados 
   //$res->fetchAll(); transformando os dados vindos do banco em um array.Retorna muitas linhas do banco de dados.
   foreach ($array as $key => $value) {
       echo $key . ": " . $value . "<br>";
   }
?>