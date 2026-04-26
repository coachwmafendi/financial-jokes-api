<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Jokes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">
    <div class="max-w-md w-full bg-white rounded-2xl shadow-xl p-8 text-center">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">💰 Financial Jokes</h1>

        <div class="min-h-[120px] flex items-center justify-center mb-8">
            <p id="joke-text" class="text-lg text-gray-600 italic">Loading first joke...</p>
        </div>

        <button id="next-btn"
                onclick="fetchJoke()"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition-all duration-200 transform active:scale-95">
            Next Joke
        </button>
    </div>

    <script>
        async function fetchJoke() {
            const textEl = document.getElementById('joke-text');
            const btn = document.getElementById('next-btn');

            try {
                btn.disabled = true;
                btn.innerText = 'Loading...';
                textEl.classList.add('opacity-50');

                const response = await fetch('https://financial-jokes-api-main-5lxhou.free.laravel.cloud/api/jokes/random');
                const result = await response.json();

                // API returns { data: { id: 1, content: "..." } }
                const joke = result.data?.content || result.data || "No joke found!";
                textEl.innerText = joke;
            } catch (error) {
                textEl.innerText = "Error fetching joke. Make sure server is running on port 8001.";
                console.error(error);
            } finally {
                btn.disabled = false;
                btn.innerText = 'Next Joke';
                textEl.classList.remove('opacity-50');
            }
        }

        // Load initial joke
        window.onload = fetchJoke;
    </script>
</body>
</html>
