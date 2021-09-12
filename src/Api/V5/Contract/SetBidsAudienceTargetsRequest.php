<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetBidsAudienceTargetsRequest
{
    protected $Bids = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return AudienceTargetSetBidsItem[]
     */
    public function getBids(): array
    {
        return $this->Bids;
    }

    /**
     * @param AudienceTargetSetBidsItem[] $value
     *
     * @return $this
     */
    public function setBids(array $value)
    {
        $this->Bids = $value;

        return $this;
    }
}
