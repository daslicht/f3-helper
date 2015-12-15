<?php

namespace DasLicht\F3;

class Helper
{

	public static function init(){
        // \Template::instance()->extend('img',function($node){
        //     var_dump($node);
        //      array(1) {
        //       ["@attrib"]=>
        //       array(1) {
        //         ["src"]=>
        //         string(25) "{{'ui/images/'.@article.image}}"
        //       }
        //     } 
        // });
        \ChromePhp::log('INIT'); 
	}

    public static function slugify($string)
    {
        //Remove all Spaces
        $string = str_replace(' ', '', $string);
        $table = array(
            'Š' => 'S', 'š' => 's', 'Đ' => 'Dj', 'đ' => 'dj', 'Ž' => 'Z', 'ž' => 'z', 'Č' => 'C', 'č' => 'c', 'Ć' => 'C', 'ć' => 'c',
            'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E',
            'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O',
            'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss',
            'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c', 'è' => 'e', 'é' => 'e',
            'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o',
            'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'ý' => 'y', 'þ' => 'b',
            'ÿ' => 'y', 'Ŕ' => 'R', 'ŕ' => 'r',
        );

        return strtr($string, $table);
    }

    public static function formatFiles($files){
        $myfiles = [];      
        $length = count( $files['files']['name']); 
        for( $i =0; $i < $length; $i++) {
                //var_dump($files['files']['name'][$i]);
                $file = [
                    'name' => $files['files']['name'][$i],
                    'type' => $files['files']['type'][$i],
                    'tmp_name' => $files['files']['tmp_name'][$i],
                    'error' => $files['files']['error'][$i],
                    'size' => $files['files']['error'][$i]
                ];
                array_push($myfiles,$file);
        }
        return $myfiles;
    }




}
