<?php

use App\Filament\Resources\UserResource;

use function Pest\Laravel\get;

it('can render page', function () {
    get(UserResource::getUrl('index'))->assertSuccessful();
});
