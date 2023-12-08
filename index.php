
<!doctype html>
<html lang="pt" >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">        
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </head>
    <body>    
        <header>
            <div class="navbar-header">
                <a class="logotipo" href="/" title="Início" rel="Início">
					<img src="img/logo.png" alt="Início">
			    </a>
            </div>
        </header>
        <div class="container menu">
            <br>
            <h1>Navarra</h1>
            <div id="firstDiv">
                <form action="endpoints.php" method="GET">
                    <p>Criar um endpoint GET que retorne sempre o status code 200. </p>
                    <input type="submit" class="btn btn-secondary" name="always200" id="always200" value="Testar">
                </form>
            </div>   
            <div id="secondDiv">
                <form action="endpoints.php" method="POST">
                    <p>Criar um endpoint POST que receba um array JSON (https://pastebin.pl/view/raw/8fced5f8) com
                    os elementos de uma fila de espera e que retorne o número total de elementos do array recebido.</p>
                    <input type="submit" class="btn btn-secondary" name="arrJson" id="arrJson" value="Testar">
                </form>
            </div>
            <div id="thirdDiv">
                <form action="endpoints.php" method="POST">
                    <p>Criar um endpoint POST que receba um array JSON com os elementos de uma fila de espera e que
                        retorne os elementos ordenados conforme as seguintes ponderações:

                        <li> 50% de importância: Ordenar os elementos pela maior quantidade. </li>
                        <li>30% de importância: Levar em consideração a melhor condição de pagamento,
                        com a ordem de prioridade seguindo a lógica: DIN > 30 > R60 > 90 > 120.</li>
                        <li>20% de importância: Dar prioridade aqueles com a designação "PORT".</li>
                        <li> Além da ordenação, deve adicionar a cada elemento do array o atributo
                        “previsao_consumo” obtido através da multiplicação da quantidade pela constante 5.</p>
                    <input type="submit" class="btn btn-secondary" name="apiResponse" id="apiResponse" value="Testar">
                </form>
            </div>
            <div id="fourthDiv">
                <form action="endpoints.php" method="POST">
                    <p>Consuma o seguinte URL (https://pastebin.pl/view/raw/8fced5f8) em forma de API e retorne os
                        mesmos dados.</p>
                    <button type="submit" class="btn btn-secondary" name="submit">Testar</button>
                </form>
            </div>   
        </div>     
        <footer>           
        </footer>    
    </body>
</html>
