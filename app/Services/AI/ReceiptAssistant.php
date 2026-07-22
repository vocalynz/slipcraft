<?php

namespace App\Services\AI;

/**
 * Prototype AI assistant for receipt analysis.
 *
 * This service provides the foundation for future AI provider integrations.
 */
class ReceiptAssistant
{
    /**
     * Analyze receipt data and return improvement suggestions.
     *
     * @param array $receipt
     * @return array
     */
    public function analyze(array $receipt): array
    {
        $suggestions = [];

        if (empty($receipt['merchant'])) {
            $suggestions[] = 'Add merchant information.';
        }

        if (empty($receipt['amount'])) {
            $suggestions[] = 'Add transaction amount.';
        }

        if (empty($receipt['date'])) {
            $suggestions[] = 'Add receipt date.';
        }

        return [
            'summary' => 'Receipt analysis completed.',
            'suggestions' => $suggestions,
        ];
    }
}
