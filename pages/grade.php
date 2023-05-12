<?php
include 'navG.php';?>
<head>
<link rel="stylesheet" href="../Style/contact.css">
<style>
footer{
   
   margin-top: 2%;
   bottom: 0;
   left: 0;
   right: 0;
   background: #111;
   height: auto;
   width: 100vw;
   position: absolute;
   padding-top: 40px;
   color: #fff;
}
.footer-content{
   display: flex;
   align-items: center;
   justify-content: center;
   flex-direction: column;
   text-align: center;
}
.footer-content h3{
   font-size: 2.1rem;
   font-weight: 500;
   text-transform: capitalize;
   line-height: 3rem;
}
.footer-content p{
   max-width: 500px;
   margin: 10px auto;
   line-height: 28px;
   font-size: 14px;
   color: #cacdd2;
}
.socials{
   list-style: none;
   display: flex;
   align-items: center;
   justify-content: center;
   margin: 1rem 0 3rem 0;
}
.socials li{
   margin: 0 10px;
}
.socials a{
   text-decoration: none;
   color: #fff;
   border: 1.1px solid white;
   padding: 5px;

   border-radius: 50%;

}
.socials a i{
   font-size: 1.1rem;
   width: 20px;


   transition: color .4s ease;

}
.socials a:hover i{
   color: aqua;
}

.footer-bottom{
   background: #000;
   width: 100vw;
   padding: 20px;
padding-bottom: 40px;
   text-align: center;
}
.footer-bottom p{
float: left;
   font-size: 14px;
   word-spacing: 2px;
   text-transform: capitalize;
}
.footer-bottom p a{
 color:#44bae8;
 font-size: 16px;
 text-decoration: none;
}
.footer-bottom span{
   text-transform: uppercase;
   opacity: .4;
   font-weight: 200;
}
.footer-menu{
 float: right;

}
.footer-menu ul{
 display: flex;
}
.footer-menu ul li{
padding-right: 10px;
display: block;
}
.footer-menu ul li a{
 color: #cfd2d6;
 text-decoration: none;
}
.footer-menu ul li a:hover{
 color: #27bcda;
}

@media (max-width:500px) {
.footer-menu ul{
 display: flex;
 margin-top: 10px;
 margin-bottom: 20px;
}
}
   </style>
</head>
<center>
    <div id="contact_section">
        <h3>ما هو صفك الدراسي</h3>
    <a href="grade1.php"><button>الصف الاول</button></a>
    <br>
    <a href="grade2.php"><button>الصف الثاني</button></a>
    <br>
    <a href="grade3.php"><button>الصف الثالت</button></a>
    </div>
    </center>
    <footer>
        <div class="footer-content">
            <h3>I SCHOOL</h3>
            <p>صفحه للمدرسه الاعداديه يمكن للطالب استخدامها للحصول علي اخر اخبار الدراسه</p>
        </div>
        <div class="footer-bottom">
        </div>
        </div>
    </footer>