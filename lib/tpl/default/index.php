<?php
/**
 * This file reads the style.ini and displays the replacements defined in
 * it. Color replacements will be displayed visually. This should help
 * with adjusting and using the styles specified in the style.ini
 *
 * You don't need this file when you create your own template, but it might
 * help others. Just copy it from the default. No modification needed.
 *
 * @author Andreas Gohr <andi@splitbrain.org>
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Template Replacements</title>
    <style type="text/css">
        body {
            background-color: #fff;
        }
        td {
            margin: 0;
            padding: 0.5em 2em;
            font-family: monospace;
            font-size: 120%;
            border: 1px solid #fff;
           }
        tr:hover td {
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
<?php
$ini = parse_ini_file('style.ini',true);
echo '<table>';
foreach($ini['replacements'] as $key => $val){
    echo '<tr>';
    echo '<td>'.htmlspecialchars($key).'</td>';
    echo '<td>'.htmlspecialchars($val).'</td>';
    echo '<td>';
    if(preg_match('/^#[0-f]{3,6}$/i',$val)){
        echo '<div style="width: 40px; height:25px; background-color:'.$val.';border: 1px #000 solid"></div>';
    }
    echo '</td>';
    echo '</tr>';
}
echo '</table>';
?>
</body>
</html>