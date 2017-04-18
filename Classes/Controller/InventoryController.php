<?php
namespace MyVendor\Inventory\Controller;
use \TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use \TYPO3\CMS\Core\Utility\GeneralUtility;
use \MyVendor\Inventory\Domain\Repository\ProductRepository;

class InventoryController extends ActionController {

    public function listAction() {
        $productRepository = $this->objectManager->get(ProductRepository::class);
        $products = $productRepository->findAll();
        $this->view->assign('products', $products);
    }
}
?>