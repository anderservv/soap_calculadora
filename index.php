
 <!DOCTYPE html>
<html>
<head>
    <title>Calculadora </title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
   
    <div class="container mt-5">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Calculadora</h5>
                <input type="text" class="form-control mb-2" id="num1" placeholder="Número 1">
                <input type="text" class="form-control mb-2" id="num2" placeholder="Número 2">
                <div class="btn-group" role="group" aria-label="Operaciones">
                    <button class="btn btn-primary" onclick="sumar()"><i class="fas fa-plus"></i></button>
                    <button class="btn btn-success" onclick="restar()"><i class="fas fa-minus"></i></button>
                    <button class="btn btn-danger" onclick="multiplicar()"><i class="fas fa-times"></i></button>
                    <button class="btn btn-secundary" onclick="potencia()"><i class="fa-solid fa-list-ol"></i></button>
                    <button class="btn btn-warning" onclick="dividir()"><i class="fas fa-percent"></i></button>
                </div>

                <div id="result" class="mt-3"></div>

            </div>
        </div>
    </div>
    
    <script>
        function calcular(operacion) {
            var num1 = $('#num1').val();
            var num2 = $('#num2').val();

            $.ajax({
                type: "POST",
                url: "calculadora_client.php", 
                data: {
                    num1: num1,
                    num2: num2,
                    operacion: operacion
                },
                success: function(result) {
                    $('#result').html("Resultado: " + result);
                }
            });
        }

        function sumar() {
            calcular("sumar");
        }
        
        function restar() {
            calcular("restar");
        }
        
        function multiplicar() {
            calcular("multiplicar");
        }
        
        function dividir() {
            calcular("dividir");
        }
        function potencia() {
            calcular("potencia");
        }
    </script>
</body>
</html>
