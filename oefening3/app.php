<?php
require_once 'textnode/TextNode.php';
$n=textnode\TextNode::makeNode("a");
$n->addNode("b");
$n->addNode("c");
$n->printAll();
$n->printTextNodeAt(-3);
