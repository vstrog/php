//print date in Y-m-d format

<?php
    echo DateTime::createFromFormat('Y.m.d', '2017.09.11')->format('Y-m-d');
