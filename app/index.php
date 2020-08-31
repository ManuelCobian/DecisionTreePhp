<?php
require_once('core/DecisionTree.php');
use DecisionTree as DecisionTree;
error_reporting(E_ALL | E_STRICT);

    echo "Using training data to generate Decision tree...\n";
    $dec_tree = new DecisionTree('data/data.csv', 0);//instance
    echo "Decision tree using ID3:\n";
    $dec_tree->display();
    echo "<br>";

    echo "<center><h3>Data of tranning</h3></center>";
    $tranning_data=$dec_tree->get_trainig_data();
    echo "<center><table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th><center>"."Outlook"."</center></th>";
    echo "<th><center>"."Temperature"."</center></th>";
    echo "<th><center>"."Humidity"."</center></th>";
    echo "<th><center>"."Wind"."</center></th>";
    echo "<th><center>"."Value"."</center></th>";
    
    echo "<tr>";
    
    echo "<thead>";

    echo "<tbody>";
    foreach($tranning_data['samples'] as $simples){
        
        echo "<tr>";
        echo "<td><center>".$simples["Outlook"]."</center></td>";
        echo "<td><center>".$simples["Temperature"]."</center></td>";
        echo "<td><center>".$simples["Humidity"]."</center></td>";
        echo "<td><center>".$simples["Wind"]."</center></td>";
        echo "<td><center>".$simples["value"]."</center></td>";
        echo "</tr>";
    }
    echo "</tbody>";
    
   

    echo "</table></center>";

    echo "<br>";

    
    echo "<center><h3>Data of simples</h3></center>";
    $tranning_data=$dec_tree->get_simples_data("data/input_data.csv");
    echo "<center><table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th><center>"."Outlook"."</center></th>";
    echo "<th><center>"."Temperature"."</center></th>";
    echo "<th><center>"."Humidity"."</center></th>";
    echo "<th><center>"."Wind"."</center></th>";
    
    echo "<tr>";
    
    echo "<thead>";

    echo "<tbody>";
    foreach($tranning_data['samples'] as $simples){
      
        echo "<tr>";
        echo "<td><center>".$simples["Outlook"]."</center></td>";
        echo "<td><center>".$simples["Temperature"]."</center></td>";
        echo "<td><center>".$simples["Humidity"]."</center></td>";
        echo "<td><center>".$simples["Wind"]."</center></td>";
        echo "</tr>";
    }
    echo "</tbody>";
    
   

    echo "</table></center>";

    echo "Prediction on new data set\n";
   //$dec_tree->predict_outcome('data/input_data.csv');
    exit();