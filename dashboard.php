<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="dashboard.css">
    <script src="dashboard.js" type="text/javascript"></script>
</head>

<body>
    <nav class="navbar">
        <img class="logo" src="https://www.freepnglogos.com/uploads/dolphin-png/sea-screamer-dolphin-tours-clearwater-guaranteed-2.png" width="40" height="40">
        <div class="logo">Dolphin CRM</div>
    </nav>
    <aside class="main-aside">

        <ul>
            <li><a href="example.com">Home</a></li>
            <li><a href="example.com">Users</a></li>
            <li><a href="example.com">New Contact</a></li>
            <li><a href="example.com">New User</a></li>
            <hr>
            <li><a href="example.com">Logout</a></li>

        </ul>
    </aside>
    <div class="main-content">
        <nav class="nav2">
            <div class="dash">
                <h1>Dashboard</h1>
                <button onclick="document.location='addcontact.html'" id="addcntbtn"> + Add Contact </button>
            </div>
            <ul>
                <li>Filter By:</li>
                <li><button id="all">All</button></li>
                <li><button id="sl">Sales Leads</button></li>
                <li><button id="s">Support</button></li>
                <li><button id="atm">Assigned to Me</button></li>
            </ul>
        </nav>
        <div class="Contacts">
        <?php

$host = 'localhost';
$dbname = 'dolphin_crm';
    
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4","root");
    
$stmt = $conn->query("SELECT title, firstname, lastname, email, company, type FROM Contacts");
    
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

           
        </div>
    </div>
</body>

</html>