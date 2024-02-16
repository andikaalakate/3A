<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./dist/css/main.css">
</head>

<body class="bg-no-repeat bg-cover bg-center"
    style="background-image: url('public/assets/background/background-7.webp');">
    <div class="hero min-h-screen">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center lg:text-left lg:pl-8">
                <h1 class="text-5xl font-bold text-white">Login sekarang!</h1>
                <p class="py-6 text-white">Untuk mendapatkan berita terbaru mengenai Komunitas Rekayasa Perangkat Lunak.
                </p>
            </div>
            <div
                class="card shrink-0 w-full max-w-sm shadow-2xl shadow-slate-900 drop-shadow-sm bg-slate-200 bg-opacity-50">
                <form class="card-body" autocomplete="off" action="./src/backend/login.php" method="post">
                    <div class="form-control">
                        <label class="label" for="email">
                            <span class="label-text text-black font-semibold text-lg">Email</span>
                        </label>
                        <label
                            class="input input-bordered flex items-center gap-2 bg-white text-black focus-within:outline-black autofill:bg-white autofill:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                class="w-4 h-4 opacity-70">
                                <path
                                    d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                                <path
                                    d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                            </svg>
                            <input type="email" id="email" name="email" class="grow w-full h-full p-2"
                                placeholder="Email" autocomplete="off" required />
                        </label>
                    </div>
                    <div class="form-control">
                        <label class="label" for="password">
                            <span class="label-text text-black font-semibold text-lg">Password</span>
                        </label>
                        <label
                            class="input input-bordered flex items-center gap-2 bg-white text-black focus-within:outline-black autofill:bg-white autofill:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                class="w-4 h-4 opacity-70">
                                <path fill-rule="evenodd"
                                    d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <input type="password" id="password" name="password" class="grow w-full h-full p-2"
                                placeholder="Password" autocomplete="off" required />
                        </label>
                    </div>

                    <div class="form-control mt-6">
                        <button class="btn btn-primary bg-color-primary hover:bg-blue-800 text-white">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>