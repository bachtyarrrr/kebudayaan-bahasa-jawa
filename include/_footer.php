<?php $result = mysqli_query($connection, "SELECT * FROM profile");
while ($data = mysqli_fetch_array($result)) {
?>
<footer>
    <p><?= $data['name']; ?></p>
</footer>
</body>
<?php } ?>

</html>