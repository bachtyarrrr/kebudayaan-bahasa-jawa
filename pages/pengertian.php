<?php include '../include/_navbar.php';
$id = $_GET['id'];
$result = mysqli_query($connection, "SELECT * FROM pengertian WHERE id='$id'");
while ($data = mysqli_fetch_array($result)) {
?>
<header class="container" style="align-items:center; display: block; background-color: white; border-radius: 10px">
    <div class="content">
        <h2 style="color: black; border-bottom: 2px solid lightgray;">PENGERTIAN</h2>
        <h1 style="padding-top: 10px; border-bottom: 2px solid lightgray;"><?= $data['pengertian']; ?></h1>
        <p style="padding-top: 10px; color: black; text-shadow:none; font-size:20px">
            <?= $data['deskripsi']; ?>
        </p>
    </div>
</header>
<?php };
include '../include/_footer.php'; ?>