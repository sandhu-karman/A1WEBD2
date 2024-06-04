<?php

/*******w******** 
    
    Name: Karman Singh Sandhu
    Date: 20-05-2024
    Description:

****************/

$config = [
    'gallery_name' => 'Wildlife Gallery',
    'unsplash_categories' => ['nature', 'water', 'mountains', 'city', 'animals', 'forest'],
    'local_images' => [
        ['filename' => 'img1.jpg', 'photographer' => 'Chris Charles', 'url' => 'https://unsplash.com/@licole'],
        ['filename' => 'img2.jpg', 'photographer' => 'Teemu Paananen', 'url' => 'https://unsplash.com/@xteemu'],
        ['filename' => 'img3.jpg', 'photographer' => 'Shifaz Abdul Hakkim', 'url' => 'hhttps://unsplash.com/@shifaz_abdul'],
        ['filename' => 'img4.jpg', 'photographer' => 'Mike Van Den Bos', 'url' => 'https://unsplash.com/@mike_van_den_bos']
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title><?= $config['gallery_name']?></title>
</head>
<body>
    <h1><?php echo $config['gallery_name']; ?></h1>
    <?php 
$categories = $config['unsplash_categories']; 
$count = count($categories);
for ($i = 0; $i < $count; $i++): 
?>
    <div class="category">
        <h2><?php echo ucfirst($categories[$i]); ?></h2>
        <img src="https://source.unsplash.com/300x200/?<?php echo $categories[$i]; ?>" alt="<?php echo $categories[$i]; ?> image">
    </div>
<?php endfor; ?>
    <h1><?php echo count($config['local_images']); ?> Large Images</h1>
    <?php 
$images = $config['local_images']; 
$count = count($images);
for ($i = 0; $i < $count; $i++): 
?>
    <div class="local-img">
        <img src="images/<?php echo $images[$i]['filename']; ?>" alt="<?php echo $images[$i]['photographer']; ?>">
        <p>
            Photo by <a href="<?php echo $images[$i]['url']; ?>"><?php echo $images[$i]['photographer']; ?></a> on Unsplash
        </p>
    </div>
<?php endfor; ?>

</body>
</html>