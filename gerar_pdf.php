<?php
//refencia o namespace Dompdf
use Dompdf\Dompdf;

//carregar composer 
require 'vendor/autoload.php';

// Receber dados do formulário

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados['btn-gerar'])) {

    $conteudo_pdf = "<!DOCTYPE html>";
    $conteudo_pdf .= "<html lang='pt-BR'>";
    $conteudo_pdf .= "<head>";
    $conteudo_pdf .= "<meta charset='UTF-8'>";
    $conteudo_pdf .= "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
    $conteudo_pdf .= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    $conteudo_pdf .= "</head>";
    $conteudo_pdf .= "<body>";
    $conteudo_pdf .= "Nome " . $dados['nome'] . "<br>";
    $conteudo_pdf .= "E-mail " . $dados['email'] . "<br>";
    $conteudo_pdf .= "Descrição " . $dados['descricao'] . "<br>";
    $conteudo_pdf .= "</body>";
    $conteudo_pdf .= "</html>";

    //instanciar a classe Dompdf
    $dompdf = new Dompdf();

    //Chamar o metodo loadhtml e enviar conteudo do PDF
    $dompdf->loadHtml($conteudo_pdf);

    //configurar tamnaho e orientação do papel
    //landscape -imprimir no formato paisagem
    //$dompdf->setPaper('A4', 'landscape');
    //portrait - imprimir no formato retrato
    $dompdf->setPaper('A4');

    //renderizar o html como PDF
    $dompdf->render();

    //gerar o pdf
    $dompdf->stream();
} else {
    header("Location: index.php");
}
