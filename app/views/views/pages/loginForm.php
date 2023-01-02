<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    
<div class="flex items-center fixed top-0 justify-center z-40 h-screen w-screen bg-black/[.6]">
    <div class="z-50 px-8 w-1/3  py-6 text-left bg-white shadow-lg">
        <h3 class="text-2xl font-bold text-black text-center">Login to your account</h3>
        <form action="../../index.php?a=login" method="POST">
            <div class="mt-4">
                <div>
                    <label class="block" for="email">Email<label>
                            <input name="Email" type="text" placeholder="Email"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                            <input name="password" type="password" placeholder="Password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="flex items-baseline justify-between">
                    <button value="submit" class="px-6 py-2 mt-4 text-white bg-orange-600 rounded-lg hover:bg-orange-900">Login</button>
                    <a href="#" class="text-sm text-orange-600 hover:underline">Forgot password?</a>
                </div>
            </div>
        </form>
    </div>
</div>
