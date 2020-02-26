<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME?></title>
    <script src="https://kit.fontawesome.com/f344d4e75d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URLROOT;?>/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo URLROOT ?>"><?php echo SITENAME ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto" id="navbar-list">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT ?>"><i class="fas fa-home"></i> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT.'overview' ?>"><i class="fas fa-eye"></i> Overview</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-users-cog"></i> E-Management <i class="fas fa-angle-left rotate"></i></a>
        <ul class="navbar-sublist fade-menu">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT.'employees/add'?>"><i class="fas fa-plus-circle"></i> Add</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT.'employees/edit'?>"><i class="fas fa-edit"></i> Edit</a>
                </li>  
        </ul>    
    </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT.'datasets' ?>"><i class="fas fa-database"></i> Data</a>
      </li> 
    
    </ul>
  </div>
</nav>

 