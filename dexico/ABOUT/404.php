<?php 
  /* Template Name: 404 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS file -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

    <!-- Preview Header  -->
    <div class="PreviewHeader" style="position: sticky;top: 0; z-index: 5;">
        <div class="logo">
            <a href="#"><i class='bx bxs-hot'></i><span>envato</span>market</a>
        </div>
        <div class="BuyAction">
            <button type="button" class="btn btn-success">Buy Now</button>
        </div>
    </div>

    <!-- Page-404 -->
    <div class="Page-404">
        <section>
            <div class="Pic-404"></div>
            <div class="Content-404">
                <div class="Header-404">Oops!</div>
                <div class="SubHeader-404">Something went wrong</div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">− Search</button>
                </form>
                <div class="GoToHome">
                    <div class="SubHeaderHome">or go to home</div>
                    <div class="d-flex justify-content-center mt-1">
                        <div class="ViewButton">
                            <button class="btn btn-primary" type="button">− Go To Home</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Social Media Footer -->
    <div class="SocialMediaFooter">
        <div class="SocialMedia d-flex justify-content-center" style="width: 230px;height: 40px;font-size: 35px;">
            <a href=""><i class='bx bxl-twitter' style="color: #3C6E71;margin-right: 5px;"></i></a>
            <a href=""><i class='bx bxl-facebook' style="color: #3C6E71;margin-right: 5px;"></i></a>
            <a href=""><i class='bx bxl-instagram' style="color: #3C6E71;"></i></a>  
        </div>
    </div>

    <!-- Bootstrap JavaScript files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script>
        $('.btn').click(function (e) { 
            location.href='../index.html'
            e.preventDefault();
        });
    </script>
</body>
</html>        