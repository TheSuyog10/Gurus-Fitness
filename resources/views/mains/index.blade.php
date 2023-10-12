<body style="height: 200vh">
    @include('partials._header');
    <x-flash-message />
    <h1>Hello</h1>
    @auth
        <p>Welcome, {{ auth()->user()->name }}</p>
    @endauth
    @include('partials._footer');


</body>
<style>
    html,
    body {
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background-color: transparent;
            border-radius: 100px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #3e5c76;
            border-radius: 100px;
        }
    }
</style>
