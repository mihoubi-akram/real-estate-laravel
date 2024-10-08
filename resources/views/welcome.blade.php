<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<title>@yield('title') | Admin</title>
<body>
  <x-navbar :options="[
    ['name' => 'Biens', 'link' => '/admin/property'],
    ['name' => 'Options', 'link' => '/contact']]" ></x-navbar>
    @if(session('success'))
      <div id="alert" class="fixed top-15 right-15 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded shadow-md w-100 max-w-sm w-full" role="alert">
          <strong class="font-bold">Success!</strong>
          <span class="block sm:inline">{{ session('success') }}</span>
          <button id="close-alert" class="absolute top-0 bottom-0 right-0 px-4 py-3">
              <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652a1 1 0 10-1.414-1.414L10 7.172 7.066 4.238a1 1 0 00-1.414 1.414l2.934 2.934-2.934 2.934a1 1 0 101.414 1.414L10 10.828l2.934 2.934a1 1 0 101.414-1.414l-2.934-2.934 2.934-2.934z"/></svg>
          </button>
      </div>
    @endif


  <div class="container mx-auto px-4">
    @yield('content')
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const alert = document.getElementById('alert');
        const closeButton = document.getElementById('close-alert');
        
        if (alert) {
            setTimeout(() => {
                alert.style.display = 'none';
            }, 5000); // 5 seconds
        }
        
        if (closeButton) {
            closeButton.addEventListener('click', function () {
                alert.style.display = 'none';
            });
        }
    });
</script>
</body>
</html>