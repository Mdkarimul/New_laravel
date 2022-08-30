@extends("layouts.app")
@section("title")
Admin Panel
@endsection


@section("custom-css")
<link rel="stylesheet" href="css/admin.css?<?php echo time() ?>">
@endsection

@section("google-font-icon")
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Quicksand&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection


@section("content")
<div class="admin">
    <div class="menu-item">
        <div class="logo">
            <h4>Karimul</h4>
        </div>
        <ul>
            <li><a class="home"  href="/home"><span class="material-icons md-24">face</span> &nbsp; Home</a></li>
            <li><a class="home"><span class="material-icons md-24">check_circle</span> &nbsp; Images</a></li>
            <li><a class="home"><span class="material-icons md-24">favorite</span> &nbsp; Picture</a></li>
            <li><a class="home"><span class="material-icons md-24">apps</span> &nbsp; Gallery</a></li>

            <li><a class="home"><span class="material-icons md-24">face</span> &nbsp; Home</a></li>
            <li><a class="home"><span class="material-icons md-24">check_circle</span> &nbsp; Images</a></li>
            <li><a class="home"><span class="material-icons md-24">favorite</span> &nbsp; Picture</a></li>
            <li><a class="home"><span class="material-icons md-24">apps</span> &nbsp; Gallery</a></li>

            <li><a class="home"><span class="material-icons md-24">face</span> &nbsp; Home</a></li>
            <li><a class="home"><span class="material-icons md-24">check_circle</span> &nbsp; Images</a></li>
            <li><a class="home"><span class="material-icons md-24">favorite</span> &nbsp; Picture</a></li>
            <li><a class="home"><span class="material-icons md-24">apps</span> &nbsp; Gallery</a></li>

            <li><a class="home"><span class="material-icons md-24">face</span> &nbsp; Home</a></li>
            <li><a class="home"><span class="material-icons md-24">check_circle</span> &nbsp; Images</a></li>
            <li><a class="home"><span class="material-icons md-24">favorite</span> &nbsp; Picture</a></li>
            <li><a class="home"><span class="material-icons md-24">apps</span> &nbsp; Gallery</a></li>
            
        </ul>
    </div>
  
   <div class="container">
    <div class="admin-head">
        <div class="search-cont">
            <input type="search" placeholder="&#xf0e0; search" class="search-input">
        </div>
        <div class="image-cont">
            <div class="mail-notification">
            <span class="material-icons " style="color:white;padding:0px;margin:0px;font-size:20px;">email</span>
            </div>
            <div class="sms-notification">
            <span class="material-icons " style="color:white;padding:0px;margin:0px;font-size:20px;">notifications</span>
            </div>
            <div class="profile-image-cont"><img class="profile-image" src="images/profile.jpg" ></div>
        </div>
    </div>
    
    <section>
    @yield("main-content")
</section>
   </div>

</div>
@endsection
