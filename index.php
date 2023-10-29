         <?php 
            session_start();
            if (isset ($_GET['x']) && $_GET['x']=='Home') {
                $page = "Home.php";
                include "main.php";
            } elseif (isset ($_GET['x']) && $_GET['x']=='Order'){
                $page = "Order.php";
            include "main.php";
            }elseif (isset ($_GET['x']) && $_GET['x']=='Customer'){
                $page = "Customer.php";
                include "main.php";
            }elseif (isset ($_GET['x']) && $_GET['x']=='User'){
                if($_SESSION['level_decafe']==1){
                    $page = "User.php";
                include "main.php";
                }else{
                    $page = "Home.php";
                    include "main.php"; 
                }
            }elseif (isset ($_GET['x']) && $_GET['x']=='Report'){       
                if($_SESSION['level_decafe']==1){
                    $page = "Report.php";
                include "main.php";
                }else{
                    $page = "Home.php";
                    include "main.php"; 
                }
                
            }elseif (isset ($_GET['x']) && $_GET['x']=='Menu'){
                $page = "Menu.php";
                include "main.php";
            } elseif (isset ($_GET['x']) && $_GET['x']=='Login'){
                include "Login.php";
            }elseif (isset ($_GET['x']) && $_GET['x']=='logout'){
                    include "proses/proses_logout.php";
            } else{
                $page = "Home.php";
                include "main.php";
            }
             ?>
          