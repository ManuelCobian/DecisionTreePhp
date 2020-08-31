<?php

require_once('class/TerminalNode.php');
require_once('class/RootNode.php');
require_once('class/DecisionNode.php');
$subjects = [
    0 => ['gender' => 'male',   'age' => 41, 'playsFootball' => 'nope', 'canCook' => 'yes'],
    1 => ['gender' => 'female', 'age' => 91, 'playsFootball' => 'nope', 'canCook' => 'nope'],
    2 => ['gender' => 'male',   'age' => 17, 'playsFootball' => 'nope', 'canCook' => 'yes'],
    3 => ['gender' => 'female', 'age' => 39, 'playsFootball' => 'nope', 'canCook' => 'yes'],
    4 => ['gender' => 'male',   'age' => 90, 'playsFootball' => 'nope', 'canCook' => 'yes'],
    5 => ['gender' => 'male',   'age' => 48, 'playsFootball' => 'yes', 'canCook' => 'nope'],
    6 => ['gender' => 'male',   'age' => 86, 'playsFootball' => 'yes',  'canCook' => 'nope'],
    7 => ['gender' => 'male',   'age' => 99, 'playsFootball' => 'yes',  'canCook' => 'yes'],
    8 => ['gender' => 'female', 'age' => 39, 'playsFootball' => 'nope', 'canCook' => 'yes'],
    9 => ['gender' => 'female', 'age' => 37, 'playsFootball' => 'yes',  'canCook' => 'yes'],
];
// Find all
// - males
// - under 50
// - can cook
// - does not play football

// Create from bottom up

// We want all subjects who don't play football
$footballDecisions = [
    'play' => new TerminalNode(),
    'does not play' => new TerminalNode(), // This is our last node
];
// Find all
// - males
// - under 50
// - can cook
// - does not play football

// Create from bottom up

// We want all subjects who don't play football
$footballDecisions = [
    'play' => new TerminalNode(),
    'does not play' => new TerminalNode(), // This is our last node
];

// Create the decider for football
$footballDecider = new DecisionNode(function ($subject) {
    // This is our decider function, $subject is the current object
    // in the queue of the current node.
    // Return the key of our $footballDecision-Array
    return ($subject['playsFootball'] == 'yes' ? 'play' : 'does not play');
}, $footballDecisions);

// Great, next we need the cook-decisions.
$cookDecisions = [
    'can cook' => $footballDecider, // redirect all subjects who can cook to the $footballDecider
    'can not cook' => $footballDecider,
];

// Now the cookDecider
$cookDecider = new DecisionNode(function ($subject) {
    return ($subject['canCook'] == 'yes' ? 'can cook' : 'can not cook');
}, $cookDecisions);

// The same as previous for the next 2 decisions
var_dump($cookDecisions);

$ageDecisions = [
    '< 50' => $cookDecider,
    '>= 50' => new TerminalNode(),
];
$ageDecider = new DecisionNode(function ($subject) {
    return ($subject['age'] >= 50 ? '>= 50' : '< 50');
}, $ageDecisions);

$genderDecisions = [
    'male' => $ageDecider,
    'female' => new TerminalNode(),
];
$genderDecider = new DecisionNode(function ($subject) {
    return $subject['gender'];
}, $genderDecisions);

// And now we need to create a RootNode
$rootNode = new RootNode($subjects);

// Add the first (last created) node to our RootNode:
$rootNode->addSubNode($genderDecider);

// And classify
$rootNode->classify();

// In $footballDecisions['does not play'] are our subjects there we looked for:

    echo "<center><h3>Data Tranning</h3></center>";
    $tranning_data=$subjects;
    echo "<center><table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th><center>"."Gender"."</center></th>";
    echo "<th><center>"."Age"."</center></th>";
    echo "<th><center>"."Football"."</center></th>";
    echo "<th><center>"."Cook"."</center></th>";
    
    echo "<tr>";
    
    echo "<thead>";

    echo "<tbody>";
    foreach($tranning_data as $simples){
      
        echo "<tr>";
        echo "<td><center>".$simples["gender"]."</center></td>";
        echo "<td><center>".$simples["age"]."</center></td>";
        echo "<td><center>".$simples["playsFootball"]."</center></td>";
        echo "<td><center>".$simples["canCook"]."</center></td>";
        echo "</tr>";
    }
    echo "</tbody>";
    
   

    echo "</table></center>";

    echo "<br>";



    echo "<center><h3>males under 50 can cook does not play football </h3></center>";
    $tranning_data=$subjects;
    echo "<center><table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th><center>"."Gender"."</center></th>";
    echo "<th><center>"."Age"."</center></th>";
    echo "<th><center>"."Football"."</center></th>";
    echo "<th><center>"."Cook"."</center></th>";
    
    echo "<tr>";
    
    echo "<thead>";

    echo "<tbody>";
    foreach($footballDecisions['does not play']->subjects as $simples){
        
        echo "<tr>";
        echo "<td><center>".$simples["gender"]."</center></td>";
        echo "<td><center>".$simples["age"]."</center></td>";
        echo "<td><center>".$simples["playsFootball"]."</center></td>";
        echo "<td><center>".$simples["canCook"]."</center></td>";
        echo "</tr>";
    }
    echo "</tbody>";
    
   

    echo "</table></center>";

    echo "<br>";



    echo "<center><h3>males under 50 can not cook can play football </h3></center>";
    $tranning_data=$subjects;
    echo "<center><table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th><center>"."Gender"."</center></th>";
    echo "<th><center>"."Age"."</center></th>";
    echo "<th><center>"."Football"."</center></th>";
    echo "<th><center>"."Cook"."</center></th>";
    
    echo "<tr>";
    
    echo "<thead>";

    echo "<tbody>";
    foreach($footballDecisions['play']->subjects as $simples){
      
        echo "<tr>";
        echo "<td><center>".$simples["gender"]."</center></td>";
        echo "<td><center>".$simples["age"]."</center></td>";
        echo "<td><center>".$simples["playsFootball"]."</center></td>";
        echo "<td><center>".$simples["canCook"]."</center></td>";
        echo "</tr>";
    }
    echo "</tbody>";
    
   

    echo "</table></center>";

    echo "<br>";
    
    

if(!is_null($footballDecisions['does not play']) ){
  
    var_dump($footballDecisions['does not play']);
}
if(!is_null($footballDecisions['play']) ){
    print_r($footballDecisions['play']);
}

//print_r($footballDecisions['does not play']);

//print_r($footballDecisions['play']);