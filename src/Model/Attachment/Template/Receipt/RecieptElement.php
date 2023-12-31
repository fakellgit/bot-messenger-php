<?php

namespace Fakell\BotMessenger\Model\Attachment\Template\Receipt;

use Fakell\BotMessenger\Model\Attachment\Template\AbstractElement;


class RecieptElement extends AbstractElement {
    /**
     * @var null|string
     */
    private $currency;

    /**
     * @var int
     */
    private $price;

    /**
     * @var int|null
     */
    private $quantity;

    /**
     * @param string $title
     * @param null $price
     * @param null|string $subtitle
     * @param null|int $quantity
     * @param null|string $currency
     * @param null|string $imageUrl
     */
    public function __construct(
        $title,
        $price = 0,
        $subtitle = null,
        $quantity = null,
        $currency = null,
        $imageUrl = null
    ) {

        parent::__construct($title, $subtitle, $imageUrl);
        $this->currency = $currency;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    /**
     * @return int|null
     */
    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * @return int|null
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * @return null|string
     */
    public function getCurrency() {
        return $this->currency;
    }

    
    #[\ReturnTypeWillChange]
    public function jsonSerialize() {
        return array_merge( parent::jsonSerialize(), [
            'quantity' => $this->quantity,
            'price' => $this->price,
            'currency' => $this->currency
        ]);
    }
}
