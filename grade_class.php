<?php
/*
 * Duarte Cancela
 * 13683
 * 21/10/2021
 */

class Grade{
    private $subjectList = array();

    /**
     * @return array
     */
    public function getSubjectList()
    {
        return $this->subjectList;
    }

    /**
     *
     */
    public function setSubjectList( $n, $g)
    {
        array_push($this->subjectList, array($n, $g, $this->status($g)));


    }

    function status($grade){
        if ($grade >= 9.5) {
            return "Aprroved";
        } else {
            return "Disapproved";
        }
    }

}





