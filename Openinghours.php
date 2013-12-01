<?php

/**
 * Installed resource to create a web service for getting opening hours
 */

class Openinghours{

    /**
     * The set of REST parameters that this resource requires.
     */
    public static function getParameters(){
        return array(
 /*           'symbol' => array(
                'required' => true,
                'description' => "The official stock symbol. It's also possible to specify multiple symbols by seperating them with a plus sign.",
            )*/
        );
    }

    /**
     * Set parameters to be used in the read function, you can manipulate or validate your REST parameters here
     */
    public function setParameter($key, $value){
        $this->$key = $value;
    }

    /**
     * For semantic resources only (optional)
     */
    public function getNamespaces(){
        return array();
    }

    /**
     * Return an array with your data
     */
    public function getData(){

        return "first test";
    }

    /**
     * Return some documentation for this resource
     */
    public static function getDocumentation(){
        return "Retrieve opening hours.";
    }

}
