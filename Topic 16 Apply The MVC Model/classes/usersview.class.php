<?php

class UsersView extends Users {
    
    public function showUser($name) {
        $result = $this->getUser($name);
        echo "Full Name: " . $result['firstName'] . $result['lastName'];
        print "Date of Birth: " . $result['dob'];
    }
}