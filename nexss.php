<?php

/**
 * LineType enumeration.
 */
class LineType
{
    const PROCESS = 0;
    const CHAT = 1;
    const PC = 2;
    const PRICE = 3;
    const ITEMPRICE = 4;
}

/**
 * Class to hold all the items and their abbreviations. Ideally this will be replaced
 * by a database.
 */
class ItemList
{
    /**
     * List of items and abbreviations.
     * @var array
     */
    private static $items = array(

        // Torva armour.  
        'Torva Full Helm' => array('thelm', 't helm', 'tvhelm', 'tfh', 'th', 'tvfh', 'tvh', 'thelms', 't helms', 'thlm', 'torva helm', 'tvf helm', 'torva fh', 'torvafh', 'torva full helm'),
        'Torva Platebody' => array('tplate', 'tpl', 'tpl8', 'tbody', 't body', 'tvp', 'tvpb', 'tpb', 'tvb', 'tvbody', 'tplate', 't plate', 'torva plate', 'torva platebodys', 'torva body', 'torva bod', 'torva platebody'),
        'Torva Platelegs' => array('t leg', 't leg', 'tlegs', 't legs', 'tvleg', 'tv leg', 'tvlegs', 'tv legs', 'tpl', 'tpleg', 'tvpl', 'torva plateleg', 'torva pleg', 'tlg', 'torva leg', 'torva legs', 'torva platelegs'),
      
        // Virtus armour.
        'Virtus Mask' => array('vmask', 'v mask', 'vm', 'virtm', 'virt m', 'vrm', 'virtus mask'),
        'Virtus Robe Top' => array('vtop', 'vtop', 'vrt', 'vbody', 'vtops', 'v body', 'virtus top', 'virt rt', 'virt t', 'vt', 'virtus robe top'),
        'Virtus Robe Legs' => array('vleg', 'v leg', 'vlegs', 'v legs', 'vbottom', 'v bottom', 'vskirt', 'v skirt', 'vrl', 'vrb', 'vb', 'virturs leg', 'virtus legs', 'virt leg', 'virt bottom', 'virtus robe legs'),

        // Pernix armour.
        'Pernix Cowl' => array('pern c', 'pernc', 'pcowl', 'p cowl', 'pcwl', 'pern cowl', 'phead', 'pcw', 'pcl', 'pernix c', 'pernixl cwl', 'pernix cl', 'pernix cowl'),
        'Pernix Body' => array('pbody', 'p body', 'pbod', 'p bod', 'ptop', 'p top', 'pern t', 'pern tp', 'pern top', 'pernix t', 'pernix top', 'pernix b', 'pernixb', 'pernix body'),
        'Pernix Chaps' => array('pchap', 'p chap', 'pchaps', 'p chaps', 'pern cps', 'pern chaps', 'pernix cps', 'pernic chaps', 'prn chps', 'pern chaps', 'pleg', 'p leg', 'plegs', 'p legs', 'pernix chaps'),

        // Gloves: -> G = gloves (according to specs).
        'Torva Gloves' => array('tglove', 't glove', 'tgloves', 't gloves', 'tg', 't g', 'tglv', 't glv', 'torva g', 'torva glv', 'tvg', 'tv glv', 'tv g', 'torva gloves'),
        'Virtus Gloves' => array('vglove', 'v glove', 'vgloves', 'v gloves', 'vg', 'v g', 'vglv', 'v glv', 'virtus g', 'virtus glv', 'virt g', 'virt glv', 'vrg', 'virtus gloves'),
        'Pernix Gloves' => array('pglove', 'p glove', 'pgloves', 'p gloves', 'pg', 'p g', 'pglv', 'p glv', 'pernix g', 'pernix glv', 'pern g', 'pern glv', 'pernix g', 'pernix gloves'),

        // Boots: -> B = boots (according to specs, this is why pb = pernix boots not pernix body etc..).
        'Torva Boots' => array('tb', 'tvb', 'tboot', 't boot', 'tboots', 't boots', 'trvb', 'tor boot','tv b', 'torva b', 'torva boots'),
        'Virtus Boots' => array('vb', 'vrtb', 'vboot', 'v boot', 'v boots', 'virt b', 'vir bo', 'virtus b', 'virtus boots'),
        'Pernix Boots' => array('pb', 'prn', 'pboot', 'p boot', 'pboots', 'p boots', 'prnb', 'pern boot', 'pern boots', 'pernix b', 'pernix boots'),

        // Spirit shields.
        'Arcane Spirit Shield' => array('arc', 'ass', 'arcane', 'arcs', 'arcane spirit shield'),
        'Spectral Spirit Shield' => array('spec', 'sss', 'spectral', 'spectral spirit shield'),
        'Elysian Spirit Shield' => array('ely', 'elly', 'ey', 'eli', 'elysian', 'elysian spirit shield'),
        'Divine Spirit Shield' => array('div', 'divi', 'dvs', 'divine', 'divine spirit shield'),

        // Weapons.
        'Virtus Wand' => array('vwand', 'v wand', 'virt wand', 'vw', 'wand', 'virtus wand'),
        'Virtus Book' => array('vbook', 'v book', 'virt book', 'book', 'virtus book'),
        'Zaryte Bow' => array('zary', 'zb', 'zari', 'zbow', 'z bow', 'zaryte bow'),

        // Lines.
        'Torva Line' => array('tline', 't', 'tvln', 'tl', 'tvline', 'tv line', 'torva l', 'tv l', 'torva ln', 'tv ln', 'torva line', 'torva'),
        'Virtus Line' => array('vline', 'v', 'v line', 'vl', 'vln', 'virt ln', 'virtln', 'v l', 'v ln', 'virt l', 'virtus l', 'virtus line', 'virtus'),
        'Pernix Line' => array('pline', 'p', 'p line', 'pernln', 'pl', 'pern l', 'pern ln', 'pernix line', 'pernix'),
        'Gloves Line' => array('g', 'glove', 'gloves', 'glvs', 'gs', 'gvs', 'glove line', 'gloves line'),
        'Boots Line' => array('b', 'boot', 'boots', 'bts', 'bs', 'boot line', 'boots line'),
        'SS Line' => array('ss', 'shields', 'ss line', 'shield line')
    );

