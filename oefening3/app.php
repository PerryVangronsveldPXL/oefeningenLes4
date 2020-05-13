<?php
require_once 'textnode/TextNode.php';
$n = textnode\TextNode::makeNode("a");
$n->addNode("b");
$n->addNode("c");
$n->printAll();
try {
    $n->printTextNodeAt(-3);
} catch (OutOfBoundsException $exception) {
print ("\n" . $exception->getMessage());
}
