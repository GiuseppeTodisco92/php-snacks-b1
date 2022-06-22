<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

    $partite_basket = [
            [
                'squadraincasa' => 'bisceglie',
                'squadraospite' => 'molfetta',
                'punteggiocasa' => 50,
                'punteggioospite' => 45,
            ],
            [
                'squadraincasa' => 'giovinazzo',
                'squadraospite' => 'molfetta',
                'punteggiocasa' => 60,
                'punteggioospite' => 30,
            ],
            [
                'squadraincasa' => 'bisceglie',
                'squadraospite' => 'giovinazzo',
                'punteggiocasa' => 45,
                'punteggioospite' => 55,
            ],
        ];

    for($i=0; $i < count($partite_basket); $i++){
        echo $partite_basket[$i]['squadraincasa']." - ".$partite_basket[$i]['squadraospite']." | ".$partite_basket[$i]['punteggiocasa']."-".$partite_basket[$i]['punteggioospite']."<br>" ;
    }
    
?>