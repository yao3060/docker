<?php

if (!function_exists('getSVGIcon')) {
    function getSVGIcon($name, $size = 32)
    {
        $svgIcons = json_decode(file_get_contents(resource_path('sass/octicons-data.json')), true);
        if (isset($svgIcons[$name])) {
            return '<svg height="' . $size . '"
                    class="feather octicon-' . $name . '"
                    viewBox="0 0 16 16"
                    version="1.1"
                    width="' . $size . '"
                    aria-hidden="true">' . $svgIcons[$name]['path'] . '</svg>';
        } else {
            return '<svg height="' . $size . '"
                        class="feather octicon-alert"
                        viewBox="0 0 16 16" version="1.1"
                        width="' . $size . '"
                        aria-hidden="true"><path fill-rule="evenodd" d="M8.893 1.5c-.183-.31-.52-.5-.887-.5s-.703.19-.886.5L.138 13.499a.98.98 0 0 0 0 1.001c.193.31.53.501.886.501h13.964c.367 0 .704-.19.877-.5a1.03 1.03 0 0 0 .01-1.002L8.893 1.5zm.133 11.497H6.987v-2.003h2.039v2.003zm0-3.004H6.987V5.987h2.039v4.006z"></path></svg>';
        }
    }
}
