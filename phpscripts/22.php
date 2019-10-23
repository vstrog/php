// Associate foreachFunc array iteration 

<?php
echo "this is associative array we need to iterate
this with foreach only because the foreach loop 
is used to iterate an associative array"."\n\n";
$d = array("ganapathi"=>"99", "shiva"=>"99","vishnu"=>"99","krishna"=>"99","manjunath"=>"99","vishwanath"=>"99","venkateshwaraswamy"=>"99","narasimha"=>"99", );
foreach($d as $key=>$value)
{
    echo "$key => $value\n";
    
}
echo "\n";
echo "using for loop: \n\n";
$e= array(12,21,25,35,36,34,6,54,6,7,6,6,7,6,7);
for ($i=0;$i<count($e);$i++)
{
    echo "$e[$i]"."\n";
}