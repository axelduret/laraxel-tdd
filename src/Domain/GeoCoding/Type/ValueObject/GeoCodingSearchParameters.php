<?php

declare(strict_types=1);

namespace Domain\GeoCoding\Type\ValueObject;

/** @extends \ArrayObject<int, string> */
final class GeoCodingSearchParameters extends \ArrayObject
{
    public function __construct(
        public readonly string $street = '',
        public readonly string $postalcode = '',
        public readonly string $city = '',
        public readonly string $country = '',
        public readonly string $format = 'json',
    ) {
        parent::__construct([
            'street' => $street,
            'postalcode' => $postalcode,
            'city' => $city,
            'country' => $country,
            'format' => $format,
        ]);
    }
}
