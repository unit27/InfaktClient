<?php

declare(strict_types=1);

namespace Infakt\Model\Invoice;

use Infakt\Model\EntityInterface;

/**
 * This entity represents an invoice service.
 *
 * @see https://www.infakt.pl/developers/invoices.html#services_def
 */
class Service implements EntityInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $taxSymbol;

    /**
     * @var string
     */
    protected $unit;

    /**
     * @var float
     */
    protected $quantity;

    /**
     * @var float
     */
    protected $unitNetPrice;

    /**
     * @var float
     */
    protected $unitNetPriceBeforeDiscount;

    /**
     * @var float
     */
    protected $netPrice;

    /**
     * @var float
     */
    protected $grossPrice;

    /**
     * @var float
     */
    protected $taxPrice;

    /**
     * @var string|null
     */
    protected $symbol;

    /**
     * @var float
     */
    protected $discount;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Service
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Service
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaxSymbol(): ?string
    {
        return $this->taxSymbol;
    }

    /**
     * @param string $taxSymbol
     *
     * @return Service
     */
    public function setTaxSymbol(string $taxSymbol): self
    {
        $this->taxSymbol = $taxSymbol;

        return $this;
    }

    /**
     * @return string
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     *
     * @return Service
     */
    public function setUnit(?string $unit): self
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * @param float $quantity
     *
     * @return Service
     */
    public function setQuantity(float $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return float
     */
    public function getUnitNetPrice(): float
    {
        return $this->unitNetPrice;
    }

    /**
     * @param float $unitNetPrice
     *
     * @return Service
     */
    public function setUnitNetPrice(float $unitNetPrice): self
    {
        $this->unitNetPrice = $unitNetPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getUnitNetPriceBeforeDiscount(): ?float
    {
        return $this->unitNetPriceBeforeDiscount;
    }

    /**
     * @param float $unitNetPriceBeforeDiscount
     *
     * @return Service
     */
    public function setUnitNetPriceBeforeDiscount(?float $unitNetPriceBeforeDiscount): self
    {
        $this->unitNetPriceBeforeDiscount = $unitNetPriceBeforeDiscount;

        return $this;
    }

    /**
     * @return float
     */
    public function getNetPrice(): float
    {
        return $this->netPrice;
    }

    /**
     * @param float $netPrice
     *
     * @return Service
     */
    public function setNetPrice(float $netPrice): self
    {
        $this->netPrice = $netPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getGrossPrice(): ?float
    {
        return $this->grossPrice;
    }

    /**
     * @param float $grossPrice
     *
     * @return Service
     */
    public function setGrossPrice(?float $grossPrice): self
    {
        $this->grossPrice = $grossPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getTaxPrice(): float
    {
        return $this->taxPrice;
    }

    /**
     * @param float $taxPrice
     *
     * @return Service
     */
    public function setTaxPrice(float $taxPrice): self
    {
        $this->taxPrice = $taxPrice;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @param null|string $symbol
     *
     * @return Service
     */
    public function setSymbol(?string $symbol)
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * @return float
     */
    public function getDiscount(): ?float
    {
        return $this->discount;
    }

    /**
     * @param float $discount
     *
     * @return Service
     */
    public function setDiscount(?float $discount): self
    {
        $this->discount = $discount;

        return $this;
    }
}
