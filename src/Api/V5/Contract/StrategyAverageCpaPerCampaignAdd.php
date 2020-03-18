<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyAverageCpaPerCampaignAdd
{

//    Can be omit.
//    protected $AverageCpa = null;

    protected $AverageCpc = null;

    protected $GoalId = null;

//    Can be omit.
//    protected $WeeklySpendLimit = null;

//    Can be omit.
//    protected $BidCeiling = null;

    /**
     * Creates a new instance of StrategyAverageCpaPerCampaignAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AverageCpa.
     *
     * @return int|null
     */
    public function getAverageCpa()
    {
        return isset($this->AverageCpa) ? $this->AverageCpa : null;
    }

    /**
     * Sets AverageCpa.
     *
     * @param int|null $value
     * @return $this
     */
    public function setAverageCpa($value = null)
    {
        $this->AverageCpa = $value;

        return $this;
    }

    /**
     * Gets AverageCpc.
     *
     * @return int
     */
    public function getAverageCpc()
    {
        return $this->AverageCpc;
    }

    /**
     * Sets AverageCpc.
     *
     * @param int $value
     * @return $this
     */
    public function setAverageCpc($value)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    /**
     * Gets GoalId.
     *
     * @return int
     */
    public function getGoalId()
    {
        return $this->GoalId;
    }

    /**
     * Sets GoalId.
     *
     * @param int $value
     * @return $this
     */
    public function setGoalId($value)
    {
        $this->GoalId = $value;

        return $this;
    }

    /**
     * Gets WeeklySpendLimit.
     *
     * @return int|null
     */
    public function getWeeklySpendLimit()
    {
        return isset($this->WeeklySpendLimit) ? $this->WeeklySpendLimit : null;
    }

    /**
     * Sets WeeklySpendLimit.
     *
     * @param int|null $value
     * @return $this
     */
    public function setWeeklySpendLimit($value = null)
    {
        $this->WeeklySpendLimit = $value;

        return $this;
    }

    /**
     * Gets BidCeiling.
     *
     * @return int|null
     */
    public function getBidCeiling()
    {
        return isset($this->BidCeiling) ? $this->BidCeiling : null;
    }

    /**
     * Sets BidCeiling.
     *
     * @param int|null $value
     * @return $this
     */
    public function setBidCeiling($value = null)
    {
        $this->BidCeiling = $value;

        return $this;
    }


}

