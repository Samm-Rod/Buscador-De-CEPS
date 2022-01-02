<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <?php 
        $address = (object) [
            'cep' => '',
            'logradouro' => '',
            'bairro' => '',
            'localidade' => '',
            'uf' => ''
        ];

        if(isset ($_GET['cep'])){
            $cep = $_GET['cep'];
           // $cep = preg_replace('/[^0-9]','',$cep);
            $cep = isset($_GET['cep'])?$_GET['cep']:0;
            $url = "https://viacep.com.br/ws/{$cep}/json/";

            $address = json_decode(file_get_contents($url));
            //print_r ($address); 
        }else{
            $address->cep = 'CEP invalido!';
        }
        

    ?>
    </pre>
    <div class="div">
        <form method="get" action="PHP API.php">
            <h3>Digite um CEP: </h3>
            <input type="number" class="cep" value="<?php echo $address->cep ?? '' ?>" placeholder="Cep"
                name="cep" /><br />
            <input type="submit" class="sub" value="Consultar" /><br />
            <input type="text" class="log" value="<?php echo $address->logradouro ?? '' ?>" placeholder="Logradouro"
                name="logradouro" /><br />
            <input type="text" class="bai" value="<?php echo $address->bairro ?? '' ?>" placeholder="Bairro"
                name="bairro" /><br />
            <input type="text" class="loc" value="<?php echo $address->localidade ?? '' ?>" placeholder="Localidade"
                name="localidade" /><br />
            <input type="text" class="uf" value="<?php echo $address->uf ?? '' ?>" placeholder="Uf" name="uf" /><br />

        </form>

    </div>

    <div class="api">
        <p>API do projeto /</p>
        <a class="ap" href="https://viacep.com.br/ws/01001000/json/">
            https://viacep.com.br/ws/01001000/json/</a>
        </h3>
    </div>

    <div>
        <style>
        body {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(90, 15, 221, 0.639093137254902) 58%, rgba(0, 212, 255, 1) 100%);
        }


        p {
            position: relative;
            display: flex;
            padding: 10px;
            margin: 0 500px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
        }

        .ap {
            list-style: none;
            text-decoration: none;
            position: relative;
            display: flex;
            padding: 10px;
            margin: 0 500px;
            font-family: sans-serif;
            color: white;
        }



        h3 {
            display: flex;
            position: relative;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: rgb(12, 99, 231);
            font-size: 25px;
        }

        .div {
            display: inline-flex;
            justify-content: center;
            margin: 0 450px;
            padding: 50px;
            padding-top: 1%;
            background-color: cornflowerblue;
            border-radius: 10px;
            box-shadow: 0 0 10px;
        }


        .cep {
            margin: 0 0 5px;
            display: inline-flex;
            height: 35px;
            width: 300px;
            text-align: start;
            font-size: 16px;
            align-items: center;
            border-radius: 5px;
            border: none;
        }

        .sub {
            margin: 0 0 5px;
            display: inline-flex;
            height: 30px;
            width: 305px;
            justify-content: center;
            font-size: 17px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            align-items: center;
            background-color: rgb(0, 132, 255);
            color: white;
            border-radius: 5px;
            border: none;
        }

        .log {
            margin: 0 0 5px;
            display: inline-flex;
            height: 35px;
            width: 300px;
            text-align: start;
            font-size: 16px;
            border-radius: 5px;
            border: none;
        }

        .bai {
            margin: 0 0 5px;
            display: inline-flex;
            height: 35px;
            width: 300px;
            text-align: start;
            font-size: 16px;
            border-radius: 5px;
            border: none;
        }

        .loc {
            margin: 0 0 5px;
            display: inline-flex;
            height: 35px;
            width: 300px;
            text-align: start;
            font-size: 16px;
            border-radius: 5px;
            border: none;
        }

        .uf {
            margin: 0 0 5px;
            display: inline-flex;
            height: 35px;
            width: 300px;
            text-align: left;
            font-size: 16px;
            border-radius: 5px;
            border: none;
        }
        </style>
    </div>
</body>

</html>