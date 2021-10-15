<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medium posts</title>
    <!-- Boostrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('/css/medium_posts_styles.css') }}">
</head>
<body>
    <div class="container">
        <!-- Mediums posts section -->
        <section>
            <h1 class="medium-posts-header text-center font-weight-bold">
                <span class="underline">&nbsp;&nbsp;Acercando la locura&nbsp;&nbsp;</span>
            </h1>
            <p class="text-center subtitle pb-3">Explora nuestra colección de articulos de divulgación, producciones literarias, producciones narrativas, proyectos e historias de vida de nuestra comunidad</p>   
            <div class="row" id="medium-posts-container">
                <div class="col-lg" >
                    <div data-medium-post-id="1"></div>
                    <hr class="mb-4 d-lg-none">
                </div>
                <div class="col-lg">
                    <div data-medium-post-id="2"></div>
                    <hr class="mb-4">
                    <div class="row">
                        <div class="col-sm" >
                            <div data-medium-post-id="3"></div>
                            <hr class="mb-4 d-sm-none">
                        </div>
                        <div class="col-sm" >
                            <div data-medium-post-id="4"></div>
                            <hr class="mb-4 d-sm-none">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a class="btn btn-custom-purple btn-lg mb-5" id="medium-posts-more-button" href="https://medium.com/@Casademediocamino/following" role="button">
                    Descubre más artículos
                </a>
            </div>
        </section>
    </div>
    
    <!-- Load medium posts -->
    <script src="{{ asset('/js/load_medium_posts.js') }}"></script>
    <script>
        loadMediumPosts();
    </script>

    <!-- Bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>