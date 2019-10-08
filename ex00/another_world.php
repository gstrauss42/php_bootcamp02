#!/usr/bin/php
<?PHP
$i = 0;
$tmp = preg_split('/ +/', trim($argv[1]));
while($tmp[$i])
{
    echo(trim($tmp[$i]));
    if($tmp[$i + 1])
        echo(" ");
    $i++;
}
echo("\n")
?>