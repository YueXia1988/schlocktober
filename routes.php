<?php

namespace App\Controllers;
  

  //If there is "page " in the  address bar then $page =that page,
//otherwise $page o= home
  $page =  isset($_GET['page']) ?   $_GET['page'] : "home";

  switch ($page) {
    
    case 'home':

      $controller = new HomeController();
      $controller->show();
      break;
    
    case 'about':
      
      $controller = new AboutController();
      $controller->show();
      break;

    case 'movies':

      $controller = new MoviesController();
      $controller->showAll();
      break;

    case 'featuredmovie':

      $controller = new MoviesController();
      $controller->showFeaturedMovie();
      break;
    
    case 'moviesuggest':

      $controller = new MovieSuggestController();
      $controller->show();      
      break;

    case 'movie.create':

      $controller = new MoviesController();
      $controller->create();
      break;


    case 'movie.edit':

      $controller = new MoviesController();
      $controller->edit();
      break;


    case 'movie.delete':

      $controller = new MoviesController();
      $controller->delete();
      break;

     case 'movie.store':

      $controller = new MoviesController();
      $controller->store();
      break;

      case 'comment.create':

      $controller = new MoviesController();
      $controller->storeComments();
      break;

    case 'movie.update':

      $controller = new MoviesController();
      $controller->update();
      header("Location:./?page=featuredmovie&id=".$movie->id);
      break;

    case 'moviesuggestsuccess':
     
     $controller = new MovieSuggestController();
     $controller->generateSuccessPage();
     break;

     case 'merchandise':
     
     $controller = new MerchandiseController();
     $controller->showAll();
     break;


     case 'register':

     $controller = new RegisterController();
      $controller->show();   
     break;

      case 'register.store':
      $controller = new RegisterController();
      $controller->store(); 
     break;

      case 'account':
        if(isset($_SESSION['user_id'])) {
          $controller = new AccountController();
          $controller->show();
        }else{
          header('Location: index.php?page=login');
        }
     break;

      case 'logout':
        unset($_SESSION['user_id']);
        unset($_SESSION['privilege']);
        header('Location: index.php');
     break;

      case 'login':
        $controller = new AccountController();
        $controller->showLoginForm();
     break;

       case 'login.try':
        $controller = new AccountController();
        $controller->processLoginForm();
     break;


    default:
      echo "Error 404 ! Page not found !";
      break;
  }











