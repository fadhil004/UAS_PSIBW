<?php

function HitungDamage($level, $item){
    $damage = 1.5 * $level * $item;
    return $damage;
}

echo "Damage : " . HitungDamage(5,10);

echo "</br>";

function TotalPower(...$power){
    $totalPower = 0;
    foreach ($power as $val) {
        $totalPower += $val;
    }

    return $totalPower;
}

echo "Total Power : " . TotalPower(1,2,3,4,5,6,7,8);

?>