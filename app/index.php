<?php
require_once('core/DecisionTree.php');
use DecisionTree as DecisionTree;
error_reporting(E_ALL | E_STRICT);

    echo "Using training data to generate Decision tree...\n";
    $dec_tree = new DecisionTree('data/data.csv', 0);
    echo "Decision tree using ID3:\n";
    $dec_tree->display();
    echo "<br>";
    echo "Prediction on new data set\n";
    $dec_tree->predict_outcome('data/input_data.csv');
    exit();