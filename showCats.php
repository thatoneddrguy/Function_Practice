<?php

function getFiles($dirloc)
{
    //get a list of files from directory
    //trim the names and set to lowercase
    //if file name is . or .. or thumbs.db then loop back
    //break apart the file name
    //if file has png or jpg extension, add to array
    //return array
    $filenames = array();
    $files = scandir($dirloc);
    //foreach($files as $fn)
    foreach($searchfor as $s)
    {
        $fn = trim(strtolower($fn));
        if($fn=="." || $fn==".." || $fn=="thumbs.db")
        {
            continue; //go back to line 13
        }
        $filenx = explode(".",$fn);
        if($filenx[1]=="png" || $filenx[1]=="jpg")
        {
            $filename[] = $fn;
        }
    }
    return $filenames;
}

?>
<html>
    <head>
        <title>Show Cats</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <table>
            <?php
            $catfiles = getFiles("\catsimg"); //need catsimg folder in htdcos ofc
            foreach($catfiles as $c)
            {
                $r1 = "<tr><td>";
                $r2 = "<img src='..\catsimg\".$c."'>";
                $r3 = "</td></tr>";
            }
            ?>
        </table>
    </body>
</html>
