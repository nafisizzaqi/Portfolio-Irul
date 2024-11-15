<?php 
    include 'koneksi.php';
    $query = "SELECT * FROM users";
    $query_sql = mysqli_query($koneksi, $query);
    $tampil = mysqli_fetch_assoc($query_sql);
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irul</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-700 overflow-x-hidden">
    
    <!-- nav -->
     <section>
        <nav class="bg-[#2d3f4e] dark:bg-gray-900 fixed w-full z-20 top-0 start-0 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-10 p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="image/<?= $tampil['logo']?>" class="h-14 rounded-full" alt="Flowbite Logo">
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse"> 
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
              </button>
            </div>
            <div class="ml-96 items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
              <ul class="gap-8 flex flex-col p-4 md:p-0 mt-4 font-medium md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                  <a href="#home" class="text-xl block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                </li>
                <li>
                  <a href="#about" class="text-xl block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                </li>
                <li>
                  <a href="#skill" class="text-xl block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Skill</a>
                </li>
                <li>
                  <a href="#project" class="text-xl block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Project</a>
                </li>
                <li>
                    <a href="#contact" class="text-xl block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                  </li>
              </ul>
            </div>
            </div>
          </nav>
     </section>

     <!-- hero -->
      <section id="home" class="pt-64 pb-20" style="background-image: url(image/bg-gel.jpg); background-size: contain; background-size: cover; ;">
        <div class="container relative bottom-14">
            <div class="flex flex-wrap">
                <img src="image/<?= $tampil['profile']?>" class="w-72 mx-[34rem] rounded-full" alt="">
            </div>

            <div class="grid mt-6 text-white font-bold ">
                <h1 class="text-center ml-[7rem] text-4xl">Hello!</h1>
                <p class="text-center ml-[7rem] text-3xl">I'm <?= $tampil['name']?><span class="block text-center"><?= $tampil['job']?></span></p>
            </div>
        </div>
      </section>

      <!-- About -->
      <?php 
    include 'koneksi.php';
    $about_query = "SELECT * FROM about_me";
    $query_sql = mysqli_query($koneksi, $about_query);
    $tampil = mysqli_fetch_assoc($query_sql);
?>
       <section id="about" class="pt-10 pb-20" style="background-image: url(image/bg-gel.jpg); background-size: contain; background-size: cover;">
        <div class="container mx-auto text-center">
            <div class="flex flex-wrap">
                <div class="w-full">
                    <div class="w-full text-center mx-44 relative top-40">
                        <h1 class="text-4xl font-bold text-white mb-5"><?= $tampil['title']?></h1>
                        <p class="text-white text-lg font-semibold text-start w-96 mx-auto scale-horizontal"><?= $tampil['bio']?></p>
                        
                    </div>
                    <div class="relative bottom-32">
                        <img src="image/<?= $tampil['picture']?>" class="w-72 mx-36 rounded-xl" alt="">
                    </div>
                </div>
            </div>
        </div>
       </section>

       <!-- Skill -->
       <?php 
    include 'koneksi.php';
    $skills_query = "SELECT * FROM skills";
    $query_sql = mysqli_query($koneksi, $skills_query);
    $ambildata = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
?>
        <section id="skill" class="pt-28 pb-40">
            <div class="container mx-auto text-center">
                <div class="flex flex-wrap items-center">
                    <div class="w-full">
                        <h1 class="text-5xl text-white font-bold"><?= $ambildata[0]['title']?></h1>
                    </div>

                    <div class="flex mt-28 mx-auto gap-36">
                        <?php 
                        foreach($ambildata as $tampil) {
                        ?>
                        <div class="text-center">
                            <img src="image/<?= $tampil['picture']?>" class="w-48" alt="">
                            <p class="text-xl font-semibold text-white mt-6"><?= $tampil['description']?></p>
                        </div>
                        <?php 
                        }
                        ?>
                    </div>
                </div>
            </div> 
        </section>

        <!-- project -->
        <?php 
    include 'koneksi.php';
    $project_query = "SELECT * FROM project";
    $query_sql = mysqli_query($koneksi, $project_query);
    $ambildata = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
?>
        <section id="project" class="pt-28 pb-40">
            <div class="container mx-auto text-center">
                <div class="flex flex-wrap items-center">
                    <div class="w-full">
                        <h1 class="text-5xl text-white font-bold"><?= $ambildata[0]['title']?></h1>
                    </div>

                    <div class="flex mt-28 mx-auto gap-36">
                        <?php 
                        foreach($ambildata as $tampil) {
                        ?>
                        <div class="text-center">
                            <img src="image/<?= $tampil['picture']?>" class="w-60 rounded-3xl" alt="">
                            <p class="text-xl font-semibold text-white mt-6"><?= $tampil['description']?></p>
                        </div>
                        <?php 
                        }
                        ?>
                    </div>
                </div>
            </div> 
        </section>

        <!-- Contact -->
         <section id="contact" class="pt-28 pb-28">
            <div class="container mx-auto text-center">
                <div class="flex flex-wrap items-center">
                    <div class="w-full">
                        <h1 class="text-7xl text-white font-bold">Contact Me</h1>
                    </div>

                    <div class="w-full mt-20 ">
                        <form action="proses.php" method="post" class="ml-96">
                            <div class="w-[30rem]">
                                <input type="text" name="name" id="name" placeholder="Name" class="w-full rounded-lg p-2 bg-gray-500 text-white focus:outline-none focus:ring-gray-900 focus:ring-1 focus:border-gray-900">
                            </div>
                            <div class="w-[30rem] mt-5">
                                <input type="email" name="email" id="email" placeholder="Email" class="w-full rounded-lg p-2 bg-gray-500 text-white focus:outline-none focus:ring-gray-900 focus:ring-1 focus:border-gray-900">
                            </div>
                            <div class="w-[30rem] mt-5">
                                <textarea name="message" id="message" placeholder="Message" class="w-full rounded-lg p-7 bg-gray-500 text-white focus:outline-none focus:ring-gray-900 focus:ring-1 focus:border-gray-900"></textarea>
                            </div>
                            <div class="w-28 mt-4">
                            <button name="submit" type="submit" class="text-sm font-semibold text-slate-900 bg-[#0CC0DF] py-2 px-6 rounded-full w-full hover:opacity-90 hover:bg-blue-600 hover:shadow-lg transition duration-500">Send</button>
                          </div>

                        </form>
                    </div>
                </div>
            </div>
         </section>

         <!-- footer -->
          <footer class="text-center pt-10 pb-10 bg-[#2d3f4e]">
            <p class="text-md text-white font-semibold">© 2024 M Choirul Anam Semua Hak Cipta Dilindungi.</p>
          </footer>

</body>
</html>