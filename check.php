<?php
if (isset($_SESSION['user']) == 0) {
    echo "<script>alert('Liên hệ admin để thực hiện chức năng này');
    location.replace('" . BASE_URL . "');
</script>";

    die();
} else {
    if ($_SESSION['user']['role'] == 1) {
        echo "<script>alert('Liên hệ admin để thực hiện chức năng này');
            location.replace('" . BASE_URL . "');
        </script>";

        die();
    }
}
