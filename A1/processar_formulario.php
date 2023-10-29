<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    
    // Dados a serem salvos no arquivo
    $dados = "Nome: $nome\nE-mail: $email\nMensagem: $mensagem\n\n";
    
    // Nome do arquivo onde os dados serão salvos
    $arquivo = "mensagens.txt";
    
    // Abre o arquivo em modo de escrita, adicionando ao final
    $file = fopen($arquivo, "a");
    
    if ($file) {
        fwrite($file, $dados);
        fclose($file);
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao salvar a mensagem.";
    }
} else {
    echo "Erro no envio do formulário.";
}
?>
