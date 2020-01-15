<!DOCTYPE html>
<html lang="en">
<head>
    @include('heads.heads')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">\
    <link rel="stylesheet" href="/css/custom.css">
    <title>Profile Home</title>
    <style>
      .footer{
        margin-top: 20%;
      }
    </style>
</head>
<body>
    <div class="columns panelboard">
      <div class="column is-one-fifth sidebar">
          <figure class="image is-128x128 profileimage">
            <img class="is-rounded " src="/images/1.jpg">
          </figure>
            <aside class="menu " >
                <p class="menu-label">
                  General
                </p>
                <ul class="menu-list">
                  <li><a href="/myprofile">My Profile</a></li>
                  <li><a href="/myrequest">My Advertisement</a></li>                  
                  <li><a>My Inbox</a></li>
                  
                </ul>
                <p class="menu-label">
                  Administration
                </p>
                <ul class="menu-list">
                  <li><a href="/editprofile">Edit Account</a></li>
                  <li><a href="/changepassword">Change Password</a></li>
                  <li><a>Delete Account</a></li>                     
                </ul>
                <p class="menu-label">
                  Other
                </p>
                <ul class="menu-list">
                  <li><a>LogOut</a></li>
                </ul>
          </aside>
                          

       </div>
       @if(Request::is('myrequest'))
          @include('layout.studentprofile.treadrequset')
       {{-- @elseif(Request::is('editprofile'))
          @include('layout.studentprofile.editrequest') --}}
       @elseif(Request::is('profile/ad/*/editrequest'))
          @include('layout.studentprofile.editrequest')
       @else
       
      @endif    

    </div>
              


    </div>
    @include('heads.footer')


    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/fontawesome.js"></script>
    <script src="/js/bootstrap.js"></script>
</body>
</html>