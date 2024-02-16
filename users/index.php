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

<body class="scrollbar-thin overflow-y-scroll scrollbar-track-slate-200 scrollbar-thumb-blue-500">
    <div class="carousel carousel-center p-4 space-x-4 rounded-box max-w-full">
        <div class="carousel-item relative max-h-[48rem] max-w-full overflow-hidden">
            <img src="../public/assets/background/background-a.webp" class="rounded-box h-full w-full object-cover" />
        </div>
        <div class="carousel-item relative max-h-[48rem] max-w-full overflow-hidden">
            <img src="../public/assets/background/background-b.webp" class="rounded-box h-full w-full object-cover" />
        </div>
        <div class="carousel-item relative max-h-[48rem] max-w-full overflow-hidden">
            <img src="../public/assets/background/background-c.webp" class="rounded-box h-full w-full object-cover" />
        </div>
    </div>
    <div class="navbar">
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
        <div class="flex-none gap-4">
            <div class="form-control mini:hidden md:block">
                <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
            </div>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="avatar online">
                        <div class="w-10 rounded-full">
                            <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                        </div>
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
    <div class="hero min-h-screen">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <img src="https://daisyui.com/images/stock/photo-1635805737707-575885ab0820.jpg"
                class="max-w-sm rounded-lg shadow-2xl lg:ml-8" />
            <div>
                <h1 class="text-5xl font-bold">Welcome Back,
                    <?php echo $_SESSION['nama']; ?>!
                </h1>
                <p class="py-6 text-xl">Ayo lihat apa saja berita terbaru dari komunitas.</p>
                <button class="btn btn-primary bg-color-primary hover:bg-blue-800 text-white border-none">Get
                    Started</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="container">
            <h1 class="text-5xl font-bold text-center">TimeLine Jurusan Rekayasa Perangkat Lunak</h1>
        </div>
        <div class="container mt-16">
            <ul
                class="timeline timeline-snap-icon max-md:timeline-compact timeline-vertical container max-w-7xl mx-auto">
                <li>
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="timeline-start md:text-end mb-10">
                        <time class="font-mono italic">1984</time>
                        <div class="text-lg font-black">First Macintosh computer</div>
                        The Apple Macintosh—later rebranded as the Macintosh 128K—is the original Apple Macintosh
                        personal
                        computer. It played a pivotal role in establishing desktop publishing as a general office
                        function.
                        The
                        motherboard, a 9 in (23 cm) CRT monitor, and a floppy drive were housed in a beige case with
                        integrated
                        carrying handle; it came with a keyboard and single-button mouse.
                    </div>
                    <hr />
                </li>
                <li>
                    <hr />
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="timeline-end mb-10">
                        <time class="font-mono italic">1998</time>
                        <div class="text-lg font-black">iMac</div>
                        iMac is a family of all-in-one Mac desktop computers designed and built by Apple Inc. It has
                        been
                        the
                        primary part of Apple's consumer desktop offerings since its debut in August 1998, and has
                        evolved
                        through seven distinct forms
                    </div>
                    <hr />
                </li>
                <li>
                    <hr />
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="timeline-start md:text-end mb-10">
                        <time class="font-mono italic">2001</time>
                        <div class="text-lg font-black">iPod</div>
                        The iPod is a discontinued series of portable media players and multi-purpose mobile devices
                        designed
                        and marketed by Apple Inc. The first version was released on October 23, 2001, about 8+1⁄2
                        months
                        after
                        the Macintosh version of iTunes was released. Apple sold an estimated 450 million iPod products
                        as
                        of
                        2022. Apple discontinued the iPod product line on May 10, 2022. At over 20 years, the iPod brand
                        is
                        the
                        oldest to be discontinued by Apple
                    </div>
                    <hr />
                </li>
                <li>
                    <hr />
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="timeline-end mb-10">
                        <time class="font-mono italic">2007</time>
                        <div class="text-lg font-black">iPhone</div>
                        iPhone is a line of smartphones produced by Apple Inc. that use Apple's own iOS mobile operating
                        system.
                        The first-generation iPhone was announced by then-Apple CEO Steve Jobs on January 9, 2007. Since
                        then,
                        Apple has annually released new iPhone models and iOS updates. As of November 1, 2018, more than
                        2.2
                        billion iPhones had been sold. As of 2022, the iPhone accounts for 15.6% of global smartphone
                        market
                        share
                    </div>
                    <hr />
                </li>
                <li>
                    <hr />
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="timeline-start md:text-end mb-10">
                        <time class="font-mono italic">2015</time>
                        <div class="text-lg font-black">Apple Watch</div>
                        The Apple Watch is a line of smartwatches produced by Apple Inc. It incorporates fitness
                        tracking,
                        health-oriented capabilities, and wireless telecommunication, and integrates with iOS and other
                        Apple
                        products and services
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <footer class="footer footer-center p-4 bg-base-300 mt-8 text-base-content">
        <aside>
            <p>Copyright © 2024 - All right reserved by Andika Alakate</p>
        </aside>
    </footer>
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