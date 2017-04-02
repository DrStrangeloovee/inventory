<?php
namespace VendorInventory\Vendorinventoryadvanced\Domain\Model;

/***
 *
 * This file is part of the "InventoryAdvanced" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Abusuefan Ali <abusufean.ali@gmail.com>, HTL Rennweg
 *
 ***/

/**
 * Inventory
 */
class Inventory extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * name
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * quantity
     * 
     * @var int
     * @validate NotEmpty
     */
    protected $quantity = 0;

    /**
     * categoryName
     * 
     * @var \VendorInventory\Vendorinventoryadvanced\Domain\Model\Category
     */
    protected $categoryName = null;

    /**
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the quantity
     * 
     * @return int $quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets the quantity
     * 
     * @param int $quantity
     * @return void
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns the categoryName
     * 
     * @return \VendorInventory\Vendorinventoryadvanced\Domain\Model\Category $categoryName
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Sets the categoryName
     * 
     * @param \VendorInventory\Vendorinventoryadvanced\Domain\Model\Category $categoryName
     * @return void
     */
    public function setCategoryName(\VendorInventory\Vendorinventoryadvanced\Domain\Model\Category $categoryName)
    {
        $this->categoryName = $categoryName;
    }
}
