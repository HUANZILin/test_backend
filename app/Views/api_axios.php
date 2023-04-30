<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>API Test2</title>
</head>

<body>
    <form action="" id="test_form">
        <label for="">name: </label>
        <input type="text" name="name">
        <br>
        <label for="">password: </label>
        <input type="text" name="password">
        <br>
        <button type="submit">Submit</button>
        <button type="reset">Update</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        const base_url = "http://localhost:8080";

        const api_encapsulation = {
            GET: (url) => {
                axios.get(url);
            },
            POST: (url, data) => {
                axios.post(url, data);
            },
            PUT: (url, data) => {
                axios.put(url, data);
            },
            DELETE: (url) => {
                axios.delete(url);
            },
        };

        api_encapsulation.GET(`${base_url}/user`);
        api_encapsulation.POST(`${base_url}/user`);
        api_encapsulation.PUT(`${base_url}/user/1`);
        api_encapsulation.DELETE(`${base_url}/user/1`);

        let test_form = document.getElementById("test_form");

        test_form.addEventListener("submit", (e) => {
            e.preventDefault();
            let form_data = new FormData(test_form);
            api_encapsulation.POST(`${base_url}/plus`, form_data);
        });

        test_form.addEventListener("reset", (e) => {
            e.preventDefault();
            let form_data = new FormData(test_form);
            api_encapsulation.PUT(`${base_url}/plus/1`, JSON.stringify(Object.fromEntries(form_data)));
        });
    </script>
</body>

</html>