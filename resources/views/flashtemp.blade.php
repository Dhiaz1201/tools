<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>FLash Template </title>
</head>
<body class="bg-gray-200">
    <nav class="flex items-center justify-between md:justify-center flex-wrap bg-gray-800 p-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
          <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
          <span class="font-semibold text-xl tracking-tight">Flash Template</span>
        </div>
        <div class="block lg:hidden">
          <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
          </button>
        </div>
        </div>
      </nav>
    <div class="container mx-auto my-4">
        <form action="{{ route('flashtemp.store') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="flex flex-col">
            <label class="block mr-4">
                <span class="text-gray-700 font-sans font-semibold">ZIP TEMPLATE</span>
                <input type="file" name="zip" class="form-input mt-1 block w-full border border-blue-700 mb-4" placeholder="Pilih file">
            </label>
        </div>
       <div class="flex w-full">
           <div class="flex w-full h-screen px-2">
            <div class="block w-2/6 mr-4">
                <span class="text-gray-700 font-sans font-semibold">Code Nav Bar</span>
                <textarea name="codenavbar" class="form-textarea mt-1 block w-full border border-blue-700" rows="17" placeholder="Enter some long form content."></textarea>
            </div>
            <div class="block w-2/6 mr-4">
                <span class="text-gray-700 font-sans font-semibold">Code Side Bar</span>
                <textarea name="codesidebar" class="form-textarea mt-1 block w-full mb-4 border border-blue-700" rows="17" placeholder="Enter some long form content."></textarea>
                <div class="flex justify-center mt-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        Include
                      </button>
                </div>
            </div>
            <div class="block w-2/6">
                <span class="text-gray-700 font-sans font-semibold">Code Content</span>
                <textarea class="form-textarea mt-1 block w-full mb-4 border border-blue-700" rows="17" placeholder="Enter some long form content."></textarea>
            </div>
           </div>
        </div>
    </div>
</form>
</body>
<script src="{{ asset('js/app.js') }}" defer></script>
</html>
