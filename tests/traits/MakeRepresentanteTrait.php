<?php

use Faker\Factory as Faker;
use App\Models\representante;
use App\Repositories\representanteRepository;

trait MakerepresentanteTrait
{
    /**
     * Create fake instance of representante and save it in database
     *
     * @param array $representanteFields
     * @return representante
     */
    public function makerepresentante($representanteFields = [])
    {
        /** @var representanteRepository $representanteRepo */
        $representanteRepo = App::make(representanteRepository::class);
        $theme = $this->fakerepresentanteData($representanteFields);
        return $representanteRepo->create($theme);
    }

    /**
     * Get fake instance of representante
     *
     * @param array $representanteFields
     * @return representante
     */
    public function fakerepresentante($representanteFields = [])
    {
        return new representante($this->fakerepresentanteData($representanteFields));
    }

    /**
     * Get fake data of representante
     *
     * @param array $postFields
     * @return array
     */
    public function fakerepresentanteData($representanteFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nombre' => $fake->word,
            'email' => $fake->word,
            'tlf' => $fake->word,
            'estudiante_id' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $representanteFields);
    }
}
