<?php $result = mysqli_query($connection, "SELECT * FROM pengaturan");
while ($data = mysqli_fetch_array($result)) {
?>
    <footer>
        <p><?= $data['name']; ?></p>
    </footer>
    </body>
<?php } ?>

</html>