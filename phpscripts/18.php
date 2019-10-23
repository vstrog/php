// Coupons generator
<?php
function generateUpc($upc_code)
{
    $odd_total = 0;
    $even_total = 0;
    for ($i = 1; $i <= strlen($upc_code); $i++) {
        //echo "Checking i=$i ({$upc_code[$i - 1]})...\n";
        if ($i % 2 == 0) {
            //echo "even\n";
            /* Sum even digits */
            $even_total += $upc_code[$i - 1];
        } else {
            //echo "odd\n";
            /* Sum odd digits */
            $odd_total += $upc_code[$i - 1];
        }
    }
    $sum = (3 * $even_total) + $odd_total;
    //echo "Sum: $sum\n";
    /* Get the remainder MOD 10*/
    $check_digit = $sum % 10;
    /* If the result is not zero, subtract the result from ten. */
    return ($check_digit > 0) ? 10 - $check_digit : $check_digit;
}
$coupons = [
    [
        'signature' => 9210,
        'description' => '10% off',
    ],
    [
        'signature' => 9329,
        'description' => '$10 off $50',
    ],
    [
        'signature' => 9342,
        'description' => '$15 off $75',
    ],
    [
        'signature' => 9335,
        'description' => '$20 off $100',
    ],
    [
        'signature' => 9384,
        'description' => '$40 off $200',
    ],
    [
        'signature' => 9390,
        'description' => '$60 off $400',
    ],
];
foreach ($coupons as $coupon) {
    echo "{$coupon['description']}:" . PHP_EOL;
    for ($i = 0; $i < 10; $i++) {
        $upc_code = '47000' . rand(0, 4) . rand(1000, 9999) . $coupon['signature'];
        echo $upc_code . generateUpc($upc_code) . PHP_EOL;
    }
    echo PHP_EOL;
}