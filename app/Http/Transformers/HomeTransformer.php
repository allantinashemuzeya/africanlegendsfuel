<?php

namespace App\Http\Transformers;

use App\Http\Services\PagesDiscovery\DrupalRequests;
use League\Fractal\TransformerAbstract;

class HomeTransformer extends TransformerAbstract
{
    public function transform($data): array
    {
        $data = json_decode($data);


        return [
            'title' => $data->data[0]->attributes->title,
            'contact_number' => $data->data[0]->attributes->field_call_us_on,
            'email' => $data->data[0]->attributes->field_email,
            'whatsapp_number' => $data->data[0]->attributes->field_whatsapp_number,
            'revolution_slider' => $this->getSliders($data->included),
            'services' => $this->getServices($data->included),
            'about_section' => $this->getAboutSection($data->included),
            'testimonials' => (new DrupalRequests())->testimonials()
        ];
    }

    protected function getSliders($data): array
    {
        $sliders = [];

        foreach ($data as $item) {
            if ($item->type === 'paragraph--revolution_slider') {

                $slide = [];
                $slide['title'] = $item->attributes->field_title;
                $slide['sub_title'] = $item->attributes->field_sub_title;
                $slide['src'] = $this->getBackgroundImage($data, $item->relationships->field_background_image->data->id);

                $sliders[] = $slide;
            }
        }

        return $sliders;
    }

    protected function getBackgroundImage($data, $needle_id): string
    {
        $url = '';
        foreach ($data as $item) {
            if ($item->type === 'file--file' && $item->id === $needle_id) {
                $url =  env('DRUPAL_CMS_ASSETS_URL') . $item->attributes->uri->url;
            }
        }

        return $url;
    }

    protected function getServicesOverview($data): array
    {
        $content = [];

        foreach($data as $item){
            if($item->type === 'paragraph--services_overview'){
                $content['description'] = str_replace('/cms/sites/default/files/', env('DRUPAL_CMS_ASSETS_URL') . 'cms/sites/default/files/', $item->attributes->field_description->value );
            }
        }

        return $content;
    }

    public function getServices($data): array
    {
        $services = [];

        foreach ($data as $item) {
            if($item->type === 'node--services') {
                $services[] = [
                    'title' => $item->attributes->title,
                    'description' => $item->attributes->body->value,
                ];
            }
        }

        $services['overview'] = $this->getServicesOverview($data);

        return $services;

    }

    public function getAboutSection($data): array
    {

        $content = [];

        foreach($data as $item){
            if($item->type === 'paragraph--about_section_'){

                $content['title'] = $item->attributes->field_title;
                $content['description'] = str_replace('/cms/sites/default/files/', env('DRUPAL_CMS_ASSETS_URL') . 'cms/sites/default/files/', $item->attributes->field_description->value );

            }
        }

        return $content;
    }
}
