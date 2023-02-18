<?php

declare(strict_types=1);

namespace Domain\Controller;

use Domain\GeoCoding\Type\ValueObject\GeoCodingSearchParameters;

class TestController
{
    /** @return array<string,string> */
    public function searchParameters(): array
    {
        return (new GeoCodingSearchParameters())->toArray();
    }
}
