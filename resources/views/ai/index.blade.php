<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI News Generator</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background-color: bisque;
            box-sizing: border-box;
        }
        .container {
            margin: 30px;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Fake News Generator</h1><br><br>
        <form method="POST" action="{{ route('result') }}">
            @csrf
            <label>Create 5 new fake news topics about</label><br><br>
            <input type="text" name="topic" Placeholder="Fake news topic"><br><br>
            <button>Generate</button>
        </form>

        @if (isset($result))
            <h3>Output:</h3>
            <div style="white-space: pre-line;">{{ $result }}</div>
        @endif

        <br><br>
        <form method="POST" action="{{ route('chat') }}">
            @csrf
            {{-- <label>Create 5 new fake news topics about</label><br><br> --}}
            <input type="text" name="chat" Placeholder="Chat with me"><br><br>
            <button>Send</button>
        </form>
        @if (isset($chat))
            <h3>Output:</h3>
            <div style="white-space: pre-line;">{{ $chat }}</div>
        @endif
    </div>
</body>
</html>