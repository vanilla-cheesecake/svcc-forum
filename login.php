<?php include 'includes/handler.php'; 
include "includes/header.php"; // WEBPAGE HEADER
?>


<div class=""></div>
<div class="flex w-screen">
    <div class="pl-10  m-0">
        <h1 class="text-5xl">WELCOME TO <span class="font-extrabold ">SVCC FORUM</span></h1>
    
            <div class="pl-44 max-w-lg max-h-lg rounded fixed">
                <!-- <img src="assets/wizard.jpeg"> -->
            </div>
            <div class="flex fixed py-16 ">
                <div id="myData" class="text-3xl font-light w-3/5 italic"></div>
            </div>
            
            <div class="flex fixed py-44">
            <div id="myData2" class="m-0 text-2xl "></div>
            </div>
            <script src="util.js"></script>
    </div>
        <!-- REGISTER CARD -->

        <div class="pl-44">
            <h1 class="text-4xl">Sign up</h1>
            <br>
                <div class="shadow-2xl bg-white p-10 rounded-lg fixed">
                    <form method="POST">
                    <?php include 'includes/reg_errors.php'; ?>
                        <input class="border-b-2 outline-none border-navleft px-3 py-2  text-lg font-normal " type="text" name="firstname" value="<?php // echo $firstname; ?>" placeholder="Firstname"><br>
                        <input class="border-b-2 outline-none border-navleft px-3 py-2  text-lg font-normal" type="text" name="lastname" placeholder="Lastname"><br>
                        <input class="border-b-2 outline-none border-navleft px-3 py-2  text-lg font-normal" type="text" name="username" placeholder="Username"><br>
                        <input class="border-b-2 outline-none border-navleft px-3 py-2  text-lg font-normal" type="text" name="email" placeholder="Email"><br>   
                        <input class="border-b-2 outline-none border-navleft px-3 py-2  text-lg font-normal" type="password" name="password" placeholder="Password"><br><br>
                        <button type="submit" name="register" value="Create an account" class="text-white px-3 py-2 rounded bg-navleft text-sm font-medium ">Create account</button>
                    </form>
                </div>
        </div>
        <div>

</div>

</div>





    







<?php 
//echo file_get_contents("includes/footer.php"); // WEBPAGE FOOTER
?>
