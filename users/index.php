<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("location:../");
    exit;
} else {
    if ($_SESSION['status'] !== "login") {
        header("location:../");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPL Comunity</title>
    <link rel="stylesheet" href="../dist/css/main.css">
</head>

<body>
    <div class="carousel carousel-center p-4 space-x-4 rounded-box">
        <div class="carousel-item">
            <img src="../public/assets/background/background-a.webp" class="rounded-box max-h-[720px]" />
        </div>
        <div class="carousel-item">
            <img src="../public/assets/background/background-b.webp" class="rounded-box max-h-[720px]" />
        </div>
        <div class="carousel-item">
            <img src="../public/assets/background/background-c.webp" class="rounded-box max-h-[720px]" />
        </div>
    </div>
    <div class="navbar bg-base-100">
        <div class="flex-1 gap-2">
            <a class="btn btn-ghost text-xl">RPL Comunity</a>
            <label class="cursor-pointer grid place-items-center">
                <input onclick="toggleTheme()" type="checkbox" value="synthwave"
                    class="toggle theme-controller bg-base-content row-start-1 col-start-1 col-span-2" />
                <svg class="col-start-1 row-start-1 stroke-base-100 fill-base-100" xmlns="http://www.w3.org/2000/svg"
                    width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="5" />
                    <path
                        d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" />
                </svg>
                <svg class="col-start-2 row-start-1 stroke-base-100 fill-base-100" xmlns="http://www.w3.org/2000/svg"
                    width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                </svg>
            </label>
        </div>
        <div class="flex-none gap-2">
            <div class="form-control">
                <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
            </div>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="Tailwind CSS Navbar component"
                            src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>
                <ul tabindex="0"
                    class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                    <form action="../src/backend/logout.php">
                        <li>
                            <button type="submit">Logout</button>
                        </li>
                    </form>
                </ul>
            </div>
        </div>
    </div>
    <div class="container min-h-screen flex flex-col mx-auto items-center justify-center">
        <div class="flex-col justify-center">
            <h1 class="text-3xl font-bold pb-4">Hello,
                <?php echo $_SESSION['nama']; ?>
            </h1>
        </div>
    </div>

    <script>
        let theme = 'light';

        const setTheme = (newTheme) => {
            theme = newTheme;
            document.querySelector('html').setAttribute('data-theme', theme);
        };

        const toggleTheme = () => {
            setTheme(theme === 'dark' ? 'light' : 'dark');
        };

        setTheme(theme);

    </script>
</body>

</html>