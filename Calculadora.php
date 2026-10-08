<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Nómina</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container ">
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-primary text-white">
                    <h4 class="card-title mb-0">Datos del Trabajador</h4>
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        
                        <h6 class="text-muted mb-3">Información Personal</h6>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej. Juan Pérez" required>
                        </div>

                        <div class="mb-3">
                            <label for="cedula" class="form-label">Cédula / Documento</label>
                            <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Ej. 12345678" required>
                        </div>

                        <hr>
                        <h6 class="text-muted mb-3">Horas Trabajadas</h6>

                        <div class="mb-3">
                            <label for="horas_diurnas" class="form-label">Horas Diurnas</label>
                            <input type="number" step="any" min="0" class="form-control" id="horas_diurnas" name="horas_diurnas" value="0" required>
                        </div>

                        <div class="mb-3">
                            <label for="horas_vespertinas" class="form-label">Horas Vespertinas</label>
                            <input type="number" step="any" min="0" class="form-control" id="horas_vespertinas" name="horas_vespertinas" value="0" required>
                        </div>

                        <div class="mb-3">
                            <label for="horas_nocturnas" class="form-label">Horas Nocturnas</label>
                            <input type="number" step="any" min="0" class="form-control" id="horas_nocturnas" name="horas_nocturnas" value="0" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Calcular Nómina</button>
                    </form>
                </div>
            </div>
        </div>

<?php

   if (isset($_POST) && !empty($_POST)) {
        $nombre = $_POST['nombre'];
        $cedula = $_POST['cedula'];
        $diurnas = $_POST['horas_diurnas'];
        $vespertinas = $_POST['horas_vespertinas'];
        $nocturnas = $_POST['horas_nocturnas'];

        $sueldoBruto = ($diurnas * 675) + ($nocturnas * 956.23) + ( $vespertinas * 700);

        if($sueldoBruto < 85000){
            $ahorroHab1 = $sueldoBruto * 0.001;
            $ahorroHab = ($sueldoBruto * 0.1)/100;
            $seguroSocial = ($sueldoBruto * 0.15)/100;

            $sueldoNeto = $sueldoBruto - $ahorroHab - $seguroSocial;

        } else if($sueldoBruto >= 85000 && $sueldoBruto <= 150000){
            $ahorroHab = ($sueldoBruto * 0.15)/100;
            $seguroSocial = ($sueldoBruto * 0.2)/100;

            $sueldoNeto = $sueldoBruto - $ahorroHab - $seguroSocial;
        } else if($sueldoBruto > 150000){
            $ahorroHab = ($sueldoBruto * 0.3)/100;
            $seguroSocial = ($sueldoBruto * 0.25)/100;

            $sueldoNeto = $sueldoBruto - $ahorroHab - $seguroSocial;
        }

        $ahorroHab = round($ahorroHab, 2);
        $seguroSocial = round($seguroSocial, 2);
        $sueldoNeto = round($sueldoNeto, 2);
        $sueldoBruto = round($sueldoBruto, 2);

    }

?>


        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-success text-white">
                    <h4 class="card-title mb-0">Resumen de Pago</h4>
                </div>
             
                <div class="card-body">
                    
                    <!-- Datos del Trabajador -->
                    <div class="border-bottom pb-3 mb-3">
                        <h6 class="text-muted">Datos del Trabajador</h6>
                        <?php 
                           if (isset($_POST) && !empty($_POST)) {
                                echo "<p class='mb-1'><strong>Nombre: </strong>$nombre</p>";
                                echo "<p class='mb-0'><strong>Cédula: </strong>$cedula</p>";
                        }

                        ?>
                    </div>

                    <!-- Detalle Financiero -->
                    <ul class="list-group list-group-flush mb-3">
                        <?php
                            if (isset($_POST) && !empty($_POST)) {
                            echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                            Salario Bruto
                            <span class='fw-bold'>$sueldoBruto</span>
                            </li> ";
                            echo " <li class='list-group-item d-flex justify-content-between align-items-center text-danger'>
                            Descuento Ahorro Habitacional
                            <span>$ahorroHab</span>
                            </li>";
                            echo "  <li class='list-group-item d-flex justify-content-between align-items-center text-danger'>
                            Descuento Seguro Social
                            <span>$seguroSocial</span>
                            </li>";
                        }

                        ?>

                    </ul>

                    <!-- Sueldo Final -->
                    <div class="alert alert-success text-center mb-0" role="alert">

                        <h5 class="alert-heading mb-1">Sueldo a Recibir</h5>
                        <?php    
                        if (isset($_POST) && !empty($_POST)) {
                            echo "<span class='fs-3 fw-bold'>$sueldoNeto</span>";
                        } 
                        ?>
                        
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>