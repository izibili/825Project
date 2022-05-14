<?php
if (
    (isset($_POST['username']) && !empty($_POST['username'])) || 
    (isset($_POST['f_name']) && !empty($_POST['f_name'])) || 
    (isset($_POST['l_name']) && !empty($_POST['l_name'])) || 
    (isset($_POST['password']) && !empty($_POST['password'])) || 
    (isset($_POST['date_of_birth']) && !empty($_POST['date_of_birth'])) || 
    (isset($_POST['gender']) && !empty($_POST['gender'])) || 
    (isset($_POST['iusername']) && !empty($_POST['iusername'])) ||
    (isset($_POST['ifname']) && !empty($_POST['ifname']))   
    ) {

    if (isset($_POST['username']) && !empty($_POST['username'])) $username = $_POST['username'];
    if (isset($_POST['f_name']) && !empty($_POST['f_name'])) $f_name = $_POST['f_name'];
    if (isset($_POST['l_name']) && !empty($_POST['l_name'])) $l_name = $_POST['l_name'];
    if (isset($_POST['password']) && !empty($_POST['password'])) $password = $_POST['password'];
    if (isset($_POST['re_password']) && !empty($_POST['re_password'])) $re_password = $_POST['re_password'];
    if (isset($_POST['date_of_birth']) && !empty($_POST['date_of_birth'])) $date_of_birth = $_POST['date_of_birth'];
    if (isset($_POST['gender']) && !empty($_POST['gender'])) $gender = $_POST['gender'];
    if (isset($_POST['bus_name']) && !empty($_POST['bus_name'])) $bus_name = $_POST['bus_name'];
    if (isset($_POST['bus_goals']) && !empty($_POST['bus_goals'])) $bus_goals = $_POST['bus_goals'];
    if (isset($_POST['bus_start']) && !empty($_POST['bus_start'])) $bus_start = $_POST['bus_start'];
    if (isset($_POST['email']) && !empty($_POST['email'])) $email = $_POST['email'];
    if (isset($_POST['phone_number']) && !empty($_POST['phone_number'])) $phone_number = $_POST['phone_number'];
    if (isset($_POST['country']) && !empty($_POST['country'])) $country = $_POST['country'];
    if (isset($_POST['state']) && !empty($_POST['state'])) $state = $_POST['state'];
    if (isset($_POST['county']) && !empty($_POST['county'])) $county = $_POST['county'];
    if (isset($_POST['street_number']) && !empty($_POST['street_number'])) $street_number = $_POST['street_number'];
    if (isset($_POST['zip_code']) && !empty($_POST['zip_code'])) $zip_code = $_POST['zip_code'];
    if (isset($_POST['bus_sector']) && !empty($_POST['bus_sector'])) $bus_sector = $_POST['bus_sector'];
    if (isset($_POST['bus_description']) && !empty($_POST['bus_description'])) $bus_description = $_POST['bus_description'];
    if (isset($_POST['bus_networth']) && !empty($_POST['bus_networth'])) $bus_networth = $_POST['bus_networth'];
    if (isset($_POST['turn_over_last_year']) && !empty($_POST['turn_over_last_year'])) $turn_over_last_year = $_POST['turn_over_last_year'];
    if (isset($_POST['bus_street']) && !empty($_POST['bus_street'])) $bus_street = $_POST['bus_street'];
    if (isset($_POST['bus_state']) && !empty($_POST['bus_state'])) $bus_state = $_POST['bus_state'];
    if (isset($_POST['bus_zip']) && !empty($_POST['bus_zip'])) $bus_zip = $_POST['bus_zip'];
    if (isset($_POST['ifname']) && !empty($_POST['ifname'])) $f_name = $_POST['ifname'];
    if (isset($_POST['ilname']) && !empty($_POST['ilname'])) $l_name = $_POST['ilname'];
    if (isset($_POST['iusername']) && !empty($_POST['iusername'])) $username = $_POST['iusername'];
    if (isset($_POST['ipassword']) && !empty($_POST['ipassword'])) $password = $_POST['ipassword'];
    if (isset($_POST['ire_password']) && !empty($_POST['ire_password'])) $re_password = $_POST['ire_password'];
    if (isset($_POST['idate_of_birth']) && !empty($_POST['idate_of_birth'])) $date_of_birth = $_POST['idate_of_birth'];
    if (isset($_POST['igender']) && !empty($_POST['igender'])) $gender = $_POST['igender'];
    if (isset($_POST['iemail']) && !empty($_POST['iemail'])) $email = $_POST['iemail'];
    if (isset($_POST['iphone_number']) && !empty($_POST['iphone_number'])) $phone_number = $_POST['iphone_number'];
    if (isset($_POST['istate']) && !empty($_POST['istate'])) $state = $_POST['istate'];
    if (isset($_POST['icounty']) && !empty($_POST['icounty'])) $county = $_POST['icounty'];
    if (isset($_POST['izip_code']) && !empty($_POST['izip_code'])) $zip_code = $_POST['izip_code'];
    if (isset($_POST['current_investment']) && !empty($_POST['current_investment'])) $current_investment = $_POST['current_investment'];
    if (isset($_POST['ibus_sector']) && !empty($_POST['ibus_sector'])) $bus_sector = $_POST['ibus_sector'];
    if (isset($_POST['account_type']) && !empty($_POST['account_type'])) $account_type = $_POST['account_type'];

    #CODE
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "izibili";

    //create connection
    $db = new \PDO('mysql:host=localhost:3306;dbname=izibili', 'root', '');
    $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

    try {
        $db->beginTransaction();
        $query = 'INSERT INTO users (username, f_name, l_name, gender) VALUES (?, ?, ?, ?)';
        $stmt = $db->prepare($query);

        // print_r($il_name);
        // die;

        $stmt->bindValue(1, $username);
        $stmt->bindValue(2, $f_name);
        $stmt->bindValue(3, $l_name);
        $stmt->bindValue(4, $gender);
        // Create the user
        $result = $stmt->execute();

        $query = 'INSERT INTO email (email, passwords) VALUES (?, ?)';
        $stmt = $db->prepare($query);

        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $password);
        // Create the email
        $result = $stmt->execute();

        $query = 'INSERT INTO users_email (username, email) VALUES (?, ?)';
        $stmt = $db->prepare($query);

        $stmt->bindValue(1, $username);
        $stmt->bindValue(2, $email);
    
        // Create the email
        $result = $stmt->execute();

        $query = 'INSERT INTO zip (zip_code, county) VALUES (?, ?)';
        $stmt = $db->prepare($query);

        $stmt->bindValue(1, $zip_code);
        $stmt->bindValue(2, $county);
    
        // Create the email
        $result = $stmt->execute();

        $query = 'INSERT INTO zip (zip_code, address_id) VALUES (?, ?)';
        $stmt = $db->prepare($query);

        $stmt->bindValue(1, $zip_code);
        $stmt->bindValue(2, $street_number);
    
        // Create the email
        $result = $stmt->execute();

        $query = 'INSERT INTO addresses (username, bus_street, street_number, state, country) VALUES (?, ?, ?, ?, ?)';
        $stmt = $db->prepare($query);

        $stmt->bindValue(1, $username);
        $stmt->bindValue(2, $bus_street);
        $stmt->bindValue(3, $street_number);
        $stmt->bindValue(4, $state);
        $stmt->bindValue(5, $country);
    
        // Create the email
        $result = $stmt->execute();

        $query = 'INSERT INTO business_information (bus_name, bus_goals, bus_start, bus_description, bus_networth, investor_id, bus_sector, username, turn_over_last_year, bus_street, bus_state, zip_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $stmt = $db->prepare($query);

        $stmt->bindValue(1, $bus_name);
        $stmt->bindValue(2, $bus_goals);
        $stmt->bindValue(3, $bus_start);
        $stmt->bindValue(4, $bus_description);
        $stmt->bindValue(5, $bus_networth);
        $stmt->bindValue(6, $investor_id);
        $stmt->bindValue(7, $bus_sector);
        $stmt->bindValue(8, $username);
        $stmt->bindValue(9, $turn_over_last_year);
        $stmt->bindValue(10, $bus_street);
        $stmt->bindValue(11, $bus_state);
        $stmt->bindValue(12, $zip_code);
    
        // Create the email
        $result = $stmt->execute();

        $query = 'INSERT INTO investors (current_investment, account_type, bus_sector, username) VALUES (?, ?, ?, ?)';
        $stmt = $db->prepare($query);

        $stmt->bindValue(1, $current_investment);
        $stmt->bindValue(2, $account_type);
        $stmt->bindValue(3, $bus_sector);
        $stmt->bindValue(4, $username);
    
        // Create the email
        $result = $stmt->execute();

        // print_r($phone_number);
        // print_r($date_of_birth);
        // print_r($bus_sector);
        // print_r($account_type);
        // print_r($username);
        // die();

        $query = 'INSERT INTO entrepreneur (phone_number, date_of_birth, bus_sector, account_type, username) VALUES (?, ?, ?, ?, ?)';
        $stmt = $db->prepare($query);

        $stmt->bindValue(1, $phone_number);
        $stmt->bindValue(2, $date_of_birth);
        $stmt->bindValue(3, $bus_sector);
        $stmt->bindValue(4, $account_type);
        $stmt->bindValue(5, $username);
    
        // Create the email
        $result = $stmt->execute();

        $query = 'INSERT INTO zip_address (zip_code, address_id) VALUES (?, ?)';
        $stmt = $db->prepare($query);

        $stmt->bindValue(1, $zip_code);
        $stmt->bindValue(2, $street_number);
    
        // Create the email
        $result = $stmt->execute();
        
        $user_id = $db->lastInsertId();

        $return = $db->query('SELECT * FROM users WHERE id = ' . $user_id )
            ->fetchAll();

        $db->commit();

        print_r($return);

    } catch (\PDOException $ex){
        //throw new \PDOException($ex->getMessage(), (int)$ex->getCode());
    }

    }else{
        echo "All fields are required!";
        die;
    }
    function Redirect($url, $permanent = false)
        {
            header('Location: ' . $url, true, $permanent ? 301 : 302);

            exit;
        }

        Redirect('./index.php', false);
?>