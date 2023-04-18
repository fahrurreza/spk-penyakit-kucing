<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="{{asset('img/apple-icon.png')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}"
    />
    <link rel="stylesheet" href="{{asset('styles/tailwind.css')}}" />
    <title>Login | Notus JS by Creative Tim</title>
  </head>
  <body class="text-blueGray-700 antialiased">
    @yield('content')
    </body>
  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
  <script>
    /* Make dynamic date appear */
    (function () {
      if (document.getElementById("get-current-year")) {
        document.getElementById(
          "get-current-year"
        ).innerHTML = new Date().getFullYear();
      }
    })();
    /* Function for opning navbar on mobile */
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
    /* Function for dropdowns */
    function openDropdown(event, dropdownID) {
      let element = event.target;
      while (element.nodeName !== "A") {
        element = element.parentNode;
      }
      Popper.createPopper(element, document.getElementById(dropdownID), {
        placement: "bottom-start",
      });
      document.getElementById(dropdownID).classList.toggle("hidden");
      document.getElementById(dropdownID).classList.toggle("block");
    }
  </script>
</html>
