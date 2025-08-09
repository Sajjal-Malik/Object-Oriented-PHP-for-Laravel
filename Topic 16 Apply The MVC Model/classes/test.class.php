<?php

class Test extends Dbh {

    public function getUsers() {
        $sql = "SELECT * FROM users";
        $statement = $this->connect()->query($sql);
        while ($row = $statement->fetch()) {
            echo $row['firstName'] . $row['lastName'] . '<br>';
        }
    }

    public function getUsersStatement($firstName, $lastName) {
        $sql = "SELECT * FROM users WHERE firstName = ? AND lastName = ?";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([$firstName, $lastName]);
        $names = $statement->fetchAll();

        foreach ($names as $name) {
            print $name['firstName'] . "<br>";
        }
    }

    public function setUsersStatement($firstName, $lastName, $dob) {
        $sql = "INSERT INTO users(firstName, lastName, dob) VALUES (?, ?, ?)";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([$firstName, $lastName, $dob]);
    }
}