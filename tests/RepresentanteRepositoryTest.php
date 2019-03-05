<?php

use App\Models\representante;
use App\Repositories\representanteRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class representanteRepositoryTest extends TestCase
{
    use MakerepresentanteTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var representanteRepository
     */
    protected $representanteRepo;

    public function setUp()
    {
        parent::setUp();
        $this->representanteRepo = App::make(representanteRepository::class);
    }

    /**
     * @test create
     */
    public function testCreaterepresentante()
    {
        $representante = $this->fakerepresentanteData();
        $createdrepresentante = $this->representanteRepo->create($representante);
        $createdrepresentante = $createdrepresentante->toArray();
        $this->assertArrayHasKey('id', $createdrepresentante);
        $this->assertNotNull($createdrepresentante['id'], 'Created representante must have id specified');
        $this->assertNotNull(representante::find($createdrepresentante['id']), 'representante with given id must be in DB');
        $this->assertModelData($representante, $createdrepresentante);
    }

    /**
     * @test read
     */
    public function testReadrepresentante()
    {
        $representante = $this->makerepresentante();
        $dbrepresentante = $this->representanteRepo->find($representante->id);
        $dbrepresentante = $dbrepresentante->toArray();
        $this->assertModelData($representante->toArray(), $dbrepresentante);
    }

    /**
     * @test update
     */
    public function testUpdaterepresentante()
    {
        $representante = $this->makerepresentante();
        $fakerepresentante = $this->fakerepresentanteData();
        $updatedrepresentante = $this->representanteRepo->update($fakerepresentante, $representante->id);
        $this->assertModelData($fakerepresentante, $updatedrepresentante->toArray());
        $dbrepresentante = $this->representanteRepo->find($representante->id);
        $this->assertModelData($fakerepresentante, $dbrepresentante->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleterepresentante()
    {
        $representante = $this->makerepresentante();
        $resp = $this->representanteRepo->delete($representante->id);
        $this->assertTrue($resp);
        $this->assertNull(representante::find($representante->id), 'representante should not exist in DB');
    }
}
