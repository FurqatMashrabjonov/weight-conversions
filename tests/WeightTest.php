<?php

use Furqat\WeightConversions\WeightConversions;

it('can convert kilograms to pounds', function () {
    $pounds = WeightConversions::kilograms(100)->toPounds();

    expect($pounds)->toBe(220.46);
});
