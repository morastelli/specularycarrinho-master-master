<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <!--ICON NA GUIA-->
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="estiloCarrinho.css">
</head>
<body>
    <!--LOGO E SETA-->
    <div class="logo">
        <a href="telaInicial.html"><img src="setaespeculary.jpg" class="seta"></a>
        <img src="logoetexto.png" class="logoTamanho">
    </div> 
     <!--TÍTULO-->
     <div class="titulo">
         <h2>Seu carrinho</h2>
     </div>
     
     <!--PRODUTOS-->
     <div class="prot">
        <div name="imagem" id="imagem" class="imagem"><img class="armacao" scale="10%" src="armacaovermelha.png"></div>
        <div class="resto">
            <div class="texto">
                <h4 name="nome" id="nome">Armação Vermelha</h4>
                <h5 name="preco" id="preco">R$50,00</h5>
            </div>
            <div class="addremove">
                <button id="btn_decrementar" type="button" class="remove">-</button>
                <p name="quantidade" class="number" id="contador">1</p>
                <button id="btn_incrementar" type="button" class="add">+</button>
            </div>
            Armação Vermelha Unisex
        </div>
     </Div>
     
     <!--BOTÃO FINALIZE SEU PEDIDO-->
    <div class="alinhaBotao">
        <a href="compra.html"><button>Finalize seu pedido</button></a>
    </div>
</body>
<script>
const btnIncrementar = document.getElementById("btn_incrementar");
const btnDecrementar = document.getElementById("btn_decrementar");
const p$ = document.getElementById("contador");

let contador = 1;

p$.innerHTML = contador;

btnIncrementar.addEventListener("click", function()
{
  contador++;

  p$.innerHTML = contador;
})
btnDecrementar.addEventListener("click", function()
{
  contador--;

  p$.innerHTML = contador;
    if (contador <= 0)
    {
        window.confirm("Deseja remover o item do carrinho?")
    }
    else
    {

    }
})

console.log(btnIncrementar);
console.log(p$);
</script>
</html>