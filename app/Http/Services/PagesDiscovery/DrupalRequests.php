<?php

namespace App\Http\Services\PagesDiscovery;

use App\Http\Transformers\HomeTransformer;
use App\Http\Transformers\ServicesTransformer;
use App\Http\Transformers\TestimonialTransformer;
use Illuminate\Support\Facades\Http;

class DrupalRequests
{
    public function homepage(): array
    {

        $include = 'include=field_revolution_slider.field_background_image,field_services,field_about_us,field_services_overview';
        $response = Http::get(env('DRUPAL_CMS_BASE_URL') . 'node/home_page?'.$include);

//        dd(json_decode($response));
        return (new HomeTransformer())->transform($response);
    }

    public function testimonials(): array {

        $include = 'include=field_client_icon';
        $response = Http::get(env('DRUPAL_CMS_BASE_URL') . 'node/testimonials?'.$include);

        $testimonials = [];

        foreach(json_decode($response)?->data as $testimonial){

            $testimonials[] = (new TestimonialTransformer())->transform($testimonial, json_decode($response)->included);

        }

        return $testimonials;

    }

    public function services(): array
    {
        $include = 'include=field_service_gallery';
        $response = Http::get(env('DRUPAL_CMS_BASE_URL').'node/services?'.$include);

        return (new ServicesTransformer())->transform($response);
    }

}
