<?php

require_once ('src/fb_token.php');
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

class facebook_api
{
    private $fp;
    private $base_url;
    private $node;
    private $fields;
    private $access_token;

    /**
     * Facebook_api constructor.
     * Initialize json file.
     */
    public function __construct()
    {
        $this->fp = fopen((basename(__FILE__, '.php') . '.json'), 'w');
        $this->base_url = 'https://graph.facebook.com/v2.11/';
        $this->node = 'me?';
        $this->fields = 'fields=' . FB_FIELDS;
        $this->access_token = 'access_token=' . FB_ACCESS_TOKEN;
    }


    function get_facebook_data_array(){
         return $facebook_data_array = array(
            'base_url'     => $this->base_url,
            'node'         => $this->node,
            'fields'       => $this->fields,
            'access_token' => $this->access_token,
        );
    }



    function get_facebook_data($args, $fp)
    {
        $url = $args['base_url'] . $args['node'] . $args['fields'] . '&' . $args['access_token'];

        /* Initiate request.*/
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
//        curl_setopt($ch, CURLOPT_FILE, $fp);

        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }

    /**
     * @return bool|resource
     */
    public function getFp()
    {
        return $this->fp;
    }

    /**
     * @param bool|resource $fp
     */
    public function setFp($fp): void
    {
        $this->fp = $fp;
    }

    /**
     * @return string
     */
    public function getBaseUrl(): string
    {
        return $this->base_url;
    }

    /**
     * @param string $base_url
     */
    public function setBaseUrl(string $base_url): void
    {
        $this->base_url = $base_url;
    }

    /**
     * @return string
     */
    public function getNode(): string
    {
        return $this->node;
    }

    /**
     * @param string $node
     */
    public function setNode(string $node): void
    {
        $this->node = $node;
    }

    /**
     * @return string
     */
    public function getFields(): string
    {
        return $this->fields;
    }

    /**
     * @param string $fields
     */
    public function setFields(string $fields): void
    {
        $this->fields = $fields;
    }

    /**
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->access_token;
    }

    /**
     * @param string $access_token
     */
    public function setAccessToken(string $access_token): void
    {
        $this->access_token = $access_token;
    }


}