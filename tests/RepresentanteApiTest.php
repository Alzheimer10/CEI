<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class representanteApiTest extends TestCase
{
    use MakerepresentanteTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreaterepresentante()
    {
        $representante = $this->fakerepresentanteData();
        $this->json('POST', '/api/v1/representantes', $representante);

        $this->assertApiResponse($representante);
    }

    /**
     * @test
     */
    public function testReadrepresentante()
    {
        $representante = $this->makerepresentante();
        $this->json('GET', '/api/v1/representantes/'.$representante->id);

        $this->assertApiResponse($representante->toArray());
    }

    /**
     * @test
     */
    public function testUpdaterepresentante()
    {
        $representante = $this->makerepresentante();
        $editedrepresentante = $this->fakerepresentanteData();

        $this->json('PUT', '/api/v1/representantes/'.$representante->id, $editedrepresentante);

        $this->assertApiResponse($editedrepresentante);
    }

    /**
     * @test
     */
    public function testDeleterepresentante()
    {
        $representante = $this->makerepresentante();
        $this->json('DELETE', '/api/v1/representantes/'.$representante->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/representantes/'.$representante->id);

        $this->assertResponseStatus(404);
    }
}
