<?php
class Product {
    // id в базе
    protected $id;
    // наименование
    protected $name;
    // артикул
    protected $vendorCode;
    // цена
    protected $price;
    // описание
    protected $description;

    /**
     * @return string
     */
    public function getId(): string {
        return $this->id;
    }

    /**
     * @param string $newId
     */
    public function setId(string $newId) {
        $this->id = $newId;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @param string $newName
     */
    public function setName(string $newName) {
        $this->name = $newName;
    }

    /**
     * @return string
     */
    public function getVendorCode(): string {
        return $this->vendorCode;
    }

    /**
     * @param string $newVendorCode
     */
    public function setVendorCode(string $newVendorCode) {
        $this->vendorCode = $newVendorCode;
    }

    /**
     * @return float
     */
    public function getPrice(): float {
        return $this->price;
    }

    /**
     * @param float $newPrice
     */
    public function setPrice(float $newPrice) {
        $this->price = $newPrice;
    }

    /**
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }

    /**
     * @param string $newDescription
     */
    public function setDescription(string $newDescription) {
        $this->description = $newDescription;
    }
}