<?php
namespace VendorInventory\Vendorinventoryadvanced\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Abusuefan Ali <abusufean.ali@gmail.com>
 */
class InventoryTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \VendorInventory\Vendorinventoryadvanced\Domain\Model\Inventory
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \VendorInventory\Vendorinventoryadvanced\Domain\Model\Inventory();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );

    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );

    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getQuantityReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setQuantityForIntSetsQuantity()
    {
    }

    /**
     * @test
     */
    public function getCategoryNameReturnsInitialValueForCategory()
    {
        self::assertEquals(
            null,
            $this->subject->getCategoryName()
        );

    }

    /**
     * @test
     */
    public function setCategoryNameForCategorySetsCategoryName()
    {
        $categoryNameFixture = new \VendorInventory\Vendorinventoryadvanced\Domain\Model\Category();
        $this->subject->setCategoryName($categoryNameFixture);

        self::assertAttributeEquals(
            $categoryNameFixture,
            'categoryName',
            $this->subject
        );

    }
}
