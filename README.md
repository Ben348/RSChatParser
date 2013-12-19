RuneScape Nex and SS friend chat parser
=======================================

What it does
------------
This script was built for a couple of Smokin Mils hosts to use for their merching website. It was designed specifically to extract the prices of items from the ‘Nex and SS’ friend chat; following the format laid out here http://services.runescape.com/m=forum/forums.ws?90,91,180,64006412

View a live example here: http://ben-thomson.co.uk/sm/snow/  this example is using the chat log provided in `example\rsbot.txt` 

How it works
------------
1) Pass the chat log to the script.

2) The regular expression is generated for all the items included in the match list.

3) Each line that is passed is tested against a series of regular expressions to determine what kind of line it is. Lines will be given one of the following flags:

 - PROCESS (Default - tells the script the line still needs processing)
 - CHAT (General chitchat that isn't needed - nothing was matched)
 - PC (Someone asked for a price check of an item)
 - PRICE (Someone reported a price for a previous item someone requested)
 - ITEMPRICE (Someone reported an item with a price)

4) Magic happens and the correct items and prices are matched to each other.

How to use it
-------------
### Include the file
You need to include the 'nextss.php' file in your script before anything.

    include('nexss.php');

### Example
The example below passes a chat log text file to the script and extracts all items that have a price.

    // Createa a new parser class.
    $p = new Parser();

    // Read the file lines to an array.
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
            foreach ($obj->items as $item) {]
                $items[] = $item;
            }
        }
    }
    
For each line processed an object will be returned, the object will have two members which can be accessed:
- line object - Returns an objcet containg all information about the parsed line.
- item object - Returns an array of items that were extracted from the line

Each of these objects have their own methods that can be accessed.
    
### The item object
Item name - `string` -  e.g 'Torva Full Helm'

    ->getName()

Price range - `array` - e.g array('low' => 35.5, 'high' => 64.3)

    ->getPriceRange()
    
Low price - `double` - e.g 35.5

    ->getLowPrice()
    
High price - `double` - e.g 64.3

    ->getHighPrice()
    
To String - `string` - e.g 'Item: Arcane Spirit Shield - 35.3 to 35.3'

    ->_toString()
    

### The line object    
Get the line type - `LineType` - e.g LineType::CHAT

    ->getType()
    
Get the manipulated (Regex replaced) line - `string` - e.g '[Pernix Line] 30-.5/61.5+/41.2'

    ->getLine()
    
Get the fixed line - `string` - e.g Pernix 30-.5/61.5+/41.2

    ->getFixedLine()
    
Get the original line - `string` - e.g 1354996527 No tradingÂ£@%  (Notice OCR errors and date)

    ->getOriginalLine()
    
Improvements
------------
This is version 1 of the script, I have yet to finish version 2. Improvements that need to be made however are:
 - Pass your own items to the script so it can be used for universal friend chats.
 - Pass your own price/item matching parameters
 - Generate on the fly a fall-back system to stop the wrong prices being matched to items - includes manipulator