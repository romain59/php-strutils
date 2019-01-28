<?php
/**
 * Created by PhpStorm.
 * User: romainbon
 * Date: 2019-01-28
 * Time: 15:36
 */

class StrUtils
{
    private $str = 'Texte à modifier';

    public function __construct($str)
    {
        $this->str = $str;
    }

    public function bold () {

        return '<b>'.$this->str.'</b>';

    }

    public function italic () {

        return '<i>'.$this->str.'</i>';

    }

    public function underline () {

        return '<u>'.$this->str.'<u/>';

    }

    public function capitalize () {

        return strtoupper($this->str);

    }

    public function uglefy () {

        return '<b><i><u>'.strtoupper($this->str).'<u/></b></i>';

    }

}