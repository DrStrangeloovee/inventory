<?php
namespace MyVendor\Inventory\Domain\Model;

use \TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Product extends AbstractEntity {
/**
 * @var string
 **/
protected $name = '';

/**
 * @var string
 **/
protected $description = '';

/**
 * @var int
 **/
protected $quantity = 0;

public function __construct($name = '', $description = '', $quantity = 0) {
    $this->setName($name);
    $this->setDescription($description);
    $this->setQuantity($quantity);
}

public function setName($name) {
    $this->name = (string)$name;
}

public function getName() {
    return $this->name;
}

public function setDescription($description) {
    $this->description = (string)$description;
}

public function getDescription() {
    return $this->description;
}

public function setQuantity($quantity) {
    $this->quantity = (int)$quantity;
}

public function getQuantity() {
    return $this->quantity;
}

}
?>