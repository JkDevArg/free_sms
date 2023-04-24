<!doctype html>
<html lang="en">

<head>
    <title>Sms Fake</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <main class="container">
        <div class="alert alert-info" role="alert">
            NOTE: Only One Text Message Is Allowed Per Day
        </div>
        <div class="card">
            <div class="card-body">
                <form id="form_send" action="send_sms.php" method="POST">
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="phone_number" placeholder="phone number" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="3" required></textarea>
                    </div>
                    <button type="submit" id="send_message" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
        <hr>
        <div class="alert alert-info d-none" id="response_function" role="alert"></div>
    </main>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>