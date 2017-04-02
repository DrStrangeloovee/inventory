<?php
namespace VendorInventory\Vendorinventoryadvanced\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Abusuefan Ali <abusufean.ali@gmail.com>
 */
class InventoryControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \VendorInventory\Vendorinventoryadvanced\Controller\InventoryController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\VendorInventory\Vendorinventoryadvanced\Controller\InventoryController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllInventoriesFromRepositoryAndAssignsThemToView()
    {

        $allInventories = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $inventoryRepository = $this->getMockBuilder(\VendorInventory\Vendorinventoryadvanced\Domain\Repository\InventoryRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $inventoryRepository->expects(self::once())->method('findAll')->will(self::returnValue($allInventories));
        $this->inject($this->subject, 'inventoryRepository', $inventoryRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('inventories', $allInventories);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenInventoryToView()
    {
        $inventory = new \VendorInventory\Vendorinventoryadvanced\Domain\Model\Inventory();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('inventory', $inventory);

        $this->subject->showAction($inventory);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenInventoryToInventoryRepository()
    {
        $inventory = new \VendorInventory\Vendorinventoryadvanced\Domain\Model\Inventory();

        $inventoryRepository = $this->getMockBuilder(\VendorInventory\Vendorinventoryadvanced\Domain\Repository\InventoryRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $inventoryRepository->expects(self::once())->method('add')->with($inventory);
        $this->inject($this->subject, 'inventoryRepository', $inventoryRepository);

        $this->subject->createAction($inventory);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenInventoryToView()
    {
        $inventory = new \VendorInventory\Vendorinventoryadvanced\Domain\Model\Inventory();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('inventory', $inventory);

        $this->subject->editAction($inventory);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenInventoryInInventoryRepository()
    {
        $inventory = new \VendorInventory\Vendorinventoryadvanced\Domain\Model\Inventory();

        $inventoryRepository = $this->getMockBuilder(\VendorInventory\Vendorinventoryadvanced\Domain\Repository\InventoryRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $inventoryRepository->expects(self::once())->method('update')->with($inventory);
        $this->inject($this->subject, 'inventoryRepository', $inventoryRepository);

        $this->subject->updateAction($inventory);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenInventoryFromInventoryRepository()
    {
        $inventory = new \VendorInventory\Vendorinventoryadvanced\Domain\Model\Inventory();

        $inventoryRepository = $this->getMockBuilder(\VendorInventory\Vendorinventoryadvanced\Domain\Repository\InventoryRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $inventoryRepository->expects(self::once())->method('remove')->with($inventory);
        $this->inject($this->subject, 'inventoryRepository', $inventoryRepository);

        $this->subject->deleteAction($inventory);
    }
}
