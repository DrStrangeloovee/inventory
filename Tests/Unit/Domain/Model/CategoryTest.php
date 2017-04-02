<?php
namespace VendorInventory\Vendorinventoryadvanced\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Abusuefan Ali <abusufean.ali@gmail.com>
 */
class CategoryTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \VendorInventory\Vendorinventoryadvanced\Domain\Model\Category
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \VendorInventory\Vendorinventoryadvanced\Domain\Model\Category();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getCategoryNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCategoryName()
        );

    }

    /**
     * @test
     */
    public function setCategoryNameForStringSetsCategoryName()
    {
        $this->subject->setCategoryName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'categoryName',
            $this->subject
        );

    }
}
