<?php

class Model {

    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function getAllEmploees() {
        $sql = "
            SELECT e.id, e.first_name, e.last_name, p.name AS position, eh.hire_date, eh.salary
            FROM emploees e
            LEFT JOIN emploees_position ep ON ep.emploee_id = e.id
            LEFT JOIN positions p ON ep.position_id = p.id
            LEFT JOIN emploees_hire eh ON eh.emploee_id = e.id
            ORDER BY e.id;
        ";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getAmountOfEmploees() {
        $sql = "SELECT COUNT(id) AS amount_of_emploees FROM emploees";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetch()->amount_of_emploees;
    }

    public function createEmploee($first_name, $last_name, $position_id, $hire_date, $salary) {
        //echo $first_name, $last_name, $position_id, $hire_date, $salary;

        $date = date("Y-m-d H:i:s");
        $sql = "
        INSERT INTO `emploees` (
            `first_name`,
            `last_name`
        ) VALUES (
            :first_name,
            :last_name
        );";
        $query = $this->db->prepare($sql);
        
        $parameters = array(
            ':first_name' => $first_name,
            ':last_name' => $last_name
        );

        //include_once '../application/libs/Helper.php';
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
        $last_id = $this->db->lastInsertId();

        $sql = "
        INSERT INTO `emploees_position` (
            `emploee_id`,
            `position_id`
        ) VALUES (
            :emploee_id,
            :position_id
        );";
        $query = $this->db->prepare($sql);
        
        $parameters = array(
            ':emploee_id' => $last_id,
            ':position_id' => $position_id
        );

        $query->execute($parameters);

        $sql = "
        INSERT INTO `emploees_hire` (
            `emploee_id`,
            `hire_date`,
            `salary`
        ) VALUES (
            :emploee_id,
            :hire_date,
            :salary
        );";
        $query = $this->db->prepare($sql);
        
        $parameters = array(
            ':emploee_id' => $last_id,
            ':hire_date' => $hire_date,
            ':salary' => $salary
        );

        $query->execute($parameters);

        return $last_id;
    }

