<?php


class Node
{
    protected $data;
    public $link;

    public function __construct($data)
    {
        $this->data = $data;
        $this->link = null;
    }


}