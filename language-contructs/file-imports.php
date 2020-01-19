<?php
    echo "Include and Include_once\n";
    echo "include\n"; // Permite importar varios arquivos
    echo "include_once\n"; // Permite importar um arquivo e caso repita a importação um E_WARNING é exibido no terminal
    echo "Caso PHP não localiza o arquivo ele gera um E_WARNING no terminal\n\n";

    // Importa e avalia o conteúdo dos arquivos. Caso não seja localizado emite um E_COMPILE_ERROR e termina a execução
    echo "Required and required_once\n";
    echo "require\n"; // Permite importar varios arquivos
    echo "include_once\n"; // Permite importar um arquivo e caso repita a importação emite um E_COMPILER_ERROR termina a execução
?>