<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define('FETCH_ALL', 2);
    define('FETCH_ONE', 1);
    define('NOT_FETCH', 0);
    
    function getConnect()
    {
        $connect = new PDO(
            'mysql:host=127.0.0.1;dbname=du_an1;',
            'root',
            ''
        );
        return $connect;
    }
    
    // Nhận vào tham số là câu truy vấn, tham số thứ 2 là cách lấy dũ liệu
    function getData($sql, $fetchType)
    {
        $conn = getConnect();
        $statement = $conn->prepare($sql);
        $statement->execute();
    
        // Cần biết bên kia muốn lấy dl theo kiểu gì : $fetchType
        switch ($fetchType) {
            case FETCH_ALL:
                return $statement->fetchAll();
            case FETCH_ONE:
                return $statement->fetch();
            default:
                return true;
        }
    }
    
?>
   
</body>
</html> -->