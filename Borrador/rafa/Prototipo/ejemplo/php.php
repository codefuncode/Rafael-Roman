 <?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "rafael_roman";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM `prueba`");
    $stmt->execute();

    $resultado = [];
    while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {

        array_push($resultado, $data);

    }
    echo json_encode($resultado);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>
