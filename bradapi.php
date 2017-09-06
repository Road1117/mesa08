<?php
    class cart{
        private $member;
        private $buylist;
        function __construct($member){
            $this->member = $member;
            $this->buylist = array();
        }
        function addItem($pid, $qty){

        }
        function edItem($pid, $qty){

        }
        function rmItem($pid){

        }
        function getBuyList(){
            return $this->buylist;
        }
    }

    class member{
        private $id, $name, $level;
        function __construct($id,$name,$level){
            $this->id = $id;
            $this->name = $name;
            $this->level = $level;
        }
        function getId(){return $this->id;}
        function getName(){return $this->name;}
        function getLevel(){return $this->name;}
    }