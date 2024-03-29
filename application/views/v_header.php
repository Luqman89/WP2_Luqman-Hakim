<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB II | Merancang Template Sederhana Dengan Codeigniter</title>
</head>
<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>Rental Buku</h1>
                <h3>Membuat Template Sederhana Denngan Codeigniter</h3>
            </hgroup>
            <nav>
                <ul>
                    <li>
                        <a href="<?php echo base_url().'index.php/web'?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'index.php/web/about'?>">About</a>
                    </li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
    </div>
</body>
</html>