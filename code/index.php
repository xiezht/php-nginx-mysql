<?php
    $host='db:3306';
    $user = 'root';
    $password = '1qaz2wsx3edc';
    $dbname='user';

    echo 'Test' . '<br/>';
    $conn = new mysqli($host, $user, $password, $dbname);
    // 检测连接
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error) . "<br/>";
    }
    // 使用 sql 创建数据表
    $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table MyGuests created successfully";
    } else {
        echo "创建数据表错误: " . $conn->error . "<br/>";
    }

    $sql2 = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('r3rf', 'fdsafdf', 'john@example.com')";
    
    if ($conn->query($sql2) === TRUE) {
        echo "新记录插入成功" . "<br/>";
    } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error . "<br/>";
    }

    $sql3 = "SELECT id, firstname, lastname FROM MyGuests";
    $result = $conn->query($sql3);
 
    if ($result->num_rows > 0) {
        // 输出数据
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else {
        echo "0 结果"  . "<br/>";
    }

    $conn->close();
?>