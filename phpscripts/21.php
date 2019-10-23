//Energy using calculator

<?php

function calculateEnergyUsage($fSelfConsumptionRatio, $fRate, $fFIRate, $fSystemSize, $fDailyUsage){
    $iSunHours = 10;            
    $fEfficiencyFactor = .4;
                
                
    $aDailyData = array();
                
    $aDailyData['POWER_PRODUCED'] = round($fSystemSize * $iSunHours * $fEfficiencyFactor, 2);
                
    $aDailyData['POWER_CONSUMED'] = round($aDailyData['POWER_PRODUCED'] * $fSelfConsumptionRatio, 2);
    if($aDailyData['POWER_CONSUMED'] > $fDailyUsage){
        $aDailyData['POWER_CONSUMED'] = round($fDailyUsage, 2);
    }
                
    $aDailyData['POWER_EXPORTED'] = round($aDailyData['POWER_PRODUCED'] - $aDailyData['POWER_CONSUMED'], 2);
                
    $aDailyData['POWER_PURCHASED'] = round($fDailyUsage - $aDailyData['POWER_CONSUMED'], 2);
    if($aDailyData['POWER_PURCHASED'] < 0){
        $aDailyData['POWER_PURCHASED'] = 0;
    }
                                
    $aDailyData['COST_POWER_CONSUMED'] = round($fRate * $aDailyData['POWER_CONSUMED'], 2);

    $aDailyData['COST_POWER_EXPORTED'] = round($fFIRate * $aDailyData['POWER_EXPORTED'], 2);

    $aDailyData['SAVINGS'] = round($aDailyData['COST_POWER_EXPORTED'] + $aDailyData['COST_POWER_CONSUMED'], 2);

    $aDailyData['NEW_COST'] = round(($fDailyUsage*$fRate)-($aDailyData['COST_POWER_CONSUMED']+$aDailyData['COST_POWER_EXPORTED']), 2);

    $aDailyData['ORIGINAL_COST'] = round($fDailyUsage * $fRate, 2);


    return $aDailyData;            
}

echo(VAR_EXPORT(calculateEnergyUsage(.4, .22, .09, 4, 13.6)));