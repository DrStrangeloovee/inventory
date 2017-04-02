<?php
namespace VendorInventory\Vendorinventoryadvanced\Controller;

use VendorInventory\Vendorinventoryadvanced\Domain\Model\Category;
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
 * InventoryController
 */
class InventoryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * inventoryRepository
     * 
     * @var \VendorInventory\Vendorinventoryadvanced\Domain\Repository\InventoryRepository
     * @inject
     */
    protected $inventoryRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $inventories = $this->inventoryRepository->findAll();
        $this->view->assign('inventories', $inventories);
    }

    /**
     * action show
     * 
     * @param \VendorInventory\Vendorinventoryadvanced\Domain\Model\Inventory $inventory
     * @return void
     */
    public function showAction(\VendorInventory\Vendorinventoryadvanced\Domain\Model\Inventory $inventory)
    {
        $this->view->assign('inventory', $inventory);
    }

    /**
     * action showCategory
     * 
     * @param \VendorInventory\Vendorinventoryadvanced\Domain\Model\Category $category
     */
    public function showCategoryAction(\VendorInventory\Vendorinventoryadvanced\Domain\Model\Category $category)
    {
        //$this->redirect('show', 'Category', 'InventoryAdvanced', ["categoy" => $category]);
        $this->view->assign('category', $category);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     * 
     * @param \VendorInventory\Vendorinventoryadvanced\Domain\Model\Inventory $newInventory
     * @return void
     */
    public function createAction(\VendorInventory\Vendorinventoryadvanced\Domain\Model\Inventory $newInventory)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->inventoryRepository->add($newInventory);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \VendorInventory\Vendorinventoryadvanced\Domain\Model\Inventory $inventory
     * @ignorevalidation $inventory
     * @return void
     */
    public function editAction(\VendorInventory\Vendorinventoryadvanced\Domain\Model\Inventory $inventory)
    {
        $this->view->assign('inventory', $inventory);
    }

    /**
     * action update
     * 
     * @param \VendorInventory\Vendorinventoryadvanced\Domain\Model\Inventory $inventory
     * @return void
     */
    public function updateAction(\VendorInventory\Vendorinventoryadvanced\Domain\Model\Inventory $inventory)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->inventoryRepository->update($inventory);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \VendorInventory\Vendorinventoryadvanced\Domain\Model\Inventory $inventory
     * @return void
     */
    public function deleteAction(\VendorInventory\Vendorinventoryadvanced\Domain\Model\Inventory $inventory)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->inventoryRepository->remove($inventory);
        $this->redirect('list');
    }
}
