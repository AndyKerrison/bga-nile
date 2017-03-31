<?php
/**
 *------
 * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * aknile implementation : © Andrew Kerrison <adesignforlife@gmail.com>
 * 
 * This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
 * See http://en.boardgamearena.com/#!doc/Studio for more information.
 * -----
 *
 * material.inc.php
 *
 * aknile game material description
 *
 * Here, you can describe the material of your game with PHP variables.
 *   
 * This file is loaded in your game logic class constructor, ie these variables
 * are available everywhere in your game logic code.
 *
 */

 //trasnslatable text will go here for convenience
 $this->resources = array(
    "plague" => clienttranslate('Plague'),
    "papyrus" => clienttranslate('Papyrus'),
    "wheat" => clienttranslate('Wheat'),
    "lettuce" => clienttranslate('Lettuce'),
    "castor" => clienttranslate('Castor'),
    "flax" => clienttranslate('Flax'),
    "papyrus_wheat" => clienttranslate('Papyrus/Wheat'),
    "papyrus_lettuce" => clienttranslate('Papyrus/Lettuce'),
    "papyrus_castor" => clienttranslate('Papyrus/Castor'),
    "papyrus_flax" => clienttranslate('Papyrus/Flax'),
    "wheat_lettuce" => clienttranslate('Wheat/Lettuce'),
    "wheat_castor" => clienttranslate('Wheat/Castor'),
    "wheat_flax" => clienttranslate('Wheat/Flax'),
    "lettuce_castor" => clienttranslate('Lettuce/Castor'),
    "lettuce_flax" => clienttranslate('Lettuce/Flax'),
    "castor_flax" => clienttranslate('Castor/Flax'),
    "score_window_title" => clienttranslate('Final Scoring'),
    "win_condition" => clienttranslate('Each player\'s final score is the crop type they have fewest of in storage')
);

 //Papyrus (Red), Wheat (Yellow), Lettuce (Green), Castor (Brown), and Flax (Lavender),
 $this->card_types = array(
	1 => array( 'name' => $this->resources["papyrus"], 'type_id' => 1, 'harvestTypes' => array(1), 'isSpeculation' => 0, 'isPlague' => 0),
	2 => array( 'name' => $this->resources["wheat"], 'type_id' => 2, 'harvestTypes' => array(2), 'isSpeculation' => 0, 'isPlague' => 0),
	3 => array( 'name' => $this->resources["lettuce"], 'type_id' => 3, 'harvestTypes' => array(3), 'isSpeculation' => 0, 'isPlague' => 0),
	4 => array( 'name' => $this->resources["castor"], 'type_id' => 4, 'harvestTypes' => array(4), 'isSpeculation' => 0, 'isPlague' => 0),
    5 => array( 'name' => $this->resources["flax"], 'type_id' => 5, 'harvestTypes' => array(5), 'isSpeculation' => 0, 'isPlague' => 0),
	6 => array( 'name' => $this->resources["papyrus_wheat"], 'type_id' => 6, 'harvestTypes' => array(1,2), 'isSpeculation' => 1, 'isPlague' => 0),
	7 => array( 'name' => $this->resources["papyrus_lettuce"], 'type_id' => 7, 'harvestTypes' => array(1,3), 'isSpeculation' => 1, 'isPlague' => 0),
	8 => array( 'name' => $this->resources["papyrus_castor"], 'type_id' => 8, 'harvestTypes' => array(1,4), 'isSpeculation' => 1, 'isPlague' => 0),
    9 => array( 'name' => $this->resources["papyrus_flax"], 'type_id' => 9, 'harvestTypes' => array(1,5), 'isSpeculation' => 1, 'isPlague' => 0),
    10 => array( 'name' => $this->resources["wheat_lettuce"], 'type_id' => 10, 'harvestTypes' => array(2,3), 'isSpeculation' => 1, 'isPlague' => 0),
	11 => array( 'name' => $this->resources["wheat_castor"], 'type_id' => 11, 'harvestTypes' => array(2,4), 'isSpeculation' => 1, 'isPlague' => 0),
    12 => array( 'name' => $this->resources["wheat_flax"], 'type_id' => 12, 'harvestTypes' => array(2,5), 'isSpeculation' => 1, 'isPlague' => 0),
    13 => array( 'name' => $this->resources["lettuce_castor"], 'type_id' => 13, 'harvestTypes' => array(3,4), 'isSpeculation' => 1, 'isPlague' => 0),
    14 => array( 'name' => $this->resources["lettuce_flax"], 'type_id' => 14, 'harvestTypes' => array(3,5), 'isSpeculation' => 1, 'isPlague' => 0),
    15 => array( 'name' => $this->resources["castor_flax"], 'type_id' => 15, 'harvestTypes' => array(4,5), 'isSpeculation' => 1, 'isPlague' => 0),
    16 => array( 'name' => $this->resources["plague"], 'type_id' => 16, 'harvestTypes' => array(), 'isSpeculation' => 0, 'isPlague' => 1)//,
);


/*

Example:

$this->card_types = array(
    1 => array( "card_name" => ...,
                ...
              )
);

*/




