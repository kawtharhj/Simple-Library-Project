<?php

require ('connection.php');

$conn = connect();

$sql = "select * from [LibraryFinal].[dbo].[BOOK]";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$stmt = sqlsrv_query( $conn, $sql , $params, $options );
$count = sqlsrv_num_rows( $stmt );


$mem = "select *from [LibraryFinal].[dbo].[Members]";

$stmt2 =sqlsrv_query( $conn, $mem , $params, $options );
$cmem = sqlsrv_num_rows( $stmt2 );

$br = "select *from [LibraryFinal].[dbo].[Borrow]";

$stmt3 =sqlsrv_query( $conn, $br , $params, $options );
$br2 = sqlsrv_num_rows( $stmt3 );
?>



<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
	
    <!-- Boxicons CDN Link -->
	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
  
      <span class="logo_name"> Admin Panel</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="AddBook.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Add Books</span>
          </a>
        </li>
        <li>
          <a href="ManageBooks.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Manage Books</span>
          </a>
        </li>
       
        <li>
          <a href="ManageMembers.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Manage Members</span>
          </a>
        </li>
		  <li>
          <a href="ManageBorrows.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Manage Borrowing</span>
          </a>
        </li>
		 <li>
          <a href="Author.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Authors</span>
          </a>
        </li>
		 <li>
          <a href="Category.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Categories</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Members</div>
            <div class="number"><?php echo "{$cmem}" ?></div>
          </div>
          <i class="fa-light fa-users"></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Books</div>
            <div class="number"><?php echo "{$count}" ?></div>
           
          </div>
          <i class="fa-light fa-books"></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Borrows</div>
            <div class="number"><?php echo "{$br2}" ?></div>
          </div>
          <i class="fa-light fa-book-arrow-right"></i>
        </div>
        
      </div>

  </section>


	</div>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

