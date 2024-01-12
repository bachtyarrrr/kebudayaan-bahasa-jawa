<?php include '../include/_navbar.php';

$result = mysqli_query($connection, "SELECT * FROM pengaturan");
while ($data = mysqli_fetch_array($result)) {
?>
<header class="container">
    <div class="content">
        <h4>Selamat datang di <?= $data['name']; ?>!</h4>
        <h1 data-aos="fade-left"><?= $data['title']; ?></h1>
        <p>
            <?= $data['deskripsi']; ?>
        </p>
        <div class="row">
            <a href="./profile.php" style="text-decoration: none;">
                <button class="btn">Get Started</button>
            </a>
        </div>
    </div>
    <div class="image">
        <img src="../assets/img/header.svg">
    </div>
</header>

<?php };
include '../include/_footer.php' ?>