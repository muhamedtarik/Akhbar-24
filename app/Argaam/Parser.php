<?php

namespace App\Argaam;

class Parser
{
    /**
     * Render item body.
     *
     * @param $data
     * @return mixed|string
     */
    public static function renderData($data)
    {
        // embeds
        if ($data['type'] == 'embed') {
            return $data['iframe'];
        }

        // images
        if ($data['type'] == 'image') {
            $img = '<img src="' . $data['data'] . '" class="w-100 mt-3 mb-2 item-details__image">';

            if (! is_null($data['caption'])) {
                $img .= "<caption>${data['caption']}</caption>";
            }

            return $img;
        }

        // quote
        if ($data['type'] == 'quote') {
            $quote = '<p class="item-details__quote">' . $data['data'] . '</p>';

            if (! is_null($data['caption'])) {
                $quote .= '<p class="item-details__quote_caption">' . $data['caption'] . '</p>';
            }

            return $quote;
        }

        // videos
        if ($data['type'] == 'video') {
            if ($data['provider'] == 'youtube') {
                return $data['iframe'];
            }
        }

        // html
        return '<p class="mb-2">' . $data['data'] . '</p>';
    }
}
