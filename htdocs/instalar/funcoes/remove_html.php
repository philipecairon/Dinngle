<?php


// remove codificação html ---------------------------------------------------------

function remove_html($codigo_html_html){


// remove codificação html --------------------------------------------------------

$codigo_html_html = addslashes($codigo_html_html); // remove aspas duplas

$codigo_html_html = strip_tags($codigo_html_html); // remove codigo html

// ------------------------------------------------------------------------------------------


// retorna --------------------------------------------------------------------------------

return $codigo_html_html; // retorno

// ------------------------------------------------------------------------------------------


};

// -------------------------------------------------------------------------------------------------------------------


?>