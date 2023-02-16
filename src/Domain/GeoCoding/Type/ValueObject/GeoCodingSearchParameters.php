<?php

declare(strict_types=1);

namespace Domain\GeoCoding\Type\ValueObject;

/** @extends \ArrayObject<int, string> */
class GeoCodingSearchParameters extends \ArrayObject
{
    public function __construct(
        private readonly string $street = '',
        private readonly string $postalcode = '',
        private readonly string $city = '',
        private readonly string $country = '',
        private readonly string $format = 'json',
    ) {
        parent::__construct([
            $this->street,
            $this->postalcode,
            $this->city,
            $this->country,
            $this->format,
        ]);
    }

    /** @return array<string,string> */
    public function toArray(): array
    {
        return [
            'street' => $this->street,
            'postalcode' => $this->postalcode,
            'city' => $this->city,
            'country' => $this->country,
            'format' => $this->format,
        ];
    }
}
