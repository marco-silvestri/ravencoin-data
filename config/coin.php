<?php 

$currencies_url = 'http://api.bsod.pw/api/currencies';

//  Call the url and ask for currencies data
$result_currencies = file_get_contents($currencies_url);

//  Parse the result as a JSON
$obj_currencies = json_decode($result_currencies);

//  Filter the results for RVN
foreach ($obj_currencies as $currency){
    if ($currency->symbol == 'RVN'){
        $rvn = $currency;
    }
};

return [
    'coin' => [
        "crypto" => $rvn->name,
        "symbol" => $rvn->symbol,
        "estimate" => $rvn->estimate,
    ]
];
