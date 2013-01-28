<?php

namespace Utility;

class Encrypt
{
    private $key;
    private $cypher;
    private $mode;

    public function __construct($key, $cypher = '', $mode = '')
    {
	    $this->key = $key;

	    if (empty($cypher)) {
		    $cypher = MCRYPT_RIJNDAEL_256;
	    }

	    if (empty($mode)) {
		    $mode = MCRYPT_MODE_CFB;
	    }

	    $this->cypher = $cypher;
	    $this->mode = $mode;
    }

    public function encrypt($plain_text)
    {
        $td = mcrypt_module_open($this->cypher, '', $this->mode, '');
        $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_DEV_URANDOM);
        mcrypt_generic_init($td, $this->key, $iv);
        $crypt_text = mcrypt_generic($td, $plain_text);
        mcrypt_generic_deinit($td);

        return $iv.$crypt_text;
    }

    public function decrypt($encrypt_text)
    {
        $plain_text = '';

        $td = mcrypt_module_open($this->cypher, '', $this->mode, '');
        $ivsize = mcrypt_enc_get_iv_size($td);
        $iv = substr($encrypt_text, 0, $ivsize);
        $encrypt_text = substr($encrypt_text, $ivsize);

        if ($iv) {
            mcrypt_generic_init($td, $this->key, $iv);
            $plain_text = mdecrypt_generic($td, $encrypt_text);
            mcrypt_generic_deinit($td);
        }

        return $plain_text;
    }

}