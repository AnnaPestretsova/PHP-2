<?php
class ProductFood extends Product
{
    // дата производства
    protected $manufactured;
    // срок годности (месяцев)
    protected $shelfLife;

    /**
     * @return int
     */
    public function getManufactured(): int
    {
        return $this->manufactured;
    }

    /**
     * @param int $newDate
     */
    public function setManufactured(int $newDate) {
        $this->manufactured = $newDate;
    }

    /**
     * @return int
     */
    public function getShellLife(): int
    {
        return $this->shellLife;
    }

    /**
     * @param int $newShellLife
     */
    public function setShellLife(int $newShellLife) {
        $this->shellLife = $newShellLife;
    }

    /**
     * @return int
     */
    // Пример вычисляемого read-only свойства
    public function getExpired(): int
    {
        // Черновое вычисление даты окончания срока годности
        // без учёта количества дней в месяце и т.п.
        return $this->manufactured + $this->shellLife * 30 * 24 * 3600 * 1000;
    }