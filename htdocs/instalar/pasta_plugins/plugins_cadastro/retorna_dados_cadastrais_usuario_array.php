<?php


// retorna dados de usuario -----------------------

function retorna_dados_cadastrais_usuario_array($idusuario){


// globals ----------------------------------------------

global $tabela_banco; // tabela

// --------------------------------------------------------


// tabela usando -------------------------------------

$tabela_banco_usando = "$tabela_banco[1]"; // tabela usando

// --------------------------------------------------------


// query obtem url de imagem --------------------

$query = "select *from $tabela_banco_usando where idusuario='$idusuario';"; // query obtem url de imagem

// ---------------------------------------------------------


// comando --------------------------------------------

$comando = comando_executa($query); // comando

// ---------------------------------------------------------


// dados ------------------------------------------------

$dados = mysql_fetch_array($comando, MYSQL_ASSOC); // array com dados

// ---------------------------------------------------------


// retorna os dados ----------------------------------

return $dados; // retorna os dados

// --------------------------------------------------------


};

// --------------------------------------------------------


?>