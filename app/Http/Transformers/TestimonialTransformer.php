<?php

namespace App\Http\Transformers;

use League\Fractal\TransformerAbstract;

class TestimonialTransformer extends TransformerAbstract
{

    public function transform($content, $included): array
    {

        return [
            'Client_name' => $content->attributes->field_client_name,
            'Client_Icon' => $this->getClientIcon($included, $content?->relationships?->field_client_icon?->data?->id),
            'Client_Position' => $content->attributes->field_position,
            'Testimonial' => $content->attributes->field_testimonial->value
        ];

    }

    protected function getClientIcon($data, $node_id): string
    {

        $url = '';

        foreach($data as $item ){

            if($item->id === $node_id){
                $url  = env('DRUPAL_CMS_ASSETS_URL') . $item->attributes->uri->url;
            }

        }

        return $url;
    }

}
