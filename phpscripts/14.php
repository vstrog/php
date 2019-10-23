//Array sort

$arr = [1, 40, 10, 35, 60, 11, 73 , 3];
    
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = (count($arr) - 1); $j > $i; $j--) {
            if ($arr[$j] > $arr[$j-1]) {
                $tmp = $arr[$j];
                
                $arr[$j] = $arr[$j - 1];
                $arr[$j -1 ] = $tmp;
            }
        }
    }

    print_r($arr);