<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./dist/css/main.css">
</head>

<body class="bg-no-repeat bg-cover" style="background-image: url('public/assets/background/background-7.webp');">
    <div class="flex flex-col items-center justify-center h-screen overflow-hidden">
        <div
            class="w-full p-6 bg-white bg-opacity-50 backdrop-blur-md border-t-4 border-gray-600 rounded-lg shadow-md border-top lg:max-w-md sm:max-w-md minni:max-w-mini">
            <h1 class="text-3xl font-bold text-center text-black">RPL Comunity</h1>
            <form class="space-y-4" autocomplete="off" action="./src/backend/login.php" method="post">
                <input autocomplete="false" name="hidden" type="text" class="hidden" disabled hidden>
                <div>
                    <label class="label" for="email">
                        <span class="text-base label-text text-black">Email</span>
                    </label>
                    <input type="text" placeholder="Email Address" id="email" name="email" autocomplete="off"
                        class="w-full input input-bordered bg-white text-black focus-within:outline-black autofill:bg-white autofill:text-white" />
                </div>
                <div>
                    <label class="label" for="password">
                        <span class="text-base label-text text-black">Password</span>
                    </label>
                    <input type="password" placeholder="Enter Password" id="password" name="password" autocomplete="off"
                        class="w-full input input-bordered bg-white text-black focus-within:outline-black autofill:bg-white autofill:text-white" />
                </div>
                <div>
                    <button class="btn btn-block bg-slate-900 text-white">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>