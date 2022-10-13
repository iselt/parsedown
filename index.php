<?php

include './parsedown/Parsedown.php';

function md2html($title, $file)
{

    echo '<!doctype html>';
    echo '<html>';
    echo '<head>';
    echo '<meta charset = "utf-8">';
    echo '<title>'.$title.'</title>';
    echo '</head>';
    
    echo '<body>';
    $parser = new Parsedown();
    $markdown = file_get_contents($file);
    echo $parser->text($markdown);
    echo '</body>';
    
    echo '</html>';
    
}

md2html('Parsedown', 'readme.md');

?>