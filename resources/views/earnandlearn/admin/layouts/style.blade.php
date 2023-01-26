<style>
.adminpanel{
    /* height:91.5% !important; */
    /* background: linear-gradient(178deg, #2ec9e9cf, #783db3); */
}
.card-body{
    /* background: linear-gradient(45deg, #e122b1, #35419f); */
}
.sidenav {
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 0; /* Stay at the top */
    left: 0;
    background-color: #111; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 60px; /* Place content 60px from the top */
    transition: .5s; /* 0.5 second transition effect to slide in the sidenav */
    box-shadow: #009ab9 5px 0px 23px;
}
#nn{
    text-decoration: none;
}
/* The navigation menu links */
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 18px;
    color: #818181;
    display: block;
     
}
.sidenav p {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s ;
}
.sidenav #wd{
    /*padding: 8px 8px 8px 32px;*/
    text-decoration: none;
    font-size: 18px;
    color: #818181;
    transition: 0.3s ;
}
/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
    color: #f1f1f1;
}
.sidenav p:hover {
    color: #f1f1f1;
}
.sidenav #wd:hover {
    color: #f1f1f1;
}
/* Position and style the close button (top right corner) */
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
    transition: margin-left 1.5s;
    padding: 20px;
}
/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media(max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
    .sidenav p {font-size: 21px;}			
}/*@media(max-width: 575px) 
{.vv{display: none}}*/
.topnav{
    position: fixed;
    top: 0;
}
.leftads{
    position: sticky;
    display: table;
    top: 60px;
}
.rightads{
    position: sticky;
    display: table;
    top: 60px;
}
.maincontent{
    margin-top:60px;
}

.center_contant{
    background-color:#eef0f563;
    border-radius: 8px;
    box-shadow: 2px 3px 14px #5545;
}




.thead th{
padding: 12px;
}
.tbody td{
padding: 12px;
} 
.fas{
cursor: pointer;
}
h1{
/* text-shadow: 2px 3px 8px black; */
letter-spacing: 1px;
    font-family: sans-serif;
    font-weight: 600;
}

h4 p{
    border-bottom: 1px solid #dc0808;
    display: inline;
}

.homecatalist{
    margin:60px 0px;
}
.acatalist{
    text-decoration:none !important;
}
.acatalist_manu{
    
}
.admin_index{
    margin-top:60px;
}
.homecatalist p{

   color: #0d6efd;
}
label{
    font-weight:bold;
}
</style>