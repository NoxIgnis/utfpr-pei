<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styles.css">
    <title>Confirmação PEI</title>
</head>

<body id="read_n_check">
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="confirm-card text-center">
            <div class="text-center mb-3">
                <a href="#">
                    <img src="../img/UTFPR_logo.png" alt="Logo UTFPR" width="250" height="96">
                </a>
            </div>
            <h3 class="mb-4">Confirmação de Leitura do PEI</h3>
            <form action="feedback_leitura.php" method="POST">
                <input type="hidden" name="professor_id" value="1">
                <input type="hidden" name="documento_id" value="123">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="confirmacao" id="confirmacao" required>
                    <label class="form-check-label" for="confirmacao">Confirmo que li e estou de acordo com as informações apresentadas no PEI que recebi</label>
                </div>
                <button type="submit" class="btn btn-success btn-confirm">
                    Enviar
                </button>
            </form>
        </div>
    </div>
</body>

</html>