<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/0520512e82.js" crossorigin="anonymous"></script>
    <title>Form</title>

    <style>
        .center {
            display: table;
            place-items: center;
        }

    </style>
</head>

<body>
    <section class="hero has-background-black">
        <div class="hero-body container">
            <figure class="image center">
                <img src="{{ asset('logo.svg') }}" alt="" style="max-width: 200px">
            </figure>
        </div>
    </section>

    <section class="section">
        <h1 class="title">Apply for a job</h1>
        <h2 class="subtitle">Fill the resume and send it!</h2>

        <form class="box" action="/send_resume" method="POST">
            @csrf
            <div class="field">
                <label class="label">First Name *</label>
                <div class="control">
                    <input class="input" type="text" placeholder="John" name="first">
                </div>
                @error('first')
                    <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label class="label">Last Name *</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Doe" name="last">
                </div>
                @error('last')
                    <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label class="label">Email *</label>
                <div class="control has-icons-left">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input class="input" type="text" placeholder="john.doe@example.com" name="email">
                </div>
                @error('email')
                    <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label class="label">Why should we hire you? *</label>
                <div class="control">
                    <textarea class="textarea" placeholder="I am the best employee!" name="why"></textarea>
                </div>
                @error('last')
                    <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <button class="button is-primary">Apply</button>
        </form>
    </section>





</body>

</html>