    /**
     * Gets a list of items to match.
     * @return array - return a list of items,
     */
    public static function getItems()
    {
        return self::$items;
    }
}

/**
 * Line data struct. Public methods include:
 * ->getType() - returns the LineType.
 * ->getLine() - returns the manipulated line.
 * ->getFixedLine() - returns the line after being run through the OCR fixer.
 * ->getOriginalLine() - returns the line before any manipulation.
 */
class Line
{
    /**
     * Original line from simba.
     * @var string
     */
    private $originalLine;

    /**
     * OCR fixed line.
     * @var string
     */
    private $fixedLine;

    /**
     * Fixed line that can be modified (preg_match).
     * @var string
     */
    private $line;

    /**
     * Line type - default to PROCESS.
     * @var LineType
     */
    private $_type = LineType::PROCESS;

    /**
     * Set the line variables and fix the OCR issues.
     * @param string $line - the friend chat line straight from simba.
     * @param LineType $type - optional parameter - the line type to set.
     */
    function __construct($line)
    {
        // Set the original line.
        $this->originalLine = $line;

        // Set the fixed line and normal line.
        $this->fixedLine = $this->line = $this->fixOCR($line);

        // Modify the line slightly for easier parsing.
        $this->line = $this->easyParse($this->line);

        // Remove data and hello- stuff we don't need. This depends on the Simba script though.
        $this->removeDate();

        // Determine the line type.
        // Replace item abbreviations with full item name & flag the line as a PC if there is a match.
        foreach (ItemList::getItems() as $item => $abbreviation)
        {
            // Get the regexp pattern.
            $pattern = $this->getPattern($abbreviation);

            if(preg_match($pattern, $this->line))
            {
                // Test and replace the pattern.
                $this->line = preg_replace($pattern, ' ['.$item.'] ', $this->line);

                // Set the line type.
                $this->_type = LineType::PC;
                break;
            }
            else
            {
                // Set the line type.
                $this->_type = LineType::CHAT;
            }
        }

        // Check if there is a price in the line.
        if(preg_match_all('/\d{2,}[\d.~<+-]*/', $this->line, $tmp))
        {
            // If we already matched an item then set the line type to item + price.
            if($this->_type == LineType::PC)
            {
                // Set the line type.
                $this->_type = LineType::ITEMPRICE;
            }
            else
            {
                // Set the line type - price only.
                $this->_type = LineType::PRICE;
            }
        }
    }

