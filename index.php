<?php include 'includes/dados.php';?>
<!DOCTYPE html>
<html>
    <head>
        <title>Inicial - <?php echo $nomepag;?> </title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <body>
        <div class="container">
            <?php include 'includes/header.php';?>
            <main>
                <div class="inicio">
                    <h1>Bem vindo a <?php echo $nomepag;?> </h1>
                    <p class="pag">Somos uma empresa especializada em transporte seguro e confortável para cães, oferecendo serviços personalizados para atender às necessidades do seu pet. 
                    Seja para consultas veterinárias, viagens ou eventos, garantimos que seu amigo de quatro patas seja transportado com todo o cuidado e carinho. Nossos veículos são equipados para oferecer conforto e segurança, e nossa equipe é treinada para proporcionar uma experiência tranquila para os animais e seus tutores. Conosco, seu cachorro está em boas mãos, sempre!</p>
                </div>
            </main>
            <?php include 'includes/footer.php';?>
        </div>
    </body>
</html>