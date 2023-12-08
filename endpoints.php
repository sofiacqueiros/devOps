<?php

if (isset($_GET['always200'])) {  

   http_response_code(200);
   echo "Sucesso";
}

if (isset($_POST['arrJson'])) {
  
    $url = 'http://pastebin.pl/view/raw/8fced5f8';
    $apiResponse = file_get_contents($url);        
    $apiResponse = json_decode($apiResponse);
    $totalElementos = count($apiResponse);

    echo json_encode(['total_elementos' => $totalElementos]);
}



if (isset($_POST['apiResponse'])) {
    
    $url = 'https://pastebin.pl/view/raw/8fced5f8';
    $apiResponse = file_get_contents($url);

    if ($apiResponse === false) {
        http_response_code(500);
    }

    $list = json_decode($apiResponse, true);

    $compare = function ($a, $b) {
        //compare quantity first
        $compQty = $b['quantidade'] <=> $a['quantidade'];
       
        $payment = ['DIN', '30', 'R60', '90', '120'];
        $compCondition = array_search($a['condicao_pagamento'], $payment) <=> array_search($b['condicao_pagamento'], $payment);

        // make "PORT" with priority
        if ($a['pais'] === 'PORT' && $b['pais'] !== 'PORT') {
            return -1;
        } elseif ($a['pais'] !== 'PORT' && $b['pais'] === 'PORT') {
            return 1;
        }
    };

    //sort with conditions
    usort($list, $compare);

   
    foreach ($list as &$detail) {
        $detail['previsao_consumo'] = $detail['quantidade'] * 5;
    }
    echo json_encode(['apiResponse' => $list]);
}


if (isset($_POST['submit'])) {
    
    $url = 'https://pastebin.pl/view/raw/8fced5f8';
    $apiResponse = file_get_contents($url);

    $list = json_decode($apiResponse, true);

    echo "<table>";
    foreach ($list as $k => $va ) {
        echo "<th>$k</th>";

        foreach ($va as $key => $value ) {

        echo "<tr><td>$key</td><td>$value</td></tr>";
        }
    }
	echo "</table>";
   
}