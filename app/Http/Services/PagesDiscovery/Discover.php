<?php

namespace App\Http\Services\PagesDiscovery;

class Discover
{

    public function homepage(): array
    {
        return (new DrupalRequests())->homepage();
    }

    public function services(): array
    {
        return (new DrupalRequests())->services();
    }


}
