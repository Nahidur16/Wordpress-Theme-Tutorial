<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
</head>

<body>
    <!-- Sidebar
============================================= -->
    <div class="sidebar nobottommargin col_last">
        <div class="sidebar-widgets-wrap">
            <?php
            if (is_active_sidebar('ju_sidebar')) {
                dynamic_sidebar('ju_sidebar');
            }
            ?>

        </div>
    </div><!-- .sidebar end -->
</body>

</html>