    /**
     * Fixes OCR issues.
     * @param string $line - the friend chat line straight from simba.
     */
    private function fixOCR($line)
    {
        // Replace 
        $line = str_replace(array('·Ó', '·', '¥', 'Ó'), array('?', '.', '\\', '/'), $line);

        // Replace colons character.
        $line = preg_replace('/\b[\.]{2}\s/', ': ', $line);

        // Return the fixed line.
        return $line;
    }

    /**
     * Replaces a few characters to make it easier to parse data.
     * @param string $line - the friend chat line straight from simba.
     * @return string - parsed line.
     */
    private function easyParse($line)
    {
        return str_replace(array('?', '\''), array(' ? ', '.'), $line);
    }

    /**
     * Gets the current line type.
     * @return LineType - current line type.
     */
    public function getType() 
    {
        return $this->_type;
    }

    /**
     * Get the modified line.
     * @return string - current line text.
     */
    public function getLine() 
    {
        return $this->line;
    }

    /**
     * Gets OCR fixed line.
     * @return string - line after being run through _fixOCR()
     */
    public function getFixedLine() 
    {
        return $this->fixedLine;
    }

    /**
     * Gets the original line before OCR fix.
     * @return string - original line straight from Simba.
     */
    public function getOriginalLine() 
    {
        return $this->originalLine;
    }

    /**
     * Removes the data and hello stuff from the line.
     */
    private function removeDate()
    {
        $this->line = preg_replace('/(\d{10}\s)/i', '', $this->line);
        $this->fixedLine = preg_replace('/(\d{10}\s)/i', '', $this->fixedLine);
    }

    /**
     * Build a regular expression pattern to test for items.
     * @param array $items - array of abbreviations to build regexp for.
     * @return string - regular expression pattern.
     */
    private function getPattern($items)
    {
        #return '/[^;]\b('.$this->joinItems($items).')+[:]*?\b/i';
        return '/\b('.$this->joinItems($items).')+[:]*?\b/i';
    }

    /**
     * Joins a list of items together seperated by a |
     * @param array $items - list of items to join.
     * @return string - joined items. e.g item1|item2|item3
     */
    private function joinItems($items)
    {
        // Removes and sotre the last item in the array.
        $result = array_pop($items);

        // If there are still items in the list seperate them by | and add the last item.
        if(!empty($items))
        {
            $result = implode('|', $items) . '|' . $result;
        }

        // Return the joined list.
        return $result;
    }
}

/**
 * Item data struct - this is returned from the process() function when an item has been
 * matched to a price.
 * ->getName() - returns the item name.
 * ->getPriceRange() - returns the price range.
 * ->getLowPrice() - returns the lower price.
 * ->getHighPrice() - returns the higher price.
 * ->__toString() - converts the item to a string.
 */
class Item
{
    /**
     * Price range.
     * @var array
     */
    private $prices = null;

    /**
     * Full item name.
     * @var string.
     */
    private $name = null;

    /**
     * Initialize a new Item object.
     * @param string $item - the item name.
     * @param array $prices - an array of prices for the tem - low to high.
     */
    function __construct($item, $prices)
    {
        // Set the item name.
        $this->name = $item;

        // Set the price range var.
        $this->prices = $prices;
    }

    /**
     * Get the item name.
     * @return string - the full item name.
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the price range.
     * @return array - a price range array. To access the prices use ['low'] and ['high'].
     */
    public function getPriceRange()
    {
        return $this->prices;
    }

    /**
     * Get the low price.
     * @return string|int|float|bool - the low price.
     */
    public function getLowPrice()
    {
        if(is_array($this->prices))
        {
            return $this->prices['low'];
        }
        else
        {
            return false;
        }
    }

    /**
     * Get the high price.
     * @return string|int|float|bool - the high price.
     */
    public function getHighPrice()
    {
        if(is_array($this->prices))
        {
            return $this->prices['high'];
        }
        else
        {
            return false;
        }
    }

    /**
     * Returns the Item object in string format.
     * @return string - string for mat of Item object. Formatted:  Item: [Name] - [Low_Price] to [High_Price].
     *                  regexp for this: /Item:\s(?P<item>.*?)\s-\s(?P<low>.*?)\sto\s(?P<high>.*?)\s/i
     */
    public function __toString() 
    {
        return 'Item: ' . $this->name . ' - ' . ($this->prices['low'] != false ? $this->prices['low'] : 'null') . ' to ' . ($this->prices['high'] != false ? $this->prices['high'] : 'null').' ';
    }
}

/**
 * Parser class. This does the testing and creates the Item objects.
 * Previous lines are stored from when the Parser is initialised to 
 * when it is disposed.
 */
