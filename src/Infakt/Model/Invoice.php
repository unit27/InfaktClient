<?php

declare(strict_types=1);

namespace Infakt\Model;

use Infakt\Model\Invoice\Extension;
use Infakt\Model\Invoice\Service;
use Infakt\Model\Invoice\Status;

/**
 * This entity represents an invoice.
 *
 * @see https://www.infakt.pl/developers/invoices.html#def
 */
class Invoice implements EntityInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $number;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var float
     */
    protected $paidPrice;

    /**
     * @var \DateTime
     */
    protected $paidDate;

    /**
     * @var string
     */
    protected $notes;

    /**
     * @var string
     */
    protected $kind;

    /**
     * @var string
     */
    protected $paymentMethod;

    /**
     * @var string
     */
    protected $recipientSignature;

    /**
     * @var string
     */
    protected $sellerSignature;

    /**
     * @var \DateTime
     */
    protected $invoiceDate;

    /**
     * @var \DateTime
     */
    protected $saleDate;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var \DateTime
     */
    protected $paymentDate;

    /**
     * @var float
     */
    protected $netPrice;

    /**
     * @var float
     */
    protected $taxPrice;

    /**
     * @var float
     */
    protected $grossPrice;

    /**
     * @var int
     */
    protected $clientId;

    /**
     * @var string
     */
    protected $clientCompanyName;

    /**
     * @var string
     */
    protected $clientStreet;

    /**
     * @var string
     */
    protected $clientCity;

    /**
     * @var string
     */
    protected $clientPostCode;

    /**
     * @var string
     */
    protected $clientTaxCode;

    /**
     * @var string
     */
    protected $clientCountry;

    /**
     * @var string
     */
    protected $bankName;

    /**
     * @var string
     */
    protected $bankAccount;

    /**
     * @var string
     */
    protected $swift;

    /**
     * @var string
     */
    protected $saleType;

    /**
     * @var string
     */
    protected $invoiceDateKind;

    /**
     * @var Service[]
     */
    protected $services;

    /**
     * @var int
     */
    protected $vatExemptionReason;

    /**
     * @var Extension
     */
    protected $extensions;

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
     * @return Invoice
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * @param string $number
     *
     * @return Invoice
     */
    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return Invoice
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return float
     */
    public function getPaidPrice(): ?float
    {
        return $this->paidPrice;
    }

    /**
     * @param float $paidPrice
     *
     * @return Invoice
     */
    public function setPaidPrice(float $paidPrice): self
    {
        $this->paidPrice = $paidPrice;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPaidDate(): ?\DateTime
    {
        return $this->paidDate;
    }

    /**
     * @param \DateTime|null $paidDate
     *
     * @return Invoice
     */
    public function setPaidDate(?\DateTime $paidDate): self
    {
        $this->paidDate = $paidDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     *
     * @return Invoice
     */
    public function setNotes(string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * @return string
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * @param string $kind
     *
     * @return Invoice
     */
    public function setKind(string $kind): self
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    /**
     * @param string $paymentMethod
     *
     * @return Invoice
     */
    public function setPaymentMethod(string $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRecipientSignature(): ?string
    {
        return $this->recipientSignature;
    }

    /**
     * @param string $recipientSignature
     *
     * @return Invoice
     */
    public function setRecipientSignature(string $recipientSignature): self
    {
        $this->recipientSignature = $recipientSignature;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSellerSignature(): ?string
    {
        return $this->sellerSignature;
    }

    /**
     * @param string $sellerSignature
     *
     * @return Invoice
     */
    public function setSellerSignature(string $sellerSignature): self
    {
        $this->sellerSignature = $sellerSignature;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDate(): ?\DateTime
    {
        return $this->invoiceDate;
    }

    /**
     * @param \DateTime $invoiceDate
     *
     * @return Invoice
     */
    public function setInvoiceDate(\DateTime $invoiceDate): self
    {
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSaleDate(): ?\DateTime
    {
        return $this->saleDate;
    }

    /**
     * @param \DateTime $saleDate
     *
     * @return Invoice
     */
    public function setSaleDate(\DateTime $saleDate): self
    {
        $this->saleDate = $saleDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return Invoice
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPaymentDate(): ?\DateTime
    {
        return $this->paymentDate;
    }

    /**
     * @param \DateTime $paymentDate
     *
     * @return Invoice
     */
    public function setPaymentDate(\DateTime $paymentDate): self
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }

    /**
     * @return float
     */
    public function getNetPrice(): ?float
    {
        return $this->netPrice;
    }

    /**
     * @param float $netPrice
     *
     * @return Invoice
     */
    public function setNetPrice(float $netPrice): self
    {
        $this->netPrice = $netPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getTaxPrice(): ?float
    {
        return $this->taxPrice;
    }

    /**
     * @param float $taxPrice
     *
     * @return Invoice
     */
    public function setTaxPrice(float $taxPrice): self
    {
        $this->taxPrice = $taxPrice;

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
     * @return Invoice
     */
    public function setGrossPrice(float $grossPrice): self
    {
        $this->grossPrice = $grossPrice;

        return $this;
    }

    /**
     * @return int
     */
    public function getClientId(): ?int
    {
        return $this->clientId;
    }

    /**
     * @param int $clientId
     *
     * @return Invoice
     */
    public function setClientId(int $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return string
     */
    public function getClientCompanyName(): ?string
    {
        return $this->clientCompanyName;
    }

    /**
     * @param string $clientCompanyName
     *
     * @return Invoice
     */
    public function setClientCompanyName(string $clientCompanyName): self
    {
        $this->clientCompanyName = $clientCompanyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getClientStreet(): ?string
    {
        return $this->clientStreet;
    }

    /**
     * @param string $clientStreet
     *
     * @return Invoice
     */
    public function setClientStreet(string $clientStreet): self
    {
        $this->clientStreet = $clientStreet;

        return $this;
    }

    /**
     * @return string
     */
    public function getClientCity(): ?string
    {
        return $this->clientCity;
    }

    /**
     * @param string $clientCity
     *
     * @return Invoice
     */
    public function setClientCity(string $clientCity): self
    {
        $this->clientCity = $clientCity;

        return $this;
    }

    /**
     * @return string
     */
    public function getClientPostCode(): ?string
    {
        return $this->clientPostCode;
    }

    /**
     * @param string $clientPostCode
     *
     * @return Invoice
     */
    public function setClientPostCode(string $clientPostCode): self
    {
        $this->clientPostCode = $clientPostCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getClientTaxCode(): ?string
    {
        return $this->clientTaxCode;
    }

    /**
     * @param string $clientTaxCode
     *
     * @return Invoice
     */
    public function setClientTaxCode(string $clientTaxCode): self
    {
        $this->clientTaxCode = $clientTaxCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getClientCountry(): ?string
    {
        return $this->clientCountry;
    }

    /**
     * @param string $clientCountry
     *
     * @return Invoice
     */
    public function setClientCountry(string $clientCountry): self
    {
        $this->clientCountry = $clientCountry;

        return $this;
    }

    /**
     * @return string
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    /**
     * @param string $bankName
     *
     * @return Invoice
     */
    public function setBankName(string $bankName): self
    {
        $this->bankName = $bankName;

        return $this;
    }

    /**
     * @return string
     */
    public function getBankAccount(): ?string
    {
        return $this->bankAccount;
    }

    /**
     * @param string $bankAccount
     *
     * @return Invoice
     */
    public function setBankAccount(string $bankAccount): self
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }

    /**
     * @return string
     */
    public function getSwift(): ?string
    {
        return $this->swift;
    }

    /**
     * @param string $swift
     *
     * @return Invoice
     */
    public function setSwift(string $swift): self
    {
        $this->swift = $swift;

        return $this;
    }

    /**
     * @return string
     */
    public function getSaleType(): ?string
    {
        return $this->saleType;
    }

    /**
     * @param string $saleType
     *
     * @return Invoice
     */
    public function setSaleType(string $saleType): self
    {
        $this->saleType = $saleType;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceDateKind(): ?string
    {
        return $this->invoiceDateKind;
    }

    /**
     * @param string $invoiceDateKind
     *
     * @return Invoice
     */
    public function setInvoiceDateKind(string $invoiceDateKind): self
    {
        $this->invoiceDateKind = $invoiceDateKind;

        return $this;
    }

    /**
     * @return Service[]
     */
    public function getServices(): array
    {
        return $this->services;
    }

    /**
     * @param Service[] $services
     *
     * @return Invoice
     */
    public function setServices(array $services): self
    {
        $this->services = $services;

        return $this;
    }

    /**
     * @return int
     */
    public function getVatExemptionReason(): ?int
    {
        return $this->vatExemptionReason;
    }

    /**
     * @param int|null $vatExemptionReason
     *
     * @return Invoice
     */
    public function setVatExemptionReason(?int $vatExemptionReason): self
    {
        $this->vatExemptionReason = $vatExemptionReason;

        return $this;
    }

    /**
     * @return Extension
     */
    public function getExtensions(): ?Extension
    {
        return $this->extensions;
    }

    /**
     * @param Extension $extensions
     *
     * @return Invoice
     */
    public function setExtensions(Extension $extensions): self
    {
        $this->extensions = $extensions;

        return $this;
    }

    /**
     *
     * @return boolean
     */
    public function isOverdue(int $days = null) {
        if (null === $this->getPaymentDate()) {
            return false;
        }

        $paymentDate = $this->getPaymentDate();
        if (null !== $days) {
            $paymentDate->add(new \DateInterval('P' . $days . 'D'));
        }

        return $paymentDate < new \DateTime();
    }

    /**
     * Create Client based on invoice data
     *
     * @return Client
     */
    public function createClient(): Client
    {
        $client = new Client();
        $client
            ->setCompanyName($this->getClientCompanyName())
            ->setStreet($this->getClientStreet())
            ->setCity($this->getClientCity())
            ->setPostalCode($this->getClientPostCode())
            ->setNip($this->getClientTaxCode())
            ->setCountry($this->getClientCountry());

        return $client;
    }

    /**
     * Is in draft
     *
     * @return bool
     */
    public function isDraft(): bool
    {
        return Status::DRAFT === $this->getStatus();
    }
}
