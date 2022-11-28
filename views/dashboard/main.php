<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once "head.php"; ?>
    
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    
    <!-- Wrapper -->
    <div class="wrapper">
    
        <!-- Preloader -->
        <?php require_once "preloader.php"; ?>
        
        <!-- Navbar -->
        <?php require_once "navbar.php"; ?>
        
        <!-- Main Sidebar Container -->
        <?php require_once "main-sidebar.php"; ?>
        
        <!-- Content Wrapper. Contains page content -->
        <?php require_once "content-wrapper.php"; ?>
        
        <!-- footer  -->
        <?php require_once "footer.php"; ?>
        
        <!-- Control Sidebar -->
        <?php require_once "control-sidebar.php"; ?>
    </div>

    <!-- Scripts --> 
    <script>
        ruta = '';
        page = 'dashboard' ;
    </script>
    <?php require_once "scripts-js.php"; ?>   

</body>
</html>