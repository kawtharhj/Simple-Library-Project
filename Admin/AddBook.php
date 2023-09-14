<?php
require_once('connection.php');
session_start();

?>

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="add.css">
    <!-- Boxicons CDN Link -->
	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body><div class="sidebar">
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
          <a href="ManageMembers.html">
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
    



       <form action="add.php" method="POST" class="signupForm" name="signupform">
   
    <ul class="noBullet">
      
      <li>
        <input type="number" class="inputFields" id="password" name="AuthorID" placeholder="AuthorID" value="" oninput="return passwordValidation(this.value)" required/>
      </li>
      <li>
        
        <input type="text" class="inputFields"  name="category" placeholder="CategoryID" value="" required/>
      </li>
	  <li>
        
        <input type="text" class="inputFields"  name="BookName" placeholder="BookName" value="" required/>
      </li>

	  <li>
        <input type="text" class="inputFields"  name="Amount" placeholder="Amount" value="" required/>
      </li>
	    <li>
        <input type="text" class="inputFields" name="ISBN" placeholder="ISBN" value="" required/>
      </li>
	    <li>
        <input type="text" class="inputFields"  name="Language" placeholder="Language" value="" required/>
      </li>
	    <li>
        <input type="text" class="inputFields"  name="Publisher" placeholder="Publisher" value="" required/>
      </li>
      <li id="center-btn">
        <input type="submit" id="join-btn" name="add" alt="add" value="Add">
      </li>
    </ul>
  </form>


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

