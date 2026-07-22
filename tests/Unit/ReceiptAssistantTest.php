<?php

namespace Tests\Unit;

use App\Services\AI\ReceiptAssistant;
use Tests\TestCase;

class ReceiptAssistantTest extends TestCase
{
    public function test_it_detects_missing_receipt_information(): void
    {
        $assistant = new ReceiptAssistant();

        $result = $assistant->analyze([
            'merchant' => 'Example Store',
        ]);

        $this->assertArrayHasKey('suggestions', $result);
        $this->assertNotEmpty($result['suggestions']);
    }
}
