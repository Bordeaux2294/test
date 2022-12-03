<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="viewUser.css">  
    </head>

    <body>
        <header class="container">
            <img class="pic1" src="https://www.freepnglogos.com/uploads/dolphin-png/sea-screamer-dolphin-tours-clearwater-guaranteed-2.png" width="75" height="75">
            <h4 id="h4">Dolphin CRM</h4>
        </header>

        <main>
            <div class="user-container"> 
                <div class="userheader">
                    <h1> Users </h1>
                    <button onclick="document.location='Adduser.html'" id="adduserbtn"> + Add User </button>
                </div>
                <div id="result"> 
                    <?php

                    $host = 'localhost';
                    $dbname = 'dolphin_crm';
                    
                    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4","root");
                    
                    $stmt = $conn->query("SELECT * FROM Users");
                    
                    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    ?>
                    
                    <table>
                        <tr>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Role </th>
                            <th> Created </th>
                        </tr>
                    
                        <?php foreach($users as $user): ?>
                            <tr>
                                <td> <?php echo $user['firstname'].$user['lastname']; ?> </td>
                                <td> <?php echo $user['email']; ?> </td>
                                <td> <?php echo $user['role']; ?> </td>
                                <td> <?php echo $user['created_at']; ?> </td>
                            </tr>
                    
                        <?php endforeach; ?>
                    
                    </table>
                </div>
            </div>

            <section class="headings">
                <div class="container">
                    <div class="button">
                        <button type="submit" name="home"> Home 
                        <img src="home.png" alt="">
                        </button>
                        
                    </div>
                    <div class="button">
                        <button type="submit" name="contact"> New Contact 
                        <img src="user.png" alt="">
                        </button>
                        
                    </div>
                    <div class="button">
                        <button type="submit" name="users"> Users 
                        <img src="multiple-users-silhouette.png" alt="">
                        </button>
                        
                    </div>
                    <hr>
                    <div class="button">
                        <button type="submit" name="logout"> Logout 
                        <img src="logout.png" alt="">
                        </button>
                        
                    </div>
                </div>
            </section>
        </main>  
         
    </body>
</html>