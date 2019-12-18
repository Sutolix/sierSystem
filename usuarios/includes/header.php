<!doctype html>
<html lang="pt-br">
  <head>
    <title>Sier System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../usuarios/lib/bootstrap/css/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../usuarios/css/basic_style.css">
    <link rel="stylesheet" href="../usuarios/css/home_style.css">
    <link rel="stylesheet" href="../usuarios/css/order_style.css">
    <link rel="stylesheet" href="../usuarios/css/textOrder_style.css">
    <link rel="stylesheet" href="../usuarios/css/tabelaPedidos_style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"><!--Arquivo css que permite o uso de vários icones-->
    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  
  </head>
  <body>
  
    <div id="top">
      <img src="../usuarios/img/logo_sier.png" alt="Logo">
    </div>

    <div id="estabelecimento">
      <h4>Padaria São José</h4>
    </div>

    <div id="root"></div>

    <script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
    
    <script type="text/babel">

        function data_hora(){
            //jsx para mostrar
            const conteudo = (
                <div id="data_hora">
                    <p>Hoje é {new Date().toLocaleDateString()} e são {new Date().toLocaleTimeString()}.</p> {/*Quando o React encontra um {} ele permite que você ponha qualquer função do java script :D */} 
                     
                </div>
            )

            ReactDOM.render(
                conteudo,
                document.getElementById('root')
            )
        }
         
        setInterval(data_hora, 1000); {/*o que (no caso a constante tempo) e em quanto tempo deve ser atualizado (1s no caso)*/}

    </script>
    <div id="bot">
      <h5><a href="#"><i class="fas fa-users"></i> Informações de contato </a></h5>
    </div>