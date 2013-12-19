<!DOCTYPE HTML>
<html>
<head>    
    <meta charset="UTF-8" />
    <meta http-equiv="content-type" content="text/html" />
    <link rel="stylesheet" type="text/css" href="reset.css" title="reset" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Nex and SS Parser</title>
</head>
<body>

<?php

/**
 * The script
 *
 * Foreach line processed an object will be returned, the object will have two items which can be accessed:
 * ->line will return the line object from the parser.
 * ->items will return an array of items from the parser.
 *
 * Each of these objects returned have their own public methods which can be accessed.
 *
 *
 * On the ->line object you can use the following:
 * ->getType() - returns the LineType.
 * ->getLine() - returns the manipulated line.
 * ->getFixedLine() - returns the line after being run through the OCR fixer.
 * ->getOriginalLine() - returns the line before any manipulation.
 *
 * If you want to display the original line in the chat use the ->getFixedLine() function.
 *
 *
 * On the ->items object you can use the following:
 * ->getName() - returns the item name.
 * ->getPriceRange() - returns the price range.
 * ->getLowPrice() - returns the lower price.
 * ->getHighPrice() - returns the higher price.
 * ->__toString() - converts the item to a string.
 *
 * With the items object, check that it doesn't === false before iterating through the items.
 */

// Include the script.
include './nexss.php';

// Createa a new parser class.
$p = new Parser();

// Read the file lines to an array. - change to simba_t.txt  for the script to read the log in the post.
$lines = file('rsbot.txt', FILE_IGNORE_NEW_LINES);

// Matched items array.
$items = array();

// Object array.
$objs = array();

// Process each line.
foreach ($lines as $line)
{
    // Process the line
    $obj = $p->process($line);

    // Only dump items that were matched to a price.
    if($obj->items !== false)
    {
        // Loop through each item returned and add to a master items array.
        foreach ($obj->items as $item) {
            // Add to items array.
            $items[] = $item;
        }
        // Add the original array to the objects array.
        $objs[] = $obj;
    }
}

?>

<table id="tb-sty" summary="Nex and SS Items">
    <thead>
        <tr>
            <th scope="col">Item</th>
            <th scope="col">Low Price</th>
            <th scope="col">High Price</th>
            <th scope="col">Input Line</th>
            <th scope="col">Last Price Check Request</th>
        </tr>
    </thead>
    <tbody>
<?php

echo count($lines) . ' lines in the file. '.count($items).' items were matched.';

// Loop through each item returned.
foreach ($objs as $obj) 
{
    foreach ($obj->items as $item) {
        echo "<tr>
                <td>".$item->getName()."</td>
                <td>".($item->getLowPrice() !== false ? $item->getLowPrice() : '<b>Low price not specified</b>')."</td>
                <td>".($item->getHighPrice() !== false ? $item->getHighPrice() : '<b>High price not specified</b>')."</td>
                <td>".$obj->line->getFixedLine()."</td>
                <td>".(isset($obj->pl) ? $obj->pl->getFixedLine() : '')."</td>
             </tr>";
    }
}
        
?>
    </tbody>
</table>

</body>
</html>