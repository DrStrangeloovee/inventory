<?php
namespace VendorInventory\Vendorinventoryadvanced\Controller;

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
 * CategoryController
 */
class CategoryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * categoryRepository
     * 
     * @var \VendorInventory\Vendorinventoryadvanced\Domain\Repository\CategoryRepository
     * @inject
     */
    protected $categoryRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $categories = $this->categoryRepository->findAll();
        $this->view->assign('categories', $categories);
    }

    /**
     * action show
     * 
     * @param \VendorInventory\Vendorinventoryadvanced\Domain\Model\Category $category
     * @return void
     */
    public function showAction(\VendorInventory\Vendorinventoryadvanced\Domain\Model\Category $category)
    {

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
     * @param \VendorInventory\Vendorinventoryadvanced\Domain\Model\Category $newCategory
     * @return void
     */
    public function createAction(\VendorInventory\Vendorinventoryadvanced\Domain\Model\Category $newCategory)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->categoryRepository->add($newCategory);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \VendorInventory\Vendorinventoryadvanced\Domain\Model\Category $category
     * @ignorevalidation $category
     * @return void
     */
    public function editAction(\VendorInventory\Vendorinventoryadvanced\Domain\Model\Category $category)
    {
        $this->view->assign('category', $category);
    }

    /**
     * action update
     * 
     * @param \VendorInventory\Vendorinventoryadvanced\Domain\Model\Category $category
     * @return void
     */
    public function updateAction(\VendorInventory\Vendorinventoryadvanced\Domain\Model\Category $category)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->categoryRepository->update($category);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \VendorInventory\Vendorinventoryadvanced\Domain\Model\Category $category
     * @return void
     */
    public function deleteAction(\VendorInventory\Vendorinventoryadvanced\Domain\Model\Category $category)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->categoryRepository->remove($category);
        $this->redirect('list');
    }
}
