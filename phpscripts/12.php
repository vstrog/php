//PHP files Sort

<?php
   $dir = new FilesystemIterator(__DIR__, FilesystemIterator::SKIP_DOTS);
$ext = ['php'];
$files = [];
 
foreach ($dir as $fileinfo) {
    if (!in_array($fileinfo->getExtension(), $ext)) continue;
    $files[$fileinfo->getMTime()][] = $fileinfo->getFilename();
}
krsort($files);
var_dump($files);