<?php

namespace App\Contracts;

interface AIProvider
{
    /**
     * Analyze structured data using an AI provider.
     *
     * @param array $payload
     * @return array
     */
    public function analyze(array $payload): array;
}
