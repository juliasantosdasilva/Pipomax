<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CINE PIPOMAX </title>
    <link rel="shortcut icon" href="img/logocinema.png">
  
    
    <style>
        @font-face {
    font-family: "red";
    src: url("KGRedHands.ttf");
}

@font-face {
    font-family: "lemon";
    src: url("LEMONMILK-Bold.otf");
}

@font-face {
    font-family: "medium";
    src: url("LEMONMILK-MediumItalic.otf");
}


h1 {
    margin-left: 25px;
    margin-right: 25px;
    font-family: "lemon";
    text-shadow: 8px 5px 3px black;
    text-align: center;
    font-size: 90px;
    color: white;
    padding: 40px;
    height: 120px;
    background-color: rgb(0, 0, 151);
}


h2 {
    font-size:50px;
    font-family: "lemon";
    text-align: center;
    color: rgb(255, 255, 255);
}

body {
    background-color: rgb(12, 12, 12);
    margin-top: -60px;
    text-align: center;
    justify-items: center;
    position: static;
}


p {
    font-family: "lemon" ;
    letter-spacing: 1px;
    font-size: 20px;
    text-align: center;
    color: white;
}


img {
    width: 200px;
    align-items: center;
}


button {
    padding:5px;
    background-color: #456fee;
    width: 10%;
}

a {
    font-family: "lemon";
    font-size: 35px;
    color: white;
    text-align: center;
    text-decoration:none;
}

.recibo {
    align-items: center;
}



        
    </style>
   
</head>
<body>
<br>

    <h1>PIPOMAX</h1>

    
    <h2>Ingresso</h2>
 
                <div class="recibo"> 
                    <img src="recibo.png">
                 </div>

    <?php 

       $ingresso = $_GET ["filme"];

       switch ($ingresso) {
          case 1:
            case 2:
                case 3:
                    case 4:
                        case 5:
                            case 6:
                                case 7:
                                    case 8:
                                        case 9:
                                            case 10:
                                                case 11:
                                                    case 12:
                                                        case 13:
                                                            case 14:
                                                                case 15:
                                                                    case 16:
                                                                        case 17:
                                                                            case 18:
                                                                            

                echo "<p>Compra realizada com sucesso!</p>";
             
                                                    
            }

             ?>

             <?php
                        
                $n1 = 33;  //* ingresso do filme
                $n2 = 0;   //* nenhum
                $n3 = 15;  //* pipoca
                $n4 = 12;  //* refrigerante
                $n5 = 7;   //* balas
                $n6 = 23;  //* pipoca e refigerante
                $n7 = 37;   //* combo: 2 refrigerantes + 1 pipoca + bibs
                $n8 = 42;   //* 2 pipocas + 1 refrigerante


                $total = $_GET ["comida"];

                switch ($total) {

                case 1:
                        echo "<p>O valor total é de R$ ". ($n1 + $n2).",00.</p>";
                        break;
                    case 2:
                            echo "<p>O valor total é de ". ($n1 + $n3).",00 reais.</p>";
                            break;
                        case 3:
                                echo "<p>O valor total é de ". ($n1 + $n4).",00 reais.</p>";
                                break;
                            case 4:
                                    echo "<p>O valor total é de ". ($n1 + $n5).",00 reais.</p>";
                                    break;
                                case 5:
                                        echo "<p>O valor total é de ". ($n1 + $n6).",00 reais.</p>";
                                        break;
                                    case 6:
                                            echo "<p>O valor total é de ". ($n1 + $n7).",00 reais.</p>";
                                            break;
                                        case 7:
                                                echo "<p>O valor total é de ". ($n1 + $n8).",00 reais.</p>";
                                                

                        }

                ?>

                <br>
          <button>
          <a href="index.html">Voltar</a>
         </button>

    




</body>
</html>