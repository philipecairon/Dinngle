<?php




// funcao para salvar arquivo ------------------------------------------

function func_salvar_arquivo($endereco, $conteudo){


// remove comentarios -------------------------------------------------

$conteudo = remove_comentarios($conteudo); // remove comentarios

// ----------------------------------------------------------------------------




// endereço de arquivo -------------------------------------------------

$arquivo = fopen($endereco, "w+"); // abrindo ponteiro de arquivo

// ----------------------------------------------------------------------------




// salvando aquivo ------------------------------------------------------

fwrite($arquivo, $conteudo); // escrevendo arquivo

// ----------------------------------------------------------------------------




// fechando arquivo -----------------------------------------------------

fclose($arquivo); // fechando arquivo

// ----------------------------------------------------------------------------




};

// ----------------------------------------------------------------------------




?>
