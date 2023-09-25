<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Chat App</header>
            <form action="#">
                <div class="error-txt">Ceci est un message d'erreur</div>
                <div class="field input">
                    <label>Email</label>
                    <input type="text" placeholder="Entrez votre email">
                </div>
                <div class="field input">
                    <label>Mot de passe</label>
                    <input type="password" placeholder="Entrez votre mot de passe">
                    <i class="fa fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="S'inscrire">
                </div>
                <div class="link">Pas inscrit? <a href="#">S'inscrire</a></div>
            </form>
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>

</body>
</html>