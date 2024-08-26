<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <style>
    body {
      background-color: red;
    }
  </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-red-100 dark:bg-slate-800 text-cor4 flex flex-col min-h-screen" id="body">
    @include('layouts.navbar')
    
    <div class="container mx-auto mt-10 flex-grow">
        <h1 class="text-cor5 text-4xl font-bold text-center mt-10">testando</h1>
        <h3 style=" color: red background-color: green">picghjrsu6 yehyo</h3>
        <p class="text-center mt-4">Este é um exemplo de menu hambúrguer utilizando Tailwind CSS.</p>
        
        <div>
           @include('articles.images')
        </div>
    </div>

    <footer id="footer" class="bg-cor1 p-4">
        <h1 class="text-white p-4 text-center font-bold">Criador Jeredy</h1>
    </footer>

    <button id="theme-toggle" class="fixed top-20 right-120 bg-gray-600 dark:bg-gray-100 text-gray-100 dark:text-gray-800 p-1 rounded-full">
        <svg id="theme-toggle-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <!-- Ícones serão adicionados via JavaScript -->
        </svg>
    </button>

    @vite('resources/js/app.js')
    
</body>
</html>
