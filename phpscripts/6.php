//Define PHP Closure::call()

<?php
   class myClass {
      private $x = 1;
   }

   // PHP 7+ code, Define
   $value = function() {
      return $this->x;
   };

   print($value->call(new myClass));