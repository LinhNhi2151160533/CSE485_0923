<?php
$menuItems = [
    "Menu Item 1",
    "Menu Item 2",
    "Menu Item 3"
];

$userData = [
    ["Griffin", "Griffin@gmail.com", "admin", "24/4/2003", "secondary"],
    ["Jack", "Jack@gmail.com", "admin", "24/4/2003", "success"],
    ["Swanson", "Swanson@gmail.com", "admin", "24/4/2003", "secondary"],
    ["Brown", "Brown@gmail.com", "admin", "24/4/2003", "secondary"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container-fluid ">
    <div class="row pt-4">
        <!-- Sidebar -->
        <div class="sidebar col-md-2 px-5 py-2 h-100vh">
            <div class="img">
                <img src="img/logo.png" alt="logo" width="150">
            </div>
            <ul class="nav flex-column mb-3 pt-3">
                <?php foreach ($menuItems as $menuItem) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-person-fill"></i><?php echo $menuItem; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- Main Content -->
        <div class="maincontent col-md-9 px-2">
            <div class="header">
                <div class="topct d-flex justify-content-between">
                    <h1><i class="bi bi-list pl-1"></i><span><span></span> User</span></h1>
                    <a href="">
                        <i class="bi bi-search "><input type="text" class="h-10% mx-5 rounded-3 " placeholder=" search here"></i>
                    </a>
                </div>
            </div>
            <div class="phanthan">
                <div class="filter pt-4">
                    <h3>Filter</h3>
                    <form action="" class="pt-3">
                        <div class="fourip d-flex justify-content-around">
                            <?php for ($i = 0; $i < 4; $i++) : ?>
                                <input type="text" placeholder="Email" class="form-control form-control-sm w-auto">
                            <?php endfor; ?>
                            <div class="hehe">
                                <button class="btn btn-primary btn-md"><i class="bi bi-search"></i>Filter</button>
                                <button class="btn btn-primary btn-md">Clear</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="usercontent pt-3">
                    <div class="hduser d-flex justify-content-between">
                        <h3>Users</h3>
                        <div class="2btn px-5">
                            <button class="btn btn-primary btn-md">Delete</button>
                            <a href="adduser.php" class="btn btn-primary btn-md">ADD USERS <span></span><i class="bi bi-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="userin4 bg-white">
                    <table class="m-0 table">
                        <tr>
                            <th></th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Groups</th>
                            <th>Date of Birth</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($userData as $user) : ?>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td><?php echo $user[0]; ?></td>
                                <td><?php echo $user[1]; ?></td>
                                <td><p class="rounded-4 mb-0 text-white bg-danger px-2 py-1" style="width: 50%; text-align: center;">admin</p></td>
                                <td><?php echo $user[2]; ?></td>
                                <td class="py-0"><i class="bi bi-dot h1 text-center text-<?php echo $user[4]; ?>"></i></td>
                                <td>
                                  <div class="row">
                                      <i class="bi bi-shield-fill bg-success text-white rounded-3 p-0 w-auto p-1"></i>
                                      <i class="bi bi-pencil-fill bg-warning text-white rounded-3 p-0 w-auto p-1 mx-1"></i>
                                      <i class="bi bi-trash-fill bg-danger text-white rounded-3 p-0 w-auto p-1"></i>
                                  </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <div class="countpage d-flex justify-content-between pt-3">
                        <span>Page 1 of 4</span>
                        <div class="3btn" style="margin-right: 5rem; ">
                            <i class="bi bi-caret-left-fill"></i>
                            <button class="rounded-3 btn btn-md  btn1">1</button>
                            <button class="rounded-3 btn btn-md ">2</button>
                            <button class="rounded-3 btn btn-md ">3</button>
                            <i class="bi bi-caret-right-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div
