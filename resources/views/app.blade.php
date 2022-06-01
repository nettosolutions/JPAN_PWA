<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Import Stylesheet  -->
    <link rel="stylesheet" type="text/css" href="{{ url('./css/navbar.css') }}" />
    <title>Layout</title>
    <style>
            .layout {
                

                display: grid;
                grid:
                    "sidebar body" 1fr
                    / auto 1fr;
                gap: 8px;
                }

                .sidebar { grid-area: sidebar; }
                .body { grid-area: body; }
        </style>
</head>
<body>
    <div id="app">
        <section>
            <div class="sidebar" >
                <hello-world/>
            </div>
        </section>
        <v-app app>
            <v-container>
                <v-btn color="primary">
                    Primary
                </v-btn>
                <v-btn color="secondary">
                    Secondary
                </v-btn>
                <v-btn color="error">
                    Error
                </v-btn>
            </v-container>
        </v-app>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('/sw.js') }}" ></script>
    <script>
        if(!navigator.serviceWorker.controller){
            navigator.serviceWorker.register("/sw.js").then( function(reg)
            {
                console.log("Service worker has been registered for scope: " + reg.scope );
            });
        }
    </script>
</body>
</html>