<?php 
session_start();

	include("Connection.php");
	include("Function.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</head>
<link rel="stylesheet" href="tailwind.min.css">
<style>
    .dropdown {
  display: inline-block;
  position: relative;
  width: 100px;
  height: 30px;
  text-align: center;
}
.dropdown-content {
  display: none;
  position: absolute;
  width: 100%;
  overflow: auto;
  box-shadow: 0px 10px 10px 0px rgba(0,0,0,0.4);
}
.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown-content a {
  display: block;
  color: #000000;
  padding: 5px;
  text-decoration: none;
}
.dropdown-content a:hover {
  color: #FFFFFF;
  background-color: #00A4BD;
}
</style>
<body>
  <header class=" absolute top-0 left-0 right-0 text-black body-font bg-teal-300">
    <div class="container mx-auto flex flex-wrap p-3 flex-col md:flex-row items-center">
      <a href="home.html" class="flex title-font font-medium items-center text-black mb-4 md:mb-0">
        <img src="pictures/logo.png" style="width: 70px;">
        <span class="ml-3 text-xl">GYAAN</span>
      </a>
      <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-black justify-center">
        <a href="" class="mx-10 hover:text-black">Home</a>
        <a href="About.html" class="mr-10 hover:text-black">About Us</a>
        <a href="Book.php" classs="mx-10 hover:text-black">Book Slot</a>
        <a href="Contact.php" class="mx-10 hover:text-black">Contact</a>
        <a href="booking.php" class="mx-3 hover:text-black">Booked Slots</a>

      </nav>
      <?php echo $user_data['First_Name']; ?>&nbsp;&nbsp;
      <div class="dropdown">
                <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-black mt-4 md:mt-0 dropdown">Account <i class="fas fa-solid fa-caret-down"></i></button>
                <div class="dropdown-content bg-gray-100">
                <a href="profile.php">Profile</a>
                <a href="myuniversity.php">My University</a>
                <a href="logout.php">Log Out</a>
                </div>
        </div>
    </div>
  </header>
  <section class="text-black bg-blue-100 body-font">
  <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20" style="margin-top:20px;">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-black">An investment in knowledge pays the best interest</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">There’s no doubt that the cost of education is on the rise. The financial concerns of earning your education should never stop you from doing so because, as Benjamin Franklin once said, this investment in yourself will pay you back with interest over your entire lifetime. Additionally, you can earn your education in a cost-effective way. Check out the University of the People’s degree programs that are all tuition-free.</p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
              src="pictures/pic-1.jpg">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">KL University</h1>
              <p class="leading-relaxed">K L Deemed to be University, formerly Koneru Lakshmaiah College of Engineering (KLCE) and Koneru Lakshmaiah University, is a higher educational institution Deemed to be University,..</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
            src="pictures/pic-2.png"> 
              <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">VJIT</h1>
              <p class="leading-relaxed">Vidya Jyothi Institute of Technology is a college in Hyderabad, India, established in 1998 by A.P. Jithender Reddy and V. Purushottam Reddy. It is located on the way to Chilkur Balaji Temple from .. </p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
            src="pictures/pic-3.png">     
             <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Swaminarayan Gurukul</h1>
              <p class="leading-relaxed">Shree Swaminarayan Gurukul Rajkot Sansthan, commonly known as Rajkot Gurukul or Swaminarayan Gurukul, is a Hindu religious and educational organization headquartered in  ..</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
            src="pictures/pic-4.png">     
              <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Geethanjali</h1>
              <p class="leading-relaxed">Geethanjali College of Engineering and Technology (GCET) is a private technical institution located in Hyderabad, Telangana. The college was..</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
            src="pictures/pic-5.png">                 
              <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">ZPHS</h1>
              <p class="leading-relaxed">ZPHS Dharmaram (fully Zilla Parishad High School, Dharmaram) is one of the oldest schools in Medak district.This school is in D. Dharmaram ...</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
              src="https://images.unsplash.com/photo-1592595896616-c37162298647?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Alper Kamu</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing
                tousled waistcoat.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="text-black body-font bg-teal-300">
  <div class="container px-3 py-5 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
      <img src="pictures/logo.png" style="width: 70px;">
        <span class="ml-3 text-xl">GYAAN</span>
      </a>
      <p class="text-sm text-black sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-blue-500 sm:py-2 sm:mt-0 mt-4">© 2022
        GYAAN —
        <a href="#" class="text-black ml-1" rel="noopener noreferrer" target="_blank">@GYAAN</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-black">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
            viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-black">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-black">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"
            class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none"
              d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </footer>
</body>

</html>