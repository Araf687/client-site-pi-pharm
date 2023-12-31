<section class="d-flex justify-content-between align-items-center py-1 bg-white">
    <a href="index.php" style="text-decoration:none">
    <div class="d-flex">
        <div style="padding-right:2px; color:#75aa22;">
            <h3 style="font-weight:700; font-size:40px">Pi</h3>
        </div>
        <div class="pe-1">
            <h3 style="font-weight:700; font-size:40px; color:#426e0a">Pharm</h3>
        </div>
        <div style="line-height: 0.85;
                margin-top: 14px;">
            <p class="my-0 py-0" style="color:#b9997c"><span style="font-weight:600">online</span></p>
            <p class="my-0 py-0" style="color:#b9997c"><span style="font-weight:600">store</span> </p>
        </div>

    </div>
    </a> 
    <div style="width:380px">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    </div>
    <div>
        <nav class="">
            <a href="about.php" class="link-underline-light text-decoration-none me-3">About</a>
            <a href="category.php" class="link-underline-light text-decoration-none me-3">Categories</a>
            <a href="all-shop.php" class="link-underline-light text-decoration-none me-3">Shops</a>
            <a href="" class="link-underline-light text-decoration-none me-3">Help</a>
            <a href="login.php" class="link-underline-light text-decoration-none"><i class="fa fa-sign-in"></i> login</a>
        </nav>
    </div>
    <script>
        const logout=()=>{
            localStorage.removeItem('loggedInData');
            <?php session_destroy (); ?>
        }
    </script>

</section>