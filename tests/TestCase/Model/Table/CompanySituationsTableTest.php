<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompanySituationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompanySituationsTable Test Case
 */
class CompanySituationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CompanySituationsTable
     */
    public $CompanySituations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CompanySituations',
        'app.Users',
        'app.Companies',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CompanySituations') ? [] : ['className' => CompanySituationsTable::class];
        $this->CompanySituations = TableRegistry::getTableLocator()->get('CompanySituations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompanySituations);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
