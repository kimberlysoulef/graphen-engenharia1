<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Defina os dados do formulário
    $nome = $_POST['gname'];
    $email = $_POST['gmail'];
    $telefone = $_POST['cname'];
    $servico = $_POST['cage'];
    $mensagem = $_POST['message'];

    // Defina o destinatário
    $para = "graphen.engenharia@gmail.com";

    // Defina o assunto
    $assunto = "Nova Solicitação de Contato";

    // Montar o corpo do e-mail
    $corpo = "
    Nome: $nome\n
    Email: $email\n
    Telefone: $telefone\n
    Tipo de Serviço: $servico\n
    Mensagem:\n
    $mensagem
    ";

    // Definir o cabeçalho do e-mail
    $cabecalhos = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion();

    // Enviar o e-mail
    if (mail($para, $assunto, $corpo, $cabecalhos)) {
        echo "Sua solicitação foi enviada com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar sua solicitação. Tente novamente.";
    }
}
?>
