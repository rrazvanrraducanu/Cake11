<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FlowerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FlowerTable Test Case
 */
class FlowerTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FlowerTable
     */
    public $Flower;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.flower'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Flower') ? [] : ['className' => FlowerTable::class];
        $this->Flower = TableRegistry::get('Flower', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Flower);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
