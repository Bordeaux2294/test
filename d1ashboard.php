<?php

$host = 'localhost';
$dbname = 'dolphin_crm';
$type= $_GET['type'];
    
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4","root");
if($_GET['type'] == "Support"){
    $stmt = $conn ->query("SELECT title, firstname, lastname, email, company, type FROM `Contacts` WHERE type = 'Support'");
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
//if my tickets filter is selected
}else if($_GET['type'] == "Sales Lead"){
    $stmt = $conn ->query("SELECT title, firstname, lastname, email, company, type FROM `Contacts` WHERE type = 'Sales Lead'");
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
// open filter is selected or page is first visited
}else{
    $stmt = $conn ->query("SELECT title, firstname, lastname, email, company, type FROM `Contacts`");
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
}
    
    
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
    
    <table>
        <tr>
            <th> Name </th>
            <th> Email </th>
            <th> Company </th>
            <th> Type </th>
        </tr>
    
        <?php foreach($result as $user): ?>
            <tr>
                <td> <?php echo $user['title'].$user['firstname'].$user['lastname']; ?> </td>
                <td> <?php echo $user['email']; ?> </td>
                <td> <?php echo $user['company']; ?> </td>
                <td> <?php echo $user['type']; ?> </td>
                <td> <?php echo "<a href='#'>view</a>"; ?> </td>
            </tr>
    
        <?php endforeach; ?>
    
    </table>



