<?php include '../include/_navbar.php';
$result = mysqli_query($connection, "SELECT * FROM profile");
while ($data = mysqli_fetch_array($result)) {
?>
<header class="container">
    <div class="content">
        <h4>PROFILE</h4>
        <h1 data-aos="fade-left"><?= $data['name']; ?></h1>
        <p>
            <?= $data['deskripsi']; ?>
        </p>
        <div class="row">
            <a href="https://www.instagram.com/<?= $data['instagram']; ?>" style="text-decoration: none;"
                target="_blank">
                <button class="btn">Instagram</button>
            </a>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?= $data['email']; ?>"
                style="text-decoration: none;" target="_blank">
                <button class="btn">Email</button>
            </a>
        </div>
    </div>
    <div class="image">
        <img src="<?= "../admin/assets/img/" . $data['gambar']; ?>" style="width: 500px">
    </div>
</header>
<?php };
include '../include/_footer.php'; ?>