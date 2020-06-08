<?php

include_once __DIR__ . '/env.php';

$url = 'http://api.bsod.pw/api/wallet?address=';
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

//  Query for the Miner data, with wallet ID
$result_miner = file_get_contents($url . $wallet_id);

//  Parse as a JSON
$obj_miner = json_decode($result_miner);

//  Create a custom OBJ with filtered infos
$ravenconin_Rvn = array(
    "crypto" => $rvn->name,
    "symbol" => $rvn->symbol,
    "estimate" => $rvn->estimate,
    "paid24" => $obj_miner->paid24h,
    "unpaid" => $obj_miner->unpaid,
    "total" => $obj_miner->total,
);

var_dump($ravenconin_Rvn);
