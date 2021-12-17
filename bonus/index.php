<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFirstPphExercise</title>
    <style>
        *{
            background-color: lightgray;
            text-align: center;
        }
        p{
            font-size: 1.5em;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php 
    $myParagraph = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit nulla mi, sit amet venenatis est rutrum quis. Quisque vitae convallis massa. Ut cursus luctus est nec efficitur. Suspendisse eu bibendum mi. Pellentesque sapien arcu, elementum eget molestie quis, commodo in orci. Ut eros urna, ornare id iaculis ac, dictum consectetur odio. Pellentesque ac lacus lectus. Donec nec enim semper turpis ornare ultricies sed ut lorem. Suspendisse ultricies eros purus. Aenean eleifend commodo blandit. Nulla ut ex eleifend tellus congue lacinia vel eget risus. Aenean et orci vitae nulla posuere consectetur vitae at magna. Proin fermentum nunc id metus vulputate mollis.

    Praesent vulputate sollicitudin nibh, non vulputate felis sagittis eget. Sed cursus arcu eu elit ullamcorper, vitae facilisis ligula tincidunt. Pellentesque eget turpis ornare felis scelerisque consequat. Sed ut velit auctor, faucibus mauris vitae, lacinia quam. Praesent diam diam, volutpat sed dolor sit amet, varius scelerisque risus. Sed a accumsan tortor, ut efficitur orci. Nam vitae consectetur velit, vitae pharetra mi. Vivamus sagittis eu ipsum vel dapibus. In commodo, justo id varius sagittis, elit lacus tincidunt leo, at aliquet leo sem in dolor. Pellentesque nec porta dolor, condimentum auctor ligula. Sed non massa ornare, vestibulum leo id, condimentum massa. Maecenas congue ultrices nunc a ultricies.
    
    Donec non suscipit enim. Praesent consequat quam id lacus faucibus pulvinar. Aliquam eget tortor eu nisl semper consectetur id eu urna. Praesent finibus lacus metus, ac cursus lacus aliquet vitae. Phasellus imperdiet magna vel sem condimentum tempus. Ut vitae tellus et mauris euismod bibendum a eget nunc. Ut vehicula feugiat nibh, sit amet fermentum sem vulputate nec. Fusce vestibulum laoreet lacus. Proin ullamcorper aliquam condimentum. Sed mattis sapien eget tristique congue.
    
    Cras vel facilisis justo. Integer quis elit feugiat, consectetur purus eu, fringilla mi. Cras risus mi, maximus in libero ut, sodales ultrices nisi. Donec orci tortor, dapibus nec nisi quis, ullamcorper placerat est. Mauris accumsan ullamcorper ex at interdum. Quisque eu justo sed nisi finibus consectetur ut viverra leo. Phasellus porta dictum justo, quis finibus nulla tempus vitae. Vivamus interdum in ligula nec scelerisque. Morbi tempus est quis tellus convallis, in pharetra sapien pharetra. Quisque non porta lacus. Mauris sed metus porta, eleifend risus sit amet, tristique purus.
    
    Donec at odio porta, euismod risus vel, lacinia sapien. Morbi dictum quam lacus, nec faucibus justo sagittis ac. Mauris at iaculis ante, eu faucibus diam. Donec pretium sapien et sapien mattis, nec egestas tortor cursus. Sed sollicitudin quis nulla sit amet posuere. Proin ac dolor auctor, aliquet odio et, venenatis felis. Nulla velit magna, ullamcorper sed convallis ut, semper id ante. Praesent nec orci sed mauris varius tempor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut vehicula nisl eget odio vestibulum gravida.';

    $count = 0;
    $wordToCensar = str_replace('vitae', '***', $myParagraph, $count);
?>

<!-- stampa del primo paragrafo e della relativa lunghezza -->
<h2>Il mio primo paragrafo:</h2>
<p>
    <?php echo $myParagraph; ?>
</p>

<h2>Il precedente paragrafo continene: <?php echo strlen($myParagraph); ?> parole.</h2>

<!-- paragrfo censurato -->

<h2>Il paragrafo censurato è:</h2>
<p>
    <?php echo $wordToCensar; ?>
</p>

<h2>Il numero di parole censurate è: <?php echo $count; ?> </h2>

