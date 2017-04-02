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
 * Category
 */
class Category extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * categoryName
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $categoryName = '';

    /**
     * Returns the categoryName
     * 
     * @return string $categoryName
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Sets the categoryName
     * 
     * @param string $categoryName
     * @return void
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }
}
