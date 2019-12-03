<?php

namespace Weissheiten\Sassxample;

class Template{

    /**
     * @param String $templatePath The string path of the HTML-template.
     * @param array $templateValues An associative array consisting values which should be replaced
     * @param String $prefix character sequence indicating the begin of values
     * @param String $end character sequence indicating the end of values
     * @return String The HTML markup after templating
     */
    public function render(String $templatePath, array $templateValues, String $prefix = "###", String $end = '###') : String{
        $homepage = file_get_contents($templatePath);

        foreach ($templateValues as $key => $value) {
            $homepage = str_replace($prefix.$key.$end,$value,$homepage);
        }

        return $homepage;
    }

}
