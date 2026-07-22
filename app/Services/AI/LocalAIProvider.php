<?php

namespace App\Services\AI;

use App\Contracts\AIProvider;

class LocalAIProvider implements AIProvider
{
    public function analyze(array $payload): array
    {
        return [
            'status' => 'prototype',
            'message' => 'AI provider interface ready for integration.',
            'input' => $payload,
        ];
    }
}