class Parser
{
    /**
     * Stores previous lines.
     * @var array
     */
    private $previousLines = array();

    /**
     * Process a line - determine what type of line it is and if items need to be parsed out of it.
     * @param string $line - raw line from simba.
     * @return ParsedLine - an object containing the Line object and an array of items if they were created.
     */
    public function process($line)
    {
        // Create a new line object.
        $line = new Line($line);

        // Replace item abbreviations with full item name & flag the line as a PC if there is a match.
        $this->previousLines[] = $line;
 
        // Return results based on LineType
        switch ($line->getType()) 
        {
            case LineType::PRICE:

                // Get the last price check line.
                $last_pc = $this->getPreviousLine(LineType::PC);

                if($last_pc != false)
                {
                    // Extract the item name
                    preg_match('/\[(?P<item>.*?)\]/', $last_pc->getLine(), $match);

                    // Get the prices
                    preg_match_all('/\d{2,}[\d.~<+-]*/', $line->getLine(), $prices);

                    // Check if the item is a line item && we have enough prices for it.
                    if(preg_match('/(?P<item>.*?)\sLine/i', $match['item'], $newMatch))
                    {
                        if(count($prices[0]) >= 3)
                        {
                            return (object) array('line' => $line, 'items' => $this->getLineItems($newMatch['item'], $prices[0]));
                        }
                        else
                        {
                            return (object) array('line' => $line, 'items' => false);
                        }
                    }
                    else
                    {
                        return (object) array('line' => $line, 'items' => array(new Item($match[1], $this->getPrice($prices[0][0]))), 'pl' => $last_pc);
                    }
                }   
                else
                {
                    return (object) array('line' => $line, 'items' => false);
                }
                break;

            case LineType::ITEMPRICE:

                // Extract the item name
                preg_match('/\[(?P<item>.*?)\]/', $line->getLine(), $match);

                // Get the prices
                preg_match_all('/\d{2,}[\d.~<+-]*/', $line->getLine(), $prices);

                // Check if the item is a line item && we have enough prices for it.
                if(preg_match('/(?P<item>.*?)\sLine/i', $match['item'], $newMatch) && count($prices[0]) >= 3)
                {
                    return (object) array('line' => $line, 'items' => $this->getLineItems($newMatch['item'], $prices[0]));
                }
                else
                {
                    return (object) array('line' => $line, 'items' => array( new Item($match[1], $this->getPrice($prices[0][0])) ));
                }
                break;
            
            default: // CHAT, PC or PROCESS
                return (object) array('line' => $line, 'items' => false);
                break;
        }
    }

    /**
     * Create a price range.
     * @param string $price - Singular input price, no list of prices.
     * @return array - a price range array. To access the prices use ['low'] and ['high'].
     */
    private function getPrice($price)
    {
        /**
         * Already given ranges
         * e.g 37-.5  =  low: 37   high: 37.5
         * e.g 209-0  =  low: 209  high: 210
         * e.g 57-57  =  low: 56   high: 57
         */
        if(preg_match('/(?P<low>[\d.]+)-(?P<high>[\d.]+)/', $price, $range))
        {   
            if($range['high'][0] === '.')
            {
                return array('low' => $range['low'], 'high' => ($range['low'] .= $range['high']));
            }
            else
            {
                if($range['high'] == 0)
                {
                    return array('low' => $range['low'], 'high' => $range['low'] + (10 - floor($range['low'])%10));
                }
                else
                {
                    return array('low' => $range['low'], 'high' => (substr($range['low'], 0, -1) . $range['high']));
                }
            }
        }

        /**
         * About prices ~
         * e.g 60~  =  low: 105.5  high: 106.5
         */
        else if(preg_match('/(?P<price>\d+)\s?[~]/', $price, $range))
        {
            return array('low' => $range['price'] - 0.5, 'high' => $range['price'] + 0.5);
        }

        /**
         * Unknown lower ?-x
         * e.g ?-40  = low: 40  high: false
         */
        else if(preg_match('/[?]\s?-\s?(?P<price>\d+)/', $price, $range))
        {
            return array('low' => false, 'high' => $range['price']);
        }

        /**
         * Unknown higher x-?
         * e.g 30-?  = low: false  high: 30
         */
        else if(preg_match('/(?P<price>\d+)\s?-\s?[?]/', $price, $range))
        {
            return array('low' => $range['price'], 'high' => false);
        }

        /**
         * Greater than + >
         * e.g 60>  = low: 60  high: false
         * e.g 60+  = low: 60  high: false
         */
        else if(preg_match('/(?P<price>[\d.]+)\s?[+>]/', $price, $range))
        {
            return array('low' => $range['price'], 'high' => false);
        }

        /**
         * Less than <
         * e.g <39.4  = low: false  high: 39.4
         */
        else if(preg_match('/<\s?(?P<price>[\d.]+)/', $price, $range))
        {
            return array('low' => false, 'high' => $range['price']);
        }

        /**
         * Exact number
         * e.g 118  =  low: 118  high: 118
         */
        else
        {
            return array('low' => $price, 'high' => $price);
        }
    }

