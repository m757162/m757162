
<div class="container-fluid">
    <div class="row justify-content-center">
        <nav class="navbar bg-info ">
            <div class="navbar-brand" onclick="openNav()"><i class="fa fa-bars" style="font-size:30px;cursor: pointer;" aria-hidden="true"></i></div>
            <ul class="navbar-nav ">
                <li class="nav-item ">
                    <a href="/ecom" class="nav-link ">Admin panel</a>
                </li>
            </ul>
        </nav> 
        
       
    </div>
    <div id="mySidenav" class="sidenav text-uppercase bg-info">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>				
        <a href="{{ url('/adminecom')}}">home</a>
        
        <a href="{{ url('/admincata')}}">cataghory</a>
        <a href="{{ url('/adminpd')}}">add_product</a>
        <!-- <p class="m-0 text-uppercase " data-toggle="collapse" data-target="#wd">My Work</p>
        <p id="wd" class="collapse m-0"><a href="panding_work.php" style="font-size:17px;" class="pl-3 pb-0">panding work</a></p>
       <p id="wd" class="collapse m-0"><a href="success_work.php" style="font-size: 17px;" class="pl-3 pb-0">accept work</a></p>
        <a href="receve_work.php">receve work</a>
        <a href="myjob.php">My job</a>-->  
    </div>
</div>



