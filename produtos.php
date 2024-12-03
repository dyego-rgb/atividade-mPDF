<?php
$produtos = [
    [
        'nome' => 'carne de boi',
        'categoria' => 'carnes',
        'preco' => '25.90',
        'descricao' => 'carne de boi vermelha'
    ],
    [
        'nome' => 'Macarrão',
        'categoria' => 'massa',
        'preco' => '20.90',
        'descricao' => 'macarrão dona benta integral'
    ],
    [
        'nome' => 'carne de frango',
        'categoria' => 'carnes',
        'preco' => '30.70',
        'descricao' => 'carne de frango desfiada'
    ],
    [
        'nome' => 'alface',
        'categoria' => 'legumes',
        'preco' => '5.90',
        'descricao' => 'alface crespa'
    ],
    [
        'nome' => 'alvejante',
        'categoria' => 'limpeza',
        'preco' => '13.90',
        'descricao' => 'alvejante'
    ]
];
 
require_once '../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
 
 
$html = '
<h1>Relatório de Produtos</h1>
<p>Data de geração: 31/10/24 </p>
<table border="1" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th>Nome</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>';
 
foreach ($produtos as $produto) {
    $html .= '
        <tr>
            <td>' . $produto['nome'] . '</td>
            <td>' . $produto['categoria'] . '</td>
            <td>' . $produto['preco'] . '</td>
            <td>' . $produto['descricao'] . '</td>
        </tr>';
}
$html .= '</tbody></table>';
 
 
$mpdf->WriteHTML($html);
$mpdf->Output();
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade mPDF</title>
</head>
<body>
   
</body>
</html>