    /**
     * Sorts an array of prices lowest to highest.
     * @param array $prices - list of prices.
     * @return array - sorted array of prices.
     */
    function sortPrice($prices)
    {
        // Create a temp array.
        $tmp = array();

        // Loop through each price given.
        foreach ($prices as $key => $p) {
            
            // Match only the first price.
            preg_match('/\d+/i', $p, $match);

            // Assign the original price to the firt price
            $tmp[$p] = $match[0];
        }

        // Sort the array highest - lowest.
        arsort($tmp);

        // Return the sorted array.
        return array_keys($tmp);
    }

    /**
     * Creates an array of line items in the correct order.
     * @param string $item - item line to create data for.
     * @param array $prices - array of prices for the items in order. Must contain at least 3 elements.
     * @return array - an array of items with the relevant prices.
     */
    private function getLineItems($item, $prices)
    {
        switch ($item)
        {
            case 'Virtus':
                return array(new Item('Virtus Mask', $this->getPrice($prices[0])),
                             new Item('Virtus Robe Top', $this->getPrice($prices[1])),
                             new Item('Virtus Robe Legs', $this->getPrice($prices[2]))
                            );
                break;

            case 'Pernix':
                return array(new Item('Pernix Mask', $this->getPrice($prices[0])),
                             new Item('Pernix Body', $this->getPrice($prices[1])),
                             new Item('Pernix Chaps', $this->getPrice($prices[2]))
                            );
                break;

            case 'Torva':
                return array(new Item('Torva Full Helm', $this->getPrice($prices[0])),
                             new Item('Torva Platebody', $this->getPrice($prices[1])),
                             new Item('Torva Platelegs', $this->getPrice($prices[2]))
                            );
                break;

            case 'Gloves':
                return array(new Item('Virtus Gloves', $this->getPrice($prices[0])),
                             new Item('Pernix Gloves', $this->getPrice($prices[1])),
                             new Item('Torva Gloves', $this->getPrice($prices[2]))
                            );
                break;

            case 'Boots':
                return array(new Item('Virtus Boots', $this->getPrice($prices[0])),
                             new Item('Pernix Boots', $this->getPrice($prices[1])),
                             new Item('Torva Boots', $this->getPrice($prices[2]))
                            );
                break;

            case 'SS':
                $prices = $this->sortPrice($prices);
                return array(new Item('Divine Spirit Shield', $this->getPrice($prices[0])),
                             new Item('Elysian Spirit Shield', $this->getPrice($prices[1])),
                             new Item('Arcane Spirit Shield', $this->getPrice($prices[2])),
                             new Item('Spectral Spirit Shield', isset($prices[3]) ? $this->getPrice($prices[3]) : false)
                            );
                break;

            default:
                return false;
                break;
        }
    }

    /**
     * Returns the last occurance of a line type.
     * @param LineType $type - optional parameter - the line type to search for.
     * @param int $offset - optional parameter - how many items to ignore before returning a line.
     * @return Line - the last occurance of a line that matches the specified criteria.
     */
    private function getPreviousLine($type = LineType::PC, $offset = 0)
    {
        // Counter var - when this matches $ignore we return the line.
        $c = 0;

        // Create a temp array of ->previousLines in reverse order.
        $tmp = array_reverse($this->previousLines);

        // Loop through each of the previous lines - looking for one with the same type as $type.
        foreach($tmp as $line)
        {
            // Check if the line has the same type.
            if($line->getType() === $type)
            {
                // Check we don't want to ignore this index.
                if($c === $offset)
                {
                    // Return the line.
                    return $line;

                    // Break out the loop.
                    break;
                }
                else
                {
                    // Increase the counter.
                    ++$c;
                }
            }
        }
        // No lines were found that match the criteria so return false.
        return false;
    }
}

?>