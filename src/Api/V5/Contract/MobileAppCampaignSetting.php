<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppCampaignSetting
{
    protected $Option = null;

    protected $Value = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see MobileAppCampaignSettingsEnum
     */
    public function getOption(): string
    {
        return $this->Option;
    }

    /**
     * @see MobileAppCampaignSettingsEnum
     *
     * @return $this
     */
    public function setOption(string $value)
    {
        $this->Option = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getValue(): string
    {
        return $this->Value;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setValue(string $value)
    {
        $this->Value = $value;

        return $this;
    }
}
