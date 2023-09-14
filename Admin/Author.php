<?php
require('connection.php');
			$conn = connect();
			?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
	 <link rel="stylesheet" href="table.css">
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
  <div class="search-box">
  <form method ="post" action="AddAuthor.php" >
        <input type="text" placeholder="Search..." name="search">
        <i class='bx bx-search' ></i>
		
		<a href ="AddAuthor.php">
		<input type="submit" name="Add Author" value="Add Author">
		</a>
		</form>
		<form method ="post" action="deleteA.php">
		<input type ="text" placeholder=" Author Name" name="Aname">
		<input type ="submit" name="delete" value ="Delete Author">
		</form>
      </div>
   

   <table class="styled-table">
    <thead>
        <tr>
           
            <th>Author ID</th>
			<th>Author Name</th>
			<th>Nationality</th>
		
		
        </tr>
    </thead>
    <tbody>
        <?php 
			
			$query="SELECT * FROM Author";
           $result= sqlsrv_query($conn, $query);
			if( $result === false ) {
				die( print_r( sqlsrv_errors(), true));
				}
				
			if (sqlsrv_has_rows($result)){
				
				while ($row = sqlsrv_fetch_array($result,SQLSRV_FETCH_ASSOC)){
          echo "<tr><td>".$row["AUTHORID"]."</td><td>".$row["AUTHORNAME"]."</td><td>".$row["NATIONALITY"]."</td></tr>";
                }
			}
			
			
	
?>
    </tbody>
</table>

</section>
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

