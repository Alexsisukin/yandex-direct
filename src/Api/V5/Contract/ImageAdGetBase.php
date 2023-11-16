<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ImageAdGetBase
{
//    Can be omitted.
//    protected $AdImageHash = null;

//    Can be omitted.
//    protected $ErirAdDescription = null;

//    Can be omitted.
//    protected $AutogeneratedErirAdDescription = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAdImageHash(): ?string
    {
        return $this->AdImageHash ?? null;
    }

    /**
     * @return $this
     */
    public function setAdImageHash(?string $value = null)
    {
        $this->AdImageHash = $value;

        return $this;
    }

    public function getErirAdDescription(): ?string
    {
        return $this->ErirAdDescription ?? null;
    }

    /**
     * @return $this
     */
    public function setErirAdDescription(?string $value = null)
    {
        $this->ErirAdDescription = $value;

        return $this;
    }

    public function getAutogeneratedErirAdDescription(): ?string
    {
        return $this->AutogeneratedErirAdDescription ?? null;
    }

    /**
     * @return $this
     */
    public function setAutogeneratedErirAdDescription(?string $value = null)
    {
        $this->AutogeneratedErirAdDescription = $value;

        return $this;
    }
}
