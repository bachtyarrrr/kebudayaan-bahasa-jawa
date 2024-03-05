<?php include '../include/_navbar.php';
$result = mysqli_query($connection, "SELECT * FROM profile");
?>
<style>
    .project {
        margin-top: 2rem;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
    }

    .project .card {
        padding: 3rem 2rem 1rem 2rem;
        background-color: #424530;
        display: flex;
        flex-direction: column;
        border: 2px solid transparent;
        border-radius: 15px;
        transition: all 0.3s ease-in-out;
    }

    .project .card .content-profile {
        flex: 1;
        margin-bottom: 2rem;
    }

    .project .card .content-profile img {
        border-radius: 10px;
        width: 100%;
        margin-bottom: 1rem;
        border: 1px solid white;
    }

    .project .card h3 {
        /* margin-bottom: 1rem; */
        color: #fff;
        font-size: 1.2rem;
        font-weight: 500;
    }

    .project .card p {
        color: var(--font-color);
        margin-bottom: 0.75rem;
    }

    h2 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 10px;
        margin-top: 100px;
        color: #000;
        justify-content: center;
        text-align: center;
    }

    .btn {
        background-color: darkgoldenrod;
    }
</style>
<section class="container">
    <h2>ANGGOTA</h2>
    <div class="project">
        <?php
        while ($data = mysqli_fetch_array($result)) {
        ?>
            <div class="card">
                <div class="content-profile">
                    <img src="<?= "../admin/assets/img/" . $data['gambar']; ?>" alt="Sistem Pakar" class="gallery-image">
                    <h3><?= $data['name'] ?></h3><br>
                    <p><?= $data['deskripsi'] ?></p>
                    <div class="row">
                        <a href="https://www.instagram.com/<?= $data['instagram']; ?>" style="text-decoration: none;" target="_blank">
                            <button class="btn">Instagram</button>
                        </a>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?= $data['email']; ?>" style="text-decoration: none;" target="_blank">
                            <button class="btn">Email</button>
                        </a>
                    </div>
                </div>
            </div>
        <?php }; ?>
    </div>
</section>
<?php
include '../include/_footer.php'; ?>