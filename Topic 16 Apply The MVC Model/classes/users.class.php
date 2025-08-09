<?php

class Users extends Dbh {

    protected function getUser($name) {
        $sql = "SELECT * FROM users WHERE firstName = ?";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([$name]);

        $results = $statement->fetchAll();
        return $results;
    }
    protected function setUser($firstName, $lastName, $dob) {
        $sql = "INSERT INTO users(firstName, lastName, dob) VALUES (?, ?, ?)";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([$firstName, $lastName, $dob]);
    }
}