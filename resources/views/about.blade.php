<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Contact Us | QRCode-Me</title>
</head>

<body>
    <header class="bg-black py-3">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}"><img src="{{ asset('logo/logo_tech.png') }}" alt="Logo" class="h-15 w-36 mr-2"></a>
            <div class="flex items-center">
                <nav>
                    <a href="/" class="text-white mr-4">Home</a>
                    <a href="dashboard" class="text-white">Generate QRcode</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="text-white ml-4" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <svg class="w-5 h-5 fill-current inline-block" viewBox="0 0 20 20">
                            <path d="M13 7V5a5 5 0 0 0-5-5H5a5 5 0 0 0-5 5v10a5 5 0 0 0 5 5h8a5 5 0 0 0 5-5v-2h-2v2a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3h3v2H5a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V7h-2z" />
                        </svg>
                        Logout
                    </a>
                </nav>
            </div>
        </div>
    </header>

    <main class="container mx-auto mt-8 mb-auto">
        <div class="w-full pr-6 max-w-screen-lg mx-auto p-4 border border-gray-300 rounded shadow-md">
            <h1 class="text-3xl font-bold mb-4">About us</h1>

            <p>This project was inspired by several factors. Firstly, the main motivation was the desire to provide a useful
                tool for both individuals and businesses. The need for a convenient solution for a variety of purposes, such as
                sharing contact information and promoting advertisements, was identified. Given that numerous businesses and
                organizations require a reliable and flexible QR Code generator to create and personalize their codes, this
                presented a market opportunity that would meet these requirements. The fascination with the technical aspects
                of QR Codes, such as their encoding, decoding, and error correction algorithms, was also a significant factor
                that inspired this project. Furthermore, the exploration of the possibilities and limitations of QR Codes
                contributed to the inspiration behind the project. Click <a href="https://github.com/elameen37/qrcode_generator"><i>here</i></a> to view source code.
            </p>
        </div>
    </main>

    <footer class="bg-black text-white py-5">
        <div class="container mx-auto flex justify-between items-center">
            <div class="ml-4">
                All rights reserved &copy; 2023
            </div>

        </div>
    </footer>
</body>

</html>