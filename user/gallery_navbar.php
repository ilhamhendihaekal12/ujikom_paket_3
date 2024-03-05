<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Rancho&display=swap');

:root {
    --primary: #094b65;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    
      justify-content: center;
    align-items: center;
    overflow-x: hidden;
    background:#fff;
    min-height: 100vh;
}

#header {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 30px 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
}

#header .logo {
    color: var(--primary);
    font-weight: 700;
    font-size: 2em;
    text-decoration: none;
}

#header ul {
    display: flex;
    justify-content: center;
    align-items: center;
}

#header ul li {
    list-style: none;
    margin-left: 20px;
}

#header ul li a {
    text-decoration: none;
    padding: 6px 15px;
    color: var(--primary);
    border-radius: 20px;
}

#header ul li a:hover,
#header ul li a.active {
    background: var(--primary);
    color: #fff;
}

section {
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

section::before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100px;
    background: linear-gradient(to top, var(--primary), transparent);
    z-index: 10;
}

section img {
    position: absolute;
    top: 0px;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    pointer-events: none;
}

section #text {
    position: absolute;
    color: var(--primary);
    font-size: 10vw;
    text-align: center;
    line-height: .55em;
    font-family: 'Rancho', cursive;
    transform: translatey(-50%);
}

section #text span {
    font-size: .20em;
    letter-spacing: 2px;
    font-weight: 400;
}

#btn {
    text-decoration: none;
    display: inline-block;
    padding: 8px 30px;
    background: #fff;
    color: var(--primary);
    font-size: 1.2em;
    font-weight: 500;
    letter-spacing: 2px;
    border-radius: 40px;
    transform: translatey(100px);
}

.sec {
    position: relative;
    padding: 40px;
    background: var(--primary);
}

.sec h2 {
    font-size: 3.5em;
    color: #fff;
    margin-bottom: 10px;
}

.sec p {
    font-size: 1em;
    color: #fff;
}

footer {
    position: relative;
    padding: 0px 100px;
    background: var(--primary);
}

footer a {
    text-decoration: none;
    color: #fff;
}
nav a{
    position: relative;
    font-size: 1.1rem;
    color: #fff;
    text-decoration: none;
    padding: 6px 20px; 
    transition: .5s; 
}

nav a:hover{
    color: #0ef;
}

nav a span {
    position:absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    border-bottom: 2px solid #0ef;
    border-radius: 15px;
    transform: scale(0) translateY(50px);
    transition: .5s;
}
nav a:hover span {

    transform: scale(1) translateY(0px);
    opacity: 1;
}

  </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="bg-gray-800 p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-bold">Gallery</a>
            <div class="flex items-center">
                
                <nav>
        <a href="user_dashboard.php">Album<span></span></a>
        <a href="photo.php">Foto<span></span></a>
        <a href="logout.php" class="mx-3">Logout</a>
    </nav>
            </div>
        </div>
    </nav>

</body>
</html>