    public function setEmploeeImage($inserted_id, $emploee_pic_path) {
        $sql = "
        UPDATE `emploees`
        SET `photo` = :photo
        WHERE `id` = :id;";

        $query = $this->db->prepare($sql);
        
        $parameters = array(
            ':id' => $inserted_id,
            ':photo' => $emploee_pic_path
        );

        //include_once '../application/libs/Helper.php';
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    public function createRandomEmploees($count) {
        $record = 1;

        $first_name_arr = ["Andrey", "Sergey", "Ivan", "Oleksey", "Petro", "Oleg", "Nikolay", "Danil"];
        $last_name_arr = ["Sokolov", "Ivanov", "Petrov", "Danilov", "Olekseev"];
        $position_id_arr = ["1", "2", "3", "4", "5", "6", "7"];
        $hire_date_arr = ["2017-11-06", "2013-11-08", "2015-06-07", "2015-04-08", "2018-04-08"];
        $salary_arr = ["8000.00", "12000.00", "20000.00", "18000.00", "14000.00", "15000.00",];

        for ($i=0; $i < $count; $i++) {

            $first_name = $first_name_arr[rand(1, count($first_name_arr))];
            $last_name = $last_name_arr[rand(1, count($last_name_arr))];
            $position_id = $position_id_arr[rand(1, count($position_id_arr))];
            $hire_date = $hire_date_arr[rand(1, count($hire_date_arr))];
            $salary = $salary_arr[rand(1, count($salary_arr))];

            $sql = "
            INSERT INTO `emploees` (
                `first_name`,
                `last_name`
            ) VALUES (
                :first_name,
                :last_name
            );";
            $query = $this->db->prepare($sql);
            
            $parameters = array(
                ':first_name' => $first_name,
                ':last_name' => $last_name
            );
    
            //include_once '../application/libs/Helper.php';
            //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
    
            $query->execute($parameters);
            $last_id = $this->db->lastInsertId();
    
            $sql = "
            INSERT INTO `emploees_position` (
                `emploee_id`,
                `position_id`
            ) VALUES (
                :emploee_id,
                :position_id
            );";
            $query = $this->db->prepare($sql);
            
            $parameters = array(
                ':emploee_id' => $last_id,
                ':position_id' => $position_id
            );
    
            $query->execute($parameters);
    
            $sql = "
            INSERT INTO `emploees_hire` (
                `emploee_id`,
                `hire_date`,
                `salary`
            ) VALUES (
                :emploee_id,
                :hire_date,
                :salary
            );";
            $query = $this->db->prepare($sql);
            
            $parameters = array(
                ':emploee_id' => $last_id,
                ':hire_date' => $hire_date,
                ':salary' => $salary
            );
    
            $query->execute($parameters);

            echo $record.": New record created.<br>";
            $record++;

        }
    }

    public function getEmploee($emploee_id) {
        $sql = "
            SELECT e.id, e.first_name, e.last_name, e.email, e.phone, e.address, e.about, e.nicname, e.photo, p.name AS position, eh.hire_date, eh.salary
            FROM emploees e
            LEFT JOIN emploees_position ep ON ep.emploee_id = e.id
            LEFT JOIN positions p ON ep.position_id = p.id
            LEFT JOIN emploees_hire eh ON eh.emploee_id = e.id
            WHERE e.id = :emploee_id;
        ";

        $query = $this->db->prepare($sql);
        $parameters = array(':emploee_id' => $emploee_id);

        $query->execute($parameters);

        return $query->fetch();
    }

    public function getProfile($member_id) {
        $sql = "SELECT id, username, email FROM members WHERE id = :user_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':user_id' => $member_id);

        $query->execute($parameters);

        return $query->fetch();
    }

    
    public function deleteEmploee($emploee_id) {
        $sql = "DELETE FROM `emploees` WHERE id = :emploee_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':emploee_id' => $emploee_id);

        $query->execute($parameters);
    }

    public function getAllMembers() {
        $sql = "
            SELECT m.id, m.firstname, m.lastname, m.email, m.phone, m.date_of_birth, g.name
            FROM members m
            LEFT JOIN members_group mg ON mg.member_id = m.id
            LEFT JOIN groups g ON mg.group_id = g.id
            ORDER BY m.id;
        ";
        $query = $this->db->prepare($sql);
        $query->execute();

        //include_once '../application/libs/Helper.php';
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        return $query->fetchAll();
    }

    public function createMember(
        $firstname,
        $lastname,
        $date_of_birth,
        $phone,
        $email,
        $username,
        $password,
        $group_id,
        $member_pic
    ) {
        $date = date("Y-m-d H:i:s");
        $sql = "
        INSERT INTO `members` (
            `firstname`,
            `lastname`,
            `date_of_birth`,
            `phone`,
            `email`,
            `username`,
            `password`
        ) VALUES (
            :firstname,
            :lastname,
            :date_of_birth,
            :phone,
            :email,
            :username,
            :password
        );";
        $query = $this->db->prepare($sql);
        
        $parameters = array(
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':date_of_birth' => $date_of_birth,
            ':phone' => $phone,
            ':email' => $email,
            ':username' => $username,
            ':password' => $password
        );

        //include_once '../application/libs/Helper.php';
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
        $last_id = $this->db->lastInsertId();

        return $last_id;
    }

    public function setMemberAvatar($inserted_id, $member_pic_path) {
        $sql = "
        UPDATE `members`
        SET `photo` = :photo
        WHERE `id` = :id;";

        $query = $this->db->prepare($sql);
        
        $parameters = array(
            ':id' => $inserted_id,
            ':photo' => $member_pic_path
        );

        //include_once '../application/libs/Helper.php';
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    public function deleteMember($emploee_id) {
        $sql = "DELETE FROM `members` WHERE id = :member_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':member_id' => $emploee_id);

        $query->execute($parameters);
    }